<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h1>Categories <a href="/Categories-add" class="btn btn-info">Add Category</a></h1> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $category->title }}</td>
        <td>
          <a href="/category-edit/{{ $category->id }}" class="btn btn-info">Edit</button>
          <a href="/category-delete/{{ $category->id }}" class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
