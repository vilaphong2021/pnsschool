<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class userController extends Controller
{
    //

    public function register(Request $request){
        // return "OK Register!!";
        try{
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            $success = true;
            $message = "ບັນທຶກຂໍ້ມູນສໍາເລັດ!";

        }catch(\Illuminate\Database\QueryException $ex){
            $success = false;
            $message = $ex->getMessage(); 
        }
        $response = [
            "success" => $success,
            "message" => $message
        ];
        return response()->json($response);

    }
}
