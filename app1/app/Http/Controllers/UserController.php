<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function changePassword(Request $request)
    {
        return view('user\change-password');
    }

    public function changePasswordSave(Request $request)
    {
        
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();

 // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password))
        {
            return back()->with('error', "Current Password is Invalid");
        }

// Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0)
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }
    public function updatedetails($id)
    {
        $users = User::find($id);

        return view('user/update');
    }
    public function product(Request $request)
    {
        return view('products\create');
    }
    public function delete(Request $request)
    {
        return view('user\delete');
    }
    public function updatedetailssave(Request $request)
    {
        
        $this->validate($request, [
            
            'name' => ['required', 'string', 'max:255'],
            'email'=>['required','string','max:255'],
            'phonenum' => ['required','string','min:10','max:10','regex:/[0-9]{9}/'],
        ]);
        $auth = Auth::user();
        $user =  User::find($auth->id);
        $user->name =  $request->name;
        $user->email=$request->email;
        $user->phonenum = $request->phonenum;
        
        $user->save();
        return back()->with('success', "DETAILS UPDATED");
    }
    
    public function display()
    {
        $username=Auth::user()->name;
        $emailid=Auth::user()->email;
        $countryname=Auth::user()->country;
        $positionname=Auth::user()->position;
        $phonenumber=Auth::user()->phonenum;
        return view('user/update',compact('username','emailid','countryname','positionname','phonenumber'));
    }
    public function displaydelete()
    {
        $username=Auth::user()->name;
        $emailid=Auth::user()->email;
        $countryname=Auth::user()->country;
        $positionname=Auth::user()->position;
        $phonenumber=Auth::user()->phonenum;
        return view('user/delete',compact('username','emailid','countryname','positionname','phonenumber'));
    }

    public function userlist()
    {
        $users = User::all();

        return view('user', compact('users'));
    
        
}
public function getalldetails($id)
    {
        $users = User::find($id);

        return view('user', compact('users'));
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('userlistdisplay');
    }
    
}
