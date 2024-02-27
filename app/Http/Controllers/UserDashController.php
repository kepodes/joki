<?php

namespace App\Http\Controllers;

use App\Models\orderDone;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $user = User::find($id);
        $ortal = orderDone::where('customer_id',$id);
        return view('user.account',[
            'title' => "User Dashboard",
            'user' => $user,
            'ortal' => $ortal->count()
        ]);
    }
}
