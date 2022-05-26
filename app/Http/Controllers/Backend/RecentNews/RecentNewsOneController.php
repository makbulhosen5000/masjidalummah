<?php

namespace App\Http\Controllers\Backend\RecentNews;

use App\Http\Controllers\Controller;
use App\Models\RecentNews\NewsOne;
use Illuminate\Http\Request;
use Session;

class RecentNewsOneController extends Controller
{
     //__newsOne view function is here__//
     public function index()
     {
         $newsOne=NewsOne::all();
         // $catCount=Category::count();
         return view('backend.recent_news.news_one.view-news-one', compact('newsOne'));
     }
 
        //__newsOne create function is here__//
       public function create()
       {
        return view('backend.recent_news.news_one.create-news-one');
       }
 
      //__newsOne store function is here__//
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_desc' => 'required|max:200',
            'long_desc' => 'required',
            'date' => 'required',
        ]);
       $newsOneStore=new NewsOne();
       $newsOneStore->date=$request->date;
       $newsOneStore->title=$request->title;
       $newsOneStore->short_desc=$request->short_desc;
       $newsOneStore->long_desc=$request->long_desc;    
       $newsOneStore->save();
       Session::flash('success','News One Created successfully');
       return redirect()->back();
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
     //____newsOne edit function is here__//
     public function edit($id)
     {
         $editNewsOne=newsOne::find($id);
         return view('backend.recent_news.news_one.create-news-one', compact('editNewsOne'));
     }
 
      //__newsOne update function is here__//
     public function update(Request $request, $id)
     {
        $validatedData = $request->validate([
            'short_desc' => 'required|max:200',
        ]);
       $newsOneUpdate=newsOne::find($id);
       $newsOneUpdate->date=$request->date;
       $newsOneUpdate->title=$request->title;
       $newsOneUpdate->short_desc=$request->short_desc;
       $newsOneUpdate->long_desc=$request->long_desc;
       $newsOneUpdate->save();
       Session::flash('success','News One Updated successfully');
       return redirect()->back();
     }
 
     //__newsOne delete function is here__//
     public function destroy($id)
     {
      $delete=NewsOne::find($id);
      $delete->delete();
      return redirect()->route('news.two.view');
     }
}
