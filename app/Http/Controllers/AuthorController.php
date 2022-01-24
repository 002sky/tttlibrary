<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    public function add(){

        $r = request();
        $addAuthor = Author::create([
            'authorName'=>$r->authorNameAdd,
        ]);
        Session::flash('success', "Author added Successfully!");
        return redirect()->route('adminAuthor');
    }

    public function view(){
      $author =  Author::all();

      return view('addAuthor')->with('AuthorList',$author);
    }
    
    public function EditAuthor(Request $request){

        $author = Author::find($request->AuthorID);

        $author->authorName = $request->authorNameEdit;
        $author->save();

        Session::flash('success', "Author update Successfully!");
        return redirect()->route('adminAuthor');
    }
}
