@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <!-- page title -->
  <div class="page__title">
    <span>รายการสินค้า</span>
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
            <th>บาร์โค้ด</th>
            <th>ประเภทสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาทุน</th>
            <th>ราคาขาย</th>
            <th>จำนวน</th>
            <th>สาขา</th>
            <th>Actions</th>
          </tr>
          @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->barcode}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->name_th}}</td>
            <td>{{$product->cost}}</td>
            <td>{{$product->retail_price}}</td>
            <td>{{$product->stock_amount}}</td>
            <td>{{$product->location_id}}</td>
            <td>
              <a href="{{$product->product_id}}" class="btn btn-warning">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>
              <a href="{{$product->product_id}}" class="btn btn-danger">
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
