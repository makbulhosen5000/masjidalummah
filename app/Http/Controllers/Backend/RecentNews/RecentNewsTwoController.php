<?php

namespace App\Http\Controllers\Backend\RecentNews;

use App\Http\Controllers\Controller;
use App\Models\RecentNews\NewsTwo;
use Illuminate\Http\Request;
use Session;
class RecentNewsTwoController extends Controller
{
       //__newsOne view function is here__//
     public function index()
     {
         $newsTwo=NewsTwo::all();
         // $catCount=Category::count();
         return view('backend.recent_news.news_two.view-news-two', compact('newsTwo'));
     }
 
        //__newsOne create function is here__//
       public function create()
       {
        return view('backend.recent_news.news_two.create-news-two');
       }
 
      //__newsOne store function is here__//
     public function store(Request $request)
     {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_desc' => 'required|max:100',
            'long_desc' => 'required',
            'date' => 'required',
        ]);
       $newsTwoStore=new NewsTwo();
       $newsTwoStore->date=$request->date;
       $newsTwoStore->title=$request->title;
       $newsTwoStore->short_desc=$request->short_desc;
       $newsTwoStore->long_desc=$request->long_desc;    
       $newsTwoStore->save();
       Session::flash('success','News Two Created successfully');
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
         $editNewsTwo=NewsTwo::find($id);
         return view('backend.recent_news.news_two.create-news-two', compact('editNewsTwo'));
     }
 
      //__newsOne update function is here__//
     public function update(Request $request, $id)
     {
      $validatedData = $request->validate([
        'short_desc' => 'required|max:100',
    ]);
       $update=NewsTwo::find($id);
       $update->date=$request->date;
       $update->title=$request->title;
       $update->short_desc=$request->short_desc;
       $update->long_desc=$request->long_desc;
       $update->save();
       Session::flash('success','News Two Updated successfully');
       return redirect()->back();
     }
 
     //__newsOne delete function is here__//
     public function destroy($id)
     {
       $delete=NewsTwo::find($id);
       $delete->delete();
      return redirect()->route('news.two.view');
     }
}
