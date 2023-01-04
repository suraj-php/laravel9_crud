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
  <h1>Add Categories</h1> 
    <div class="row">
      <div class="col-md-4">
        <form action="post" method="Categories-store">
          @csrf
          <label><b>Title</b></label>
          <input type="text" name="title" class="form-control">
          <button type="submit" class="btn btn-info mt-3">Add Category</button>
        </form>
      </div>
    </div>
</div>

</body>
</html>
