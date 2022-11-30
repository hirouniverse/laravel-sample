<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('post/confirm')}}">
       @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"
            class="form-control @error('title') is-invalid @enderror">
        </div>
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
          <label for="description">Description</label>
          <textarea
            name="description"
            class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
        </div>
        @error('description')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>