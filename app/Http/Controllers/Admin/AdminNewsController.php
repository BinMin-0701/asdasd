<?php

namespace App\Http\Controllers\Admin;
//Khai báo Model News khai báo cho table news trong Database
use App\Models\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $news = DB::table('news')->select('*');
      // $news = $news->get();

      // $pageName = 'Tên Trang - News';
      $news = DB::table('products')->select('*');
      $news = $news->get();
      $pageName = "Trang product";
      return view('/admin/news', compact('news','pageName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/admin/news_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $news = new News;
      $news->name = $request->name;
      $news->price = $request->price;
      $news->image = $request->price;
      $news->description = $request->description;

      $news->save();
      return redirect()->action([AdminNewsController::class,'create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $news = News::where('id', '=', $id)->select('*')->first();
      $des = html_entity_decode($news->description);
      return view('/product/product_detail', compact('products', 'des'));
      // return view('/admin/news_detail', compact('news', 'des'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $news = News::findOrFail($id);
      $pageName = 'Product - Update';
      return view('/product/product_update', compact('products', 'pageName'));

      // $pageName = 'News - Update';
      // return view('/admin/news_update', compact('news', 'pageName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $news = News::find($id);
      $news->name = $request->name;
      $news->price = $request->price;
      $news->image = $request->price;
      $news->description = $request->description;
      
      $news->save();
      return redirect()-> action([AdminNewsController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
      $search = $request->input('search');
      $news = News::query()->where('title','LIKE','%($search)%')
      ->orwhere('email','Like','%($search)%')->get();
      return view('/admin/news',compact('news'));
    }
}
