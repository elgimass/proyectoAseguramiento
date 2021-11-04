<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class LoginApi extends Controller
{

    public function login(Request $request){
        $loginCredentials = request()->except('_token');

        $response = Http::post('https://aseguramiento-api.herokuapp.com/api/login',$loginCredentials);





        if ($response['message'] !== 'Invalid'){
            dd($response['message']);


            return redirect('paciente');
        }

        return view('login.index');

    }

    public function logout(){
        $response = Http::post('https://aseguramiento-api.herokuapp.com/api/login');

        return redirect('/');

    }

}
