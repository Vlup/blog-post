@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-md-8" role="alert">{{ session('success') }}</div> 
@endif
  
@if($errors->any())
  <div class="alert alert-danger col-md-8" role="alert">
    <h6>Action Failed!</h6>
    <ul class="mb-0">
      @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div> 
@endif

<div class="table-responsive col-md-8">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createCategory">
    Create new category
  </button>

  <!-- Modal -->
  <div class="modal fade" id="createCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="create-name" name="name" required autofocus>
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="create-slug" name="slug" required>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td class="col-md-1">{{ $loop->iteration }}</td>
          <td class="col-md-3">{{ $category->name }}</td>
          @if ($category->image)
            <td class="col-md-1" style="max-height: 150px; max-width:200px; overflow:hidden;">
              <img class="img-fluid" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">    
            </td>
          @else
            <td class="col-md-2" style="max-height: 150px; max-width:200px; overflow:hidden;">
              <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $category->name }}" alt="{{ $category->name }}">    
            </td>
          @endif
          <td class="col-md-5">
            <button type="button" id="editButton" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#editCategory-{{ $category->slug }}">
              <span data-feather="edit"></span>
            </button>
            <div class="modal fade" id="editCategory-{{ $category->slug }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="/dashboard/categories/{{ $category->slug }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Category</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="{{ $category->slug }}" class="form-label">Name</label>
                        <input type="text" class="form-control" id="{{ $category->slug }}" name="name" value="{{$category->name}}" onchange="AutoSlug(this)" required autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="slug-{{ $category->slug }}" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug-{{ $category->slug }}" name="slug" value="{{$category->slug}}" required>
                      </div>
                      <div class="mb-3">
                        <label for="image-{{ $category->slug }}" class="form-label">Post Image</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control" type="file" id="image-{{ $category->slug }}" name="image" onchange="previewImage()">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Do you want to delete this category?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  const name = document.querySelector('#create-name');
  const slug = document.querySelector('#create-slug');

  name.addEventListener('change', () => {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  })

  function AutoSlug(e) { 
    const slug = document.querySelector(`#slug-${e.id}`)
    fetch('/dashboard/categories/checkSlug?name=' + e.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  }

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }

</script>

@endsection