<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\book;

class StatusController extends Controller
{
    public function borrow($id)
    {
        $r = request();
        $user = Auth::user();

        $status = DB::table('statuses')

        ->join('Books', 'Books.id', '=', 'statuses.bookID')

        ->select('statuses.*', 'Books.bookName as bkName')

        ->where('statuses.studentID', '=', Auth::id())

        ->where('statuses.status', 'borrowed')

        ->where('endTime','<',Carbon::now())
        
        ->count();

        if($status>=1){
            Session::flash('error','You have a book didnt return before the due date, Plese pay the fine at the counter and return the book');
            return back();
        }

        if ($this->ifBorrowed($id) > 0) {

            Session::flash('error','This is book is alread been borrowed');
            return back();
        }

        $date = Carbon::now()->addDays(7)->format('Y-m-d');

        $borrow = status::create([
            'bookID' => $id,
            'studentID' => $user['id'],
            'extendTime' => 1,
            'endTime' => $date,
            'status' => 'borrowed',
        ]);

        $updateBook = Book::find($id)->update(['status' => 'borrowed']);


        Session::flash('success','Book Borrowed successfuly');
        return $this->show();
    }

    public function ifLate($id){

        $check = DB::table('statuses')->where('bookID','=',$id)->where('studentID','=',Auth::id())->where('endTime','<',Carbon::now())->count();

        if($check >=1){
            return true;
        }
        return false;
    }


    public function show()
    {
        $borrowBook = DB::table('statuses')

            ->join('Books', 'Books.id', '=', 'statuses.bookID')

            ->select('statuses.*', 'Books.bookName as bkName')

            ->where('statuses.studentID', '=', Auth::id())

            ->where('statuses.status', 'borrowed')

            ->get();

        return view('bag')->with('borrowTable', $borrowBook);
    }

    public function ifBorrowed($id)
    {
        $borrowed = status::where('status', '=', 'borrowed')->where('BookID', '=', $id)->count();

        return $borrowed;
    }

    public function returnBook($id)
    {

        if($this->ifLate($id)>=true){
            Session::flash('error','You have excess the due date.Please pay the fine at the counter and return the book');
            return back();
        }
        $returnBook = status::where('bookID', '=', $id)->update(['status' => 'returned']);

        $updateBook = Book::find($id)->update(['status' => 'available']);

        Session::flash('success','Book Returned successfuly');

        return $this->show();
    }

    public function adminReturnBook($id){

        $returnBook = status::where('bookID', '=', $id)->update(['status' => 'returned']);

        $updateBook = Book::find($id)->update(['status' => 'available']);

        Session::flash('success','Book Returned successfuly');

        return redirect()->route('adminDashboard');
    }

    public function extendTimes($id)
    {
        $chance =  status::where('bookID', '=', $id)->where('studentID', '=', Auth::id())->where('extendTime', '=', '1')->count();

        if($this->ifLate($id)>=true){
            Session::flash('error','You have excess the due date.Please pay the fine at the counter and return the book');
            return back();
        }


        if ($chance == 1) {
            $extendTime =  status::where('bookID', '=', $id)->where('studentID', '=', Auth::id())->where('status', '=', 'borrowed')->get();

            $time = Carbon::createFromFormat('Y-m-d', $extendTime[0]->endTime);
            $newTime = $time->addDays(3)->format('Y-m-d');

            $updateTime  = status::where('bookID', '=', $id)->where('studentID', '=', Auth::id())->where('status', '=', 'borrowed')->update(['endTime' => $newTime, 'extendTime' => 0]);
            Session::flash('success', 'Extend times successfully');
            return $this->show();
        } else {
            Session::flash('error', 'You can only extend the Times once');
            return $this->show();
        }
    }
}
