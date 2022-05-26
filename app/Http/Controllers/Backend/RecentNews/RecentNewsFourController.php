<?php

namespace App\Http\Controllers\Backend\RecentNews;

use App\Http\Controllers\Controller;
use App\Models\RecentNews\NewsFour;
use Illuminate\Http\Request;
use Session;
class RecentNewsFourController extends Controller
{
       //__newsOne view function is here__//
     public function index()
     {
         $newsFour=NewsFour::all();
         // $catCount=Category::count();
         return view('backend.recent_news.news_four.view-news-four', compact('newsFour'));
     }
 
        //__newsOne create function is here__//
       public function create()
       {
        return view('backend.recent_news.news_four.create-news-four');
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
       $newsFourStore=new NewsFour();
       $newsFourStore->date=$request->date;
       $newsFourStore->title=$request->title;
       $newsFourStore->short_desc=$request->short_desc;
       $newsFourStore->long_desc=$request->long_desc;    
       $newsFourStore->save();
       Session::flash('success','News Four Created successfully');
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
         $editNewsFour=NewsFour::find($id);
         return view('backend.recent_news.news_four.create-news-four', compact('editNewsFour'));
     }
 
      //__newsOne update function is here__//
     public function update(Request $request, $id)
     {
      $validatedData = $request->validate([
        'short_desc' => 'required|max:100',
    ]);
       $update=NewsFour::find($id);
       $update->date=$request->date;
       $update->title=$request->title;
       $update->short_desc=$request->short_desc;
       $update->long_desc=$request->long_desc;
       $update->save();
       Session::flash('success','News Four Updated successfully');
       return redirect()->back();
     }
 
     //__newsOne delete function is here__//
     public function destroy($id)
     {
       $delete=NewsFour::find($id);
       $delete->delete();
      return redirect()->route('news.four.view');
     }
}
