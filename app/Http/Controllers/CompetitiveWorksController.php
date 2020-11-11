<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompetitiveWorks;
use App\Picture;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CompetitiveWorksController extends Controller
{
    public function getCompetitiveWorks(Request $request)
    {
        $works = CompetitiveWorks::all();
        $pictures = Picture::all();

        return $data = ['works' => $works, '$pictures' => $pictures];
    }
    public function getCompetitiveWorkById($id)
    {
        $work = CompetitiveWorks::find($id);
        $pictures = Picture::where('model_id', $id)->get();
        return $data = ['$work' => $work, '$pictures' => $pictures];
    }
    public function reg(Request $request)

    {
       

        $validator = Validator::make($request->all(), [



            'email' => 'required|email|unique:users',

            'password' => 'required',

        ]);
        // dd('lol');
        if ($validator->fails()) {

            return response()->json([

                'success' => false,

                'message' => $validator->errors(),

            ], 401);

        }

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $success['token'] = $user->createToken('appToken')->accessToken;

        return response()->json([

            'success' => true,

            'token' => $success,

            'user' => $user

        ]);

    }
}
