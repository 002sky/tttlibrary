<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function add(){
        $r = request();
        $addCategory = Category::create([
            'category' => $r->categoryNameAdd,
        ]);
        Session::flash('success', "Category added Successfully!");

        return redirect()->route('adminCategory');
    } 

    public function view(){
        $viewCategory = Category::all(); // generaten sql select * from catergory
        return view('addCategory')->with('categories',$viewCategory);
    }

    public function categoryView($categoryID){
        $books = DB::table('books')
        
        ->join('categories','categories.id','=','books.categoryID')

        ->join('authors','authors.id','=','books.authorID')

        ->select('books.*','categories.category as ct','authors.authorName as aName')
        
        ->where('categoryID',$categoryID)

        ->get();


        $categoryName = category::find($categoryID);

        return view('category')->with('categoryBook',$books)->with('categoryName',$categoryName);
    }


    public function EditCategory(Request $request){

        $category = Category::find($request->categoryID);


        $category->category = $request->categoryNameEdit;
        $category->save();


        Session::flash('success', "Category update Successfully!");
        return redirect()->route('adminCategory');
    }
}
