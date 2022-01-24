<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function userProfile(){
        
        $userProfile = User::all()->where('id',auth::id())->first();

        return view('profile')->with('userProfile',$userProfile);
    }

    public function edit(Request $request)
    {
        $student = User::find($request->id);

        $valid =  Validator::make($request->all(), [
            'email' => ['required', 'email','max:255',  Rule::unique('users', 'email')->ignore($request->id)],
            'phoneNo' => ['required','string','min:10','max:11'],
        ]);

        if($valid->fails()){
            Session::flash('error',$valid->errors()->first());
            return redirect()->route('profile');
        }


        if($request->file('profilePicture')!=""){
            $image = $request->file('profilePicture');
            $image -> move('images',$image->getClientOriginalName());
            $imageName = $image->getClientOriginalName();
            $student->image=$imageName;
          }
          
          $student->name= $request->name;
          $student->email= $request->email;
          $student->address= $request->address;
          $student->phoneNo= $request->phoneNo;
          $student->save();
    
          Session::flash('success',"profile update Successfully!");
          return redirect()->route('profile');
    }

    public function updatePassword(Request $request){
        $student = User::find($request->id);

        $valid =  Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

      
        
        if($valid->fails()){
            Session::flash('error',"password update failed!");
            return redirect()->route('profile');
        }

        $student->password = Hash::make($request->password);
        $student->save();
        Session::flash('success',"password update Successfully!");
        return redirect()->route('profile');

    }
}
