@extends('layouts/contentNavbarLayout')

@section('title', isset($product) ? 'Edit Product' : 'Add Product')

@section('content')
<div class="container">
    <form action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($product))
            @method('PUT')
        @endif
        
        <div class="row">
            <!-- Left side -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Product title" 
                                   value="{{ old('title', $product->title ?? '') }}">
                            @error('title')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                          
                          <div class="mt-2">
                              <label class="form-label">Slug</label>
                              <div class="input-group">
                                  <input type="text" name="slug" id="slugInput" class="form-control" 
                                         value="{{ old('slug', $product->slug ?? '') }}" 
                                         placeholder="slug" readonly>
                                  <button type="button" class="btn btn-outline-secondary" onclick="enableSlugEditing()" id="editSlugBtn">
                                      <i class="fas fa-edit"></i> Edit
                                  </button>
                              </div>
                              @error('slug')
                                <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>

                        <!-- Description (with CKEditor) -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="6">{{ old('description', $product->description ?? '') }}</textarea>
                            @error('description')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side -->
            <div class="col-md-3">
                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">
                        {{ isset($product) ? 'Update Product' : 'Publish Product' }}
                    </button>
                </div>

                <!-- Categories -->
                <div class="card mb-3">
                    <div class="card-body">
                        <label class="form-label">Categories</label>
                        <div class="d-flex flex-column">
                            @foreach($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" 
                                        type="checkbox" 
                                        name="categories[]" 
                                        value="{{ $category->id }}" 
                                        id="category-{{ $category->id }}"
                                        {{ in_array($category->id, old('categories', isset($product) ? $product->categories->pluck('id')->toArray() : [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category-{{ $category->id }}">
                                        {{ $category->title }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        @error('categories')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                        @error('categories.*')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="card mb-3">
                    <div class="card-body">
                        <label class="form-label">Featured Image</label>
                        
                        <!-- Hidden file input -->
                        <input type="file" id="featuredImageInput" name="featured_image" accept="image/*" style="display: none;" />
                        
                        <!-- Set featured image button -->
                        <div id="setFeaturedBtn" style="margin-top:10px; color:blue; cursor: pointer; {{ isset($product) && $product->image ? 'display: none;' : '' }}" 
                             onclick="document.getElementById('featuredImageInput').click()">
                            <i class="fas fa-plus me-2"></i>Set featured image
                        </div>

                        <!-- Featured image preview -->
                        <div id="featuredImageContainer" style="{{ isset($product) && $product->image ? 'display: block;' : 'display: none;' }} margin-top:10px;">
                            <div class="frontend-item d-inline-block position-relative">
                                @if(isset($product) && $product->image)
                                    <img id="featuredImagePreview" src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded border" style="max-height:200px; width:100%; object-fit: cover;">
                                @else
                                    <img id="featuredImagePreview" src="" class="img-fluid rounded border" style="max-height:200px; width:100%; object-fit: cover;">
                                @endif
                                <div class="removeFeaturedImage cursor-pointer text-danger text-center pt-3" onclick="removeFeaturedImage()">
                                    Remove Featured Image
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Slug Generation Functionality
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slugInput');
    const editSlugBtn = document.getElementById('editSlugBtn');
    
    let isManualEdit = {{ isset($product) ? 'true' : 'false' }};
    let originalSlug = '{{ $product->slug ?? '' }}';

    // Function to generate slug from text
    function generateSlug(text) {
        return text
            .toString()
            .toLowerCase()
            .trim()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }

    // Update slug when title changes (only for new products)
    if (titleInput && slugInput) {
        // Only auto-generate for new products, not when editing
        if (!originalSlug) {
            titleInput.addEventListener('input', function() {
                if (!isManualEdit) {
                    const slug = generateSlug(this.value);
                    slugInput.value = slug;
                }
            });

            // Initialize slug if empty
            if (!slugInput.value && titleInput.value) {
                slugInput.value = generateSlug(titleInput.value);
            }
        }
    }

    // Featured Image Functionality
    const featuredImageInput = document.getElementById('featuredImageInput');
    
    if (featuredImageInput) {
        featuredImageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            if (file) {
                // Check if file is an image
                if (!file.type.match('image.*')) {
                    alert('Please select an image file.');
                    return;
                }

                // Check file size (max 5MB)
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB.');
                    return;
                }

                // Create a FileReader to read the image
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    // Show the preview
                    document.getElementById('featuredImagePreview').src = e.target.result;
                    document.getElementById('featuredImageContainer').style.display = 'block';
                    
                    // Hide the "Set featured image" text
                    document.getElementById('setFeaturedBtn').style.display = 'none';
                }
                
                reader.readAsDataURL(file);
            }
        });
    }

    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
        })
        .catch(error => {
            console.error("CKEditor error:", error);
        });
});

// Enable manual slug editing
function enableSlugEditing() {
    const slugInput = document.getElementById('slugInput');
    const editSlugBtn = document.getElementById('editSlugBtn');
    
    if (slugInput.readOnly) {
        // Enable editing
        slugInput.readOnly = false;
        slugInput.focus();
        slugInput.select();
        editSlugBtn.innerHTML = '<i class="fas fa-check"></i> Save';
        editSlugBtn.classList.remove('btn-outline-secondary');
        editSlugBtn.classList.add('btn-success');
        window.isManualEdit = true;
    } else {
        // Save and disable editing
        slugInput.readOnly = true;
        editSlugBtn.innerHTML = '<i class="fas fa-edit"></i> Edit';
        editSlugBtn.classList.remove('btn-success');
        editSlugBtn.classList.add('btn-outline-secondary');
        window.isManualEdit = true;
        
        // Format the slug properly
        function generateSlug(text) {
            return text
                .toString()
                .toLowerCase()
                .trim()
                .replace(/\s+/g, '-')
                .replace(/[^\w\-]+/g, '')
                .replace(/\-\-+/g, '-')
                .replace(/^-+/, '')
                .replace(/-+$/, '');
        }
        
        slugInput.value = generateSlug(slugInput.value);
    }
}

// Remove featured image function
function removeFeaturedImage() {
    // Clear the file input
    document.getElementById('featuredImageInput').value = '';
    
    // Clear the preview image
    document.getElementById('featuredImagePreview').src = '';
    
    // Hide the image preview container
    document.getElementById('featuredImageContainer').style.display = 'none';
    
    // Show the "Set featured image" text
    document.getElementById('setFeaturedBtn').style.display = 'block';
    
    // If we're in edit mode, we need to add a hidden field to indicate image removal
    const isEditMode = {{ isset($product) ? 'true' : 'false' }};
    if (isEditMode) {
        // Remove any existing remove_image field first
        const existingRemoveField = document.getElementById('remove_image');
        if (existingRemoveField) {
            existingRemoveField.remove();
        }
        
        // Add hidden input to indicate image should be removed
        const form = document.querySelector('form');
        const removeField = document.createElement('input');
        removeField.type = 'hidden';
        removeField.name = 'remove_image';
        removeField.id = 'remove_image';
        removeField.value = '1';
        form.appendChild(removeField);
    }
}
</script>

<style>
.ck-editor__editable {
    min-height: 250px;
}

.cursor-pointer {
    cursor: pointer;
}

.removeFeaturedImage:hover {
    text-decoration: underline;
}

/* Slug input styling */
#slugInput:read-only {
    background-color: #f8f9fa;
    border-color: #e9ecef;
}
</style>
@endsection