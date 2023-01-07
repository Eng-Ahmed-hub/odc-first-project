<!DOCTYPE html>
<html>
<head>
    <title>Form Employee</title>
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
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Form Employees
    </div>
    <div class="card-body">
      <form name="home" id="home" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="title" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" id="title" name="address" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Job title</label>
            <input type="text" id="title" name="job_title" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" id="title" name="age" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" id="title" name="email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">phone number</label>
            <input type="text" id="title" name="phone_number" class="form-control" required="">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('show') }}"><button type="button">Show All Employees</button></a>
      </form>
    </div>
  </div>
</div>
</body>
</html>
