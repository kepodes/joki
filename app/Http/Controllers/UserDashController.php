<?php

namespace App\Http\Controllers;

use App\Models\orderDone;
use App\Models\Riview;
use App\Models\RiviewAuth;
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
            'ortal' => $ortal->count(),
            'riviews' => RiviewAuth::where('user_id','=',$id)->get()
        ]);
    }

    public function riview(Request $request){
        $Riview = RiviewAuth::where("token","=",$request->token)->get();
        if ($Riview->isEmpty()){
            return redirect('/');
        } else {
            return view('user.riview',[
                "title" => "Riview our product",
                'user' => auth()->user(),
                'data'=>$Riview,
                'token' => $request->token
            ]);
        }

        
    }

    public function kirimRiview(Request $request){
        $cekToken = RiviewAuth::where("token","=",$request->token)->get();

        if($cekToken->isEmpty()){
            return redirect('/');
        } else {
            $validasi = $request->validate([
                'product_id' => ['required'],
                'rank' => ['required'],
                'bintang' => ['required'],
                'comment' => ['required'],
            ]);
    
            $validasi['user_id'] = auth()->user()->id;
            $validasi['noTelp'] = auth()->user()->noTelpon;

            RiviewAuth::where("token","=",$request->token)->delete();
            Riview::create($validasi);
            return redirect('/user/dash')->with('succesRiview','Thanks for the riview!!');
        }


    }
}
