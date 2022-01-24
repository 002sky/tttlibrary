<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(){
        $r = request();
        
        if($r->file('bannerImageAdd') != ""){
            $image = $r->file('bannerImageAdd');
            $image -> move('images',$image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();

        }else{
            $bookimage = Book::find($r->bookIDAdd);

            $imageName = $bookimage->image;
        }
    
        $addBook = Banner::create([
            'bookID'=>$r->bookIDAdd,
            'status'=> $r->statusAdd,
            'bannerImage' => $imageName,
        ]);

        Session::flash('success', "Banner added Successfully!");

        return redirect()->route('adminBanner');
    }

    public function bannerShow(){
        $viewBanner=DB::table('banners')

        ->leftjoin('Books','Books.id','=','banners.bookID')

        ->leftjoin('Authors','Authors.id','=','books.authorID')

        ->where('banners.status','1')

        ->select('banners.*','books.bookName as bkName','books.description as desc','authors.authorName as aName')

        ->get();

        $categories = Category::all();

        $latestBook = book::latest('books.created_at')->join('Authors','Authors.id','=','books.authorID')->first();

        return view('banner')->with('banner',$viewBanner)->with('categories',$categories)->with('latest',$latestBook);

    }

    public function view(){
        $viewBanner=DB::table('banners')

        ->leftjoin('Books','Books.id','=','banners.bookID')

        ->select('banners.*','books.bookName as bkName','books.description as desc')

        ->get();

        $display=DB::table('banners')

        ->leftjoin('Books','Books.id','=','banners.bookID')
        ->leftjoin('Authors','Authors.id','=','books.authorID')


        ->where('banners.status','1')

        ->select('banners.*','books.bookName as bkName','books.description as desc','authors.authorName as aName')

        ->get();

        $book = book::all();

        return view('addBanner')->with('allBanner',$viewBanner)->with('BookID',$book)->with('display',$display);
    }

    public function editBanner(Request $request)
    {
        $banner = banner::find($request->BannerID);

        if ($request->file('bannerImageEdit') != "") {
            $image = $request->file('bannerImageEdit');
            $image->move('images', $image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();
            $banner->bannerImage = $imageName;
        }

        $banner->bookID = $request->bookIDEdit;
        $banner->status = $request->statusEdit;
        $banner->save();

        Session::flash('success', "Banner update Successfully!");
        return redirect()->route('adminBanner');
    }

    public function DeleteBanner($id){
        $banner = DB::table('banners')->where('id','=',$id)->delete();
        Session::flash('success', "Banner deleted Successfully!");
        return redirect()->route('adminBanner');
    }
}
