<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\book;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function view()
    {
        return view('adminDashboard');
    }

    public function show()
    {
        $bookCountAvailable = book::all()->where('status','=','available')->count();

        $bookCountBorrowed = book::all()->where('status','=','borrowed')->count();

        $bookCountTotal = book::all()->count();

        $studentCount = User::all()->where('status','=','student')->count();

        $array = compact('bookCountAvailable','bookCountBorrowed','bookCountTotal','studentCount');


        $studentBookStatus = DB::table('statuses')

        ->join('users','users.id','=','statuses.studentID')
        ->join('Books', 'Books.id', '=', 'statuses.bookID')
        ->select('statuses.*', 'Books.bookName as bkName','users.name as stName')
        ->where('statuses.status', 'borrowed')
        ->where('endTime','<',Carbon::now())
        ->get();

        return view('adminDashboard')->with('status', $array)->with('studentBookStatus',$studentBookStatus);
    }

    
}
