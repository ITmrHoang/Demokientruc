@extends('layout')
@section('content')
<div class="col-md-6 text-center">
			<h5 >Danh sách blogs</h5>
			<div class="table-responsive-md">
				<table class="table table-hover ">
					<thead>
						<tr>
							<th scope="col" class=" text-center">stt</th>
							<th scope="col" class=" text-center">Tiêu đề</th>
							<th scope="col" class=" text-center">nội dung</th>
							<th scope="col" class=" text-center">action</th>
						</tr>
					</thead>
					<tbody>
				@foreach($blogs as $key => $blog)
						<tr>
							<th scope="row">{{$key+1}}</th>
							<td>{{$blog->tieude}}</td>
							<td>{{$blog->noidung}}</td>
							<td><a  href="{{route('delete',['id' => $blog->id])}}"  class="btn btn-danger"> xóa </a>  <a  href="{{route('blogs.edit',['id' => $blog->id])}}"  class="btn btn-warning"> sửa </a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
@endsection
