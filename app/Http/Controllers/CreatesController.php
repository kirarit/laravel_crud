<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class createsController extends Controller
{
    
    public function home(){
    	$articles=Article::all();
    	return view('home',['articles'=>$articles]);
    }
    public function add(Request $request){
     $this->validate($request, [
     'title'=>'required',
     'description'=>'required'
     ]);
    $articles=new Article;
    $articles->title=$request->input('title');
    $articles->description=$request->input('description');
    $articles->save();
    return redirect('/')->with('info','Article Created Successfully!');
    }
    
    public function update($id){
    	$articles=Article::find($id);
       return view('update',['articles'=>$articles]);
    }   
     public function edit(Request $request, $id){
     	$this->validate($request, [
     		'title'=>'required',
     	     'description'=>'required'
     	 ]);
$data=array(
'title'=>$request->input('title'),
'description'=>$request->input('description')
);
Article::where('id',$id)
->update($data);
return redirect('/')->with('upd','Article Updated Successfully');
     }
       
   
   public function read($id){
    $articles=Article::find($id);
    return view('read',['articles'=>$articles]);

   }
 public function delete($id){
    Article::where('id',$id)
    ->delete();
    return redirect('/')->with('inf','Article Deleted Successfully!');
   }
   public function restore($id){
    Article::where('id',$id)
    ->restore();
    return redirect('/')->with('inf','Article Restored Successfully!');
   }
}
