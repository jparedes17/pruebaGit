@extends('main')
@section('seccion')

<div class="col-sm-9">
          <div class="well">
          <div class="container">
  <h2>Tabla Clientes</h2>
  <div class="col-sm-7">
  <div class="table-responsive">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>CustomerID</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Mr</td>
        <td>John</td>
        <td>Doe</td>
        
      </tr>
      <tr>
        <td>2</td>
        <td>Ms</td>
        <td>Mary</td>
        <td>Moe</td>
      </tr>
      <tr>
      <td>3</td>
        <td>Ms</td>
        <td>July</td>
        <td>Dooley</td>
      </tr>
    </tbody>
  </table>
</div>
          </div>
</div>
          </div>
</div>

@endsection