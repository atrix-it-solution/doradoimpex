@extends('layouts/contentNavbarLayout')

@section('title', 'Blog ')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('content')
<div class="container">
  <h1>Blog</h1>
  <a href="{{ route('blog.create') }}" class="btn btn-success mb-3">Add Blog Item</a>

  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th>Blog Title</th>
              <th>Blog Slug</th>
              <th>Blog Image</th>
              <th>Author Name</th>
              <th>Author Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($blogs as $blog)
              <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->slug }}</td>
                <td>
                  @if($blog->featured_image)
                    <img src="{{ asset('storage/' . $blog->featured_image) }}" 
                         width="100" 
                         height="80" 
                         style="object-fit: cover; border-radius: 5px;"
                         alt="{{ $blog->title }}">
                  @else
                    <div class="text-muted" style="width: 100px; height: 80px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 5px;">
                      No Image
                    </div>
                  @endif
                </td>
                <td>{{ $blog->author }}</td>
                <td>
                  @if($blog->author_image)
                    <img src="{{ asset('storage/' . $blog->author_image) }}" 
                         width="100" 
                         height="80" 
                         style="object-fit: cover; border-radius: 5px;"
                         alt="{{ $blog->author}}">
                  @else
                    <div class="text-muted" style="width: 100px; height: 80px; display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                      <img src="{{ asset('assets/img/authorimage/child-1837375_640.webp') }}" alt="Default Author" width="70" height="70" />
                    </div>
                  @endif
                </td>
                
                <td>
                  <div class="btn-group gap" role="group">
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-warning ">
                    <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline; margin-left: 15px;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">
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