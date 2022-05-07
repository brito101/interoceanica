<?php

namespace App\Http\Controllers\Tracking;

use App\Http\Controllers\Controller;
use App\Models\RastExpo;
use App\Models\RastImpo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AppController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            return view('app.home.index');
        } else {
            return redirect()
                ->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $messages = $validator->errors();
        $messages->add('password', 'Senha Inválida');
        $messages->add('email', 'Usuário Inválido');
        if (isset($request['email']) && isset($request['password'])) {
            $email = $request['email'];
            $password = $request['password'];
            $impo = RastImpo::where('Im_CneeLogin', $email)->where('Im_CneeSenha', $password)->first();
            $expo = RastExpo::where('Ex_ClienteLogin', $email)->where('Ex_ClienteSenha', $password)->first();
            if ($impo || $expo) {
                $request->session()->put('email', $email);
                $request->session()->put('password', $password);
                return redirect()
                    ->route('app.home')
                    ->with('success', 'Seja Bem vindo!');
            } else {
                return redirect()
                    ->route('login')->withErrors($messages)->withInput();
            }
        } else {
            return redirect()
                ->route('login')->withErrors($messages)->withInput();
        }
    }

    public function logout(Request $request)
    {
        // $request->session()->forget(['user', 'password']);
        return redirect()
            ->route('login');
    }
}
