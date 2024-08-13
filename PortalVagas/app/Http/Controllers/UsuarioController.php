<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Exibir o formulário de login
    public function showLoginForm()
    {
        return view('usuarios.login');
    }


   // Processar o login do usuário
   public function login(Request $request)
   {
       $request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string',
       ]);

       $usuario = Usuario::where('email', $request->email)->first();
       if ($usuario && Hash::check($request->password, $usuario->password)) {

           //Autentica o usuário
           session(['usuario_id' => $usuario->id]);
           return redirect()->route('dashboard');
       } else {
           return back()->withErrors(['email' => 'As credenciais fornecidas estão incorretas']);
       }
   }


    // Exibir o formulário de registro
    public function showRegistroForm()
    {
        return view('usuarios.registro');
    }


    // Processar o registro de um novo usuário
    public function registro(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
        ]);


        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($usuario);

        return redirect('/dashboard');
    }


    // Realizar o logout do usuário
    public function logout(Request $request)
    {
        Auth::logout();


        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/');
    }
}
