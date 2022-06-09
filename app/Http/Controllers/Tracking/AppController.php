<?php

namespace App\Http\Controllers\Tracking;

use App\Http\Controllers\Controller;
use App\Models\RastEscala;
use App\Models\RastExpo;
use App\Models\RastHouse;
use App\Models\RastImpo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AppController extends Controller
{
    /** HOME */

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
            $rasthouse = RastHouse::where('Ra_Login', $email)->where('Ra_ExpImp', 'impo')->count();
            $rastescala = RastHouse::where('Ra_Login', $email)->where('Ra_ExpImp', 'expo')->count();
            return view('app.home.index', compact('impo', 'expo', 'rasthouse', 'rastescala'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    /** MARITIME */
    public function maritime(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastExpo::where('Ex_ClienteLogin', $email)->get();
            $impo = RastImpo::where('Im_CneeLogin', $email)->get();
            return view('app.maritime.index', compact('expo', 'impo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function maritimeExport(Request $request, $cod)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastExpo::where('Ex_ReservaCod', $cod)->where('Ex_ClienteLogin', $email)->first();
            if ($expo) {
                return view('app.maritime.export', compact('expo'));
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

    public function maritimeImport(Request $request, $cod)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $impo = RastImpo::where('Im_MasterCod', $cod)->where('Im_CneeLogin', $email)->first();
            if ($impo) {
                return view('app.maritime.import', compact('impo'));
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

    public function maritimeExportAll(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastExpo::where('Ex_ClienteLogin', $email)->get();
            return view('app.maritime.export-all', compact('expo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function maritimeImportAll(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $impo = RastImpo::where('Im_CneeLogin', $email)->get();
            return view('app.maritime.import-all', compact('impo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function air(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $expo = RastHouse::where('Ra_Login', $email)->where('Ra_ExpImp', 'expo')->get();
            $impo = RastHouse::where('Ra_Login', $email)->where('Ra_ExpImp', 'impo')->get();
            return view('app.air.index', compact('expo', 'impo'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function airExport(Request $request, $cod)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $item = RastHouse::where('Ra_CodHouse', $cod)->where('Ra_Login', $email)->where('Ra_ExpImp', 'expo')->first();
            if ($item) {
                return view('app.air.export', compact('item'));
            } else {
                return redirect()
                    ->route('app.air')
                    ->with('error', 'Nenhum registro encontrado!');
            }
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function airImport(Request $request, $cod)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $item = RastHouse::where('Ra_CodHouse', $cod)->where('Ra_Login', $email)->where('Ra_ExpImp', 'impo')->first();
            if ($item) {
                return view('app.air.import', compact('item'));
            } else {
                return redirect()
                    ->route('app.air')
                    ->with('error', 'Nenhum registro encontrado!');
            }
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function airExportAll(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $house = RastHouse::where('Ra_Login', $email)->where('Ra_ExpImp', 'expo')->get();
            return view('app.air.export-all', compact('house'));
        } else {
            return redirect()
                ->route('login');
        }
    }

    public function airImportAll(Request $request)
    {
        $email = $request->session()->get('email');
        $password = $request->session()->get('password');
        if ($email && $password) {
            $house = RastHouse::where('Ra_Login', $email)->where('Ra_ExpImp', 'impo')->get();
            return view('app.air.import-all', compact('house'));
        } else {
            return redirect()
                ->route('login');
        }
    }


    // public function export(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $expo = RastExpo::where('Ex_ClienteLogin', $email)->get();
    //         return view('app.export.index', compact('expo'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function exportGeral(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $expo = RastExpo::where('Ex_ClienteLogin', $email)->get();
    //         return view('app.export.geral', compact('expo'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function exportCod(Request $request, $cod)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $expo = RastExpo::where('Ex_ReservaCod', $cod)->where('Ex_ClienteLogin', $email)->first();
    //         if ($expo) {
    //             return view('app.export.item', compact('expo'));
    //         } else {
    //             return redirect()
    //                 ->route('app.export')
    //                 ->with('error', 'Nenhum registro encontrado!');
    //         }
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function import(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $impo = RastImpo::where('Im_CneeLogin', $email)->get();
    //         return view('app.import.index', compact('impo'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function importGeral(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $impo = RastImpo::where('Im_CneeLogin', $email)->get();
    //         return view('app.import.geral', compact('impo'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function importCod(Request $request, $cod)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $impo = RastImpo::where('Im_MasterCod', $cod)->where('Im_CneeLogin', $email)->first();
    //         if ($impo) {
    //             return view('app.import.item', compact('impo'));
    //         } else {
    //             return redirect()
    //                 ->route('app.import')
    //                 ->with('error', 'Nenhum registro encontrado!');
    //         }
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function rastHouse(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $rasthouse = RastHouse::where('Ra_Login', $email)->get();
    //         return view('app.rasthouse.index', compact('rasthouse'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function rastHouseGeral(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $house = RastHouse::where('Ra_Login', $email)->get();
    //         return view('app.rasthouse.geral', compact('house'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function rastHouseCod(Request $request, $cod)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $item = RastHouse::where('Ra_CodHouse', $cod)->where('Ra_Login', $email)->first();
    //         if ($item) {
    //             return view('app.rasthouse.item', compact('item'));
    //         } else {
    //             return redirect()
    //                 ->route('app.rasthouse')
    //                 ->with('error', 'Nenhum registro encontrado!');
    //         }
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function rastEscala(Request $request)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $rasthouse = RastHouse::where('Ra_Login', $email)->pluck('Ra_CodHouse');
    //         $rastescala = RastEscala::whereIn('Re_Codigo', $rasthouse)->get();
    //         return view('app.rastescala.index', compact('rastescala'));
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    // public function rastEscalaCod(Request $request, $cod)
    // {
    //     $email = $request->session()->get('email');
    //     $password = $request->session()->get('password');
    //     if ($email && $password) {
    //         $house = RastHouse::where('Ra_CodHouse', $cod)->where('Ra_Login', $email)->first();
    //         $item = RastEscala::where('Re_Codigo', $house->Ra_CodHouse)->first();
    //         if ($item) {
    //             return view('app.rastescala.item', compact('item'));
    //         } else {
    //             return redirect()
    //                 ->route('app.rastescala')
    //                 ->with('error', 'Nenhum registro encontrado!');
    //         }
    //     } else {
    //         return redirect()
    //             ->route('login');
    //     }
    // }

    /** ACCESS */
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
            $rastHouse = RastHouse::where('Ra_Login', $email)->where('Ra_Senha', $password)->first();
            if ($impo || $expo || $rastHouse) {
                $request->session()->put('email', $email);
                $request->session()->put('password', $password);
                return redirect()
                    ->route('app.home');
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
