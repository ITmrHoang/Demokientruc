@extends('layout')
@section('content')
@if ( Session::has('success') )
<div class="alert alert-success alert-dismissible" role="alert">
  <strong>{{ Session::get('success') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
<div class="alert alert-danger alert-dismissible" role="alert">
  <strong>{{ Session::get('error') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
</div>
@endif

<div class="container-fluid">
  <form action="{{route('blogs.store')}}" method="post"  enctype="multipart/form-data" >

    {{csrf_field()}}
    <div class="row"><h2>Tạo kế bài mới:</h2></div>
    <div class="row ">
      <div class="form-group row"><label for="tieude" class="col-md-2 col-form-label" > Tiêu đề</label>
        <div class="col-md-3">
          <input type="text" id="tieude" class="form-control" name="tieude">
        </div>
      </div>
      <div class="form-group row"><label for="noidung" class="col-md-2"> Nội dung</label>
        <div class="col-md-3">
          <input type="text" = class="form-control" name="noidung"></td>
        </div>
      </div>


 <input type="submit" class="btn-success">


</form>
</div>

@endsection