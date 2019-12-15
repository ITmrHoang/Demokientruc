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
@if ($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>
  </button>
</div>
@endif

<div class="container-fluid">
  <form action="{{route('blogs.update',['id'=> $blog->id])}}" method="post" enctype="multipart/form-data" >
  	 @method('PUT')

    {{csrf_field()}}
    <div class="row"><h2>Sửa kế hoạch:</h2></div>
    <div class="row ">
      <div class="form-group row"><label for="tieude" class="col-md-2 col-form-label" > tieu de</label>
        <div class="col-md-3">
          <input type="text" id="tieude" class="form-control" name="tieude"  value="{{$blog->tieude}}">
        </div>
        <div class="form-group row"><label for="noidung" class="col-md-2 col-form-label" >  noi dung</label>
        <div class="col-md-3">
          <input type="text" id="noidung" class="form-control" name="noidung"  value="{{$blog->noidung}}">
        </div>
      </div>
      <input type="submit" class="btn btn-success">

@endsection