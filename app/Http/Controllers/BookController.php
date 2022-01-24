<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\book;
use App\Models\Category;
use App\Models\status;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
    public function add()
    {

        $r = request();

        $valid =  Validator::make($r->all(), [
            'publishedDateAdd' => 'required|numeric|digits:4',
        ]);

        if($valid->fails()){
            Session::flash('error','unsuitable publish year');
            return redirect()->route('adminBook');
        }

        if ($r->file('bookImageAdd') == "") {
            $imageName = 'logo.png';
        } else {
            $image = $r->file('bookImageAdd');
            $image->move('images', $image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();
        }

        $addBook = book::create([
            'bookName' => $r->bookNameAdd,
            'description' => $r->bookDescriptionAdd,
            'publishingDate' => $r->publishedDateAdd,
            'categoryID' => $r->categoryIDAdd,
            'authorID' => $r->AuthorIDAdd,
            'status' => 'available',
            'image' => $imageName,
        ]);

        Session::flash('success', "Book added Successfully!");
        return redirect()->route('adminBook');
    }

    public function view()
    {

        $viewBook = DB::table('Books')

            ->leftjoin('categories', 'categories.id', '=', 'Books.CategoryID')

            ->join('Authors', 'Authors.id', '=', 'Books.authorID')

            ->select('Books.*', 'categories.category as catName', 'Authors.authorName as aName')

            ->get();

        $category = Category::all();

        $author = Author::all();

        

        return view('addBook')->with('Books', $viewBook)->with('CategoryID', $category)->with('AuthorID', $author);
    }


    public function searchBook(Request $request)
    {
        $term = $request->input('search');

        $searchBook = DB::table('books')

            ->leftjoin('categories', 'categories.id', '=', 'Books.CategoryID')

            ->join('Authors', 'Authors.id', '=', 'Books.authorID')

            ->select('Books.*', 'categories.category as catName', 'Authors.authorName as aName')

            ->where('books.bookName', 'LIKE', '%' . $term . '%')

            ->orWhere('Authors.authorName', 'LIKE', '%' . $term . '%')

            ->get();

        return view('category')->with('Books', $searchBook)->with('term', $term);
    }

    public function editBook(Request $request)
    {

       

        $book = book::find($request->ID);


        $valid =  Validator::make($request->all(), [
            'publishedDateEdit' => 'required|numeric|digits:4',
        ]);

        if($valid->fails()){
            Session::flash('error','unsuitable publish year');
            return redirect()->route('adminBook');
        }

        if ($request->file('bookImageEdit') != "") {
            $image = $request->file('bookImageEdit');
            $image->move('images', $image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();
            $book->image = $imageName;
        }

        $book->bookName = $request->bookNameEdit;
        $book->description = $request->bookDescriptionEdit;
        $book->categoryID = $request->categoryIDEdit;
        $book->publishingDate = $request->publishedDateEdit;
        $book->authorID = $request->AuthorIDEdit;
        $book->save();


        Session::flash('success', "Book update Successfully!");
        return redirect()->route('adminBook');
    }
}
