<?php

namespace SaleSystem\Http\Controllers;

use Illuminate\Http\Request;

use SaleSystem\Http\Requests;
use SaleSystem\Http\Controllers\Controller;

class MostrarController extends Controller
{
    public function validar(Request $request)
    {
        $auth = false;
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials, $request->has('remember'))) {
            $auth = true; // Success
        }

        if ($request->ajax()) {
            return response()->json([
                'auth' => $auth,
                'intended' => \URL::previous()
            ]);
        } else {
            return response()->json([
                'auth' => $auth]);
        }
        return redirect(URL::route('login_page'));
    }
    public function insertClient(){
        return view('salesystem.cliente');
    }
    public function viewClients(){
        return view('salesystem.ver_cliente');
    }
}
