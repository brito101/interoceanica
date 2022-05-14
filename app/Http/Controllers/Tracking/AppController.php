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
            $impo = RastImpo::where('Im_CneeLogin', $email)->count();
            $expo = RastExpo::where('Ex_ClienteLogin', $email)->count();
            return view('app.home.index', compact('impo', 'expo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function export(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastExpo::where('Ex_ClienteLogin', $email)->get();
            return view('app.export.index', compact('expo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function exportGEral(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastExpo::where('Ex_ClienteLogin', $email)->get();
            return view('app.export.geral', compact('expo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function exportCod(Request $request, $cod)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastExpo::where('Ex_ReservaCod', $cod)->where('Ex_ClienteLogin', $email)->first();
            if ($expo) {
                return view('app.export.item', compact('expo'));
            } else {
                return redirect()
                    ->route('app.export')
                    ->with('error', 'Nenhum registro encontrado!');
            }
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function import(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $impo = RastImpo::where('Im_CneeLogin', $email)->get();
            return view('app.import.index', compact('impo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function importGeral(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $impo = RastImpo::where('Im_CneeLogin', $email)->get();
            return view('app.import.geral', compact('impo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function importCod(Request $request, $cod)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $impo = RastImpo::where('Im_MasterCod', $cod)->where('Im_CneeLogin', $email)->first();
            if ($impo) {
                return view('app.import.item', compact('impo'));
            } else {
                return redirect()
                    ->route('app.import')
                    ->with('error', 'Nenhum registro encontrado!');
            }
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
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
        $request->session()->forget(['user', 'password']);
        return redirect()
            ->route('login');
    }
}
