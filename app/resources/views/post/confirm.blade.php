<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('post')}}">
      @csrf
      <label for="title">Title</label>
      {{ $inputs['title'] }}
      <input
        type="hidden"
        name="title"
        value="{{ $inputs['title'] }}">
         <label for="description">Description</label>
         {{ $inputs['description'] }}
         <input
           type="hidden"
           name="description"
           value="{{ $inputs['description'] }}">
       <button type="submit" name="action" value="back">Back</button>
       <button type="submit" name="action" value="submit" class="btn btn-primary">Submit</button>
     </form>
  </div>
</body>
</html>