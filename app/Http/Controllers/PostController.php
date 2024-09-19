<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view_profile(Request $request)
     {
        $user = new User();
        $user->name = $request -> name;
        $user->email = $request -> email;
        $user->image= $request ->image;
        $user->phonenumber = $request -> phonenumber;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename=time(). $file->getClientOriginalName();
            $file->move('image',$imagename);
            $user->image= 'image/'.$imagename;
            
        }
        $user->save();
        return redirect('view_profile');

        
   
    }
    public function delete($email) 
    {
            $User = User::where('email', $email);
              $User->delete();
              return back();
    }
     public function view(Request $request){

        $viewuser = User::all();
        return view('view_profile',compact('viewuser'));
     }
    
}
