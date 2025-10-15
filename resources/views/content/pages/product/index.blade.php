@extends('layouts/contentNavbarLayout')

@section('title', 'Product ')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('content')
<div class="container">
  <h1>Product</h1>
  <a href="{{ route('product.create') }}" class="btn btn-success mb-3">Add Product Item</a>

  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th>Title</th>
              <th>Slug</th>
              <th>Image</th>
              <th>Category</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->slug }}</td>
                <td>
                  @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" 
                         width="100" 
                         height="80" 
                         style="object-fit: cover; border-radius: 5px;"
                         alt="{{ $product->title }}">
                  @else
                    <div class="text-muted" style="width: 100px; height: 80px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 5px;">
                      No Image
                    </div>
                  @endif
                </td>
                <td>
                  @if($product->categories->isNotEmpty())
                    @foreach($product->categories as $category)
                      <span >{{ $category->title }}</span>
                    @endforeach
                  @else
                    <span class="text-muted">No Category</span>
                  @endif
                
                <td>
                  <div class="btn-group" role="group">
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">
                        <i class="fas fa-trash"></i> Delete
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection