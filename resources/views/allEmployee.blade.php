<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Employee</h2>

<table>

  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Job Title</th>
    <th>Age</th>
    <th>email</th>
    <th>Phone Number</th>
  </tr>
  @foreach ($employees as $employee )
  <tr>
   <td>{{ $employee->id }}</td>
   <td>{{ $employee->name }}</td>
   <td>{{ $employee->address }}</td>
   <td>{{ $employee->job_title }}</td>
   <td>{{ $employee->age }}</td>
   <td>{{ $employee->email }}</td>
   <td>{{ $employee->phone_number }}</td>
  </tr>
  @endforeach
</table>
<br><br>
<a href="{{ url('home') }}"><button type="button">Insert New Employee</button></a>
</body>
</html>
