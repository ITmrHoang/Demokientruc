<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Repositories\BlogsRepository\BlogsEloquentRepository;
use Illuminate\Http\Request;
use Session;

class BlogsController extends Controller {

	public function __construct(BlogsEloquentRepository $blogsRepository) {
		$this->blogs = $blogsRepository;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$blogs = $this->blogs->all();

		return view('listblogs', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('createblogs');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		if ($request->tieude != null && $request->noidung != null) {
			$this->blogs->create($request->all());
			Session::flash('success', "Tạo bài viết thành công!");
			return back();
		} else {
			Session::flash('error', 'thiếu dữ liệu');
			return back();
		}

		// return view('createblogs');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		return $this->blogs->xinchao();

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$blog = Blog::findOrFail($id);
		return view('editblogs')->with('blog', $blog);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$blog = Blog::findOrFail($id);
		$blog->tieude = $request->tieude;
		$blog->noidung = $request->noidung;
		$blog->save();

		return redirect()->route('blogs.index');
		// return redirect()->action('BlogsController@index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$blog = Blog::findOrFail($id);
		$blog->delete();
		return redirect()->action('BlogsController@index');
	}
}
