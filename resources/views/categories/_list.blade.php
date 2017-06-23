@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <!-- page title -->
  <div class="page__title">
    <span>รายการประเภทสินค้า</span>
    <a class="btn btn-primary pull-right">
      <i class="fa fa-plus" aria-hidden="true"></i>
      New
    </a>
  </div>

  <hr />
  <!-- page title -->

  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <tr>
            <th>#</th>
            <th>ประเภทสินค้า</th>
            <th>รายละเอียด</th>
            <th>Actions</th>
          </tr>
          @foreach($categories as $category)
          <tr>
            <td>{{$category->category_id}}</td>
            <td>{{$category->category_name}}</td>
            <td>{{$category->description}}</td>
            <td>
              <a href="{{$category->category_id}}" class="btn btn-warning">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>
              <a href="{{$category->category_id}}" class="btn btn-danger">
                <i class="fa fa-times" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
