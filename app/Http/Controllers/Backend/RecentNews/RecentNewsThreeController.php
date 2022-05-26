<?php

namespace App\Http\Controllers\Backend\RecentNews;

use App\Http\Controllers\Controller;
use App\Models\RecentNews\NewsThree;
use Illuminate\Http\Request;
use Session;
class RecentNewsThreeController extends Controller
{
       //__newsOne view function is here__//
     public function index()
     {
         $newsThree=NewsThree::all();
         // $catCount=Category::count();
         return view('backend.recent_news.news_three.view-news-three', compact('newsThree'));
     }
 
        //__newsOne create function is here__//
       public function create()
       {
        return view('backend.recent_news.news_three.create-news-three');
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
       $newsThreeStore=new NewsThree();
       $newsThreeStore->date=$request->date;
       $newsThreeStore->title=$request->title;
       $newsThreeStore->short_desc=$request->short_desc;
       $newsThreeStore->long_desc=$request->long_desc;    
       $newsThreeStore->save();
       Session::flash('success','News Three Created successfully');
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
         $editNewsThree=NewsThree::find($id);
         return view('backend.recent_news.news_three.create-news-three', compact('editNewsThree'));
     }
 
      //__newsOne update function is here__//
     public function update(Request $request, $id)
     {
      $validatedData = $request->validate([
        'short_desc' => 'required|max:100',
    ]);
       $update=NewsThree::find($id);
       $update->date=$request->date;
       $update->title=$request->title;
       $update->short_desc=$request->short_desc;
       $update->long_desc=$request->long_desc;
       $update->save();
       Session::flash('success','News Three Updated successfully');
       return redirect()->back();
     }
 
     //__newsOne delete function is here__//
     public function destroy($id)
     {
       $delete=NewsThree::find($id);
       $delete->delete();
      return redirect()->route('news.three.view');
     }
}
