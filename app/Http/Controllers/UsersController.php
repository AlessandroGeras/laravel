<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pizza;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function login()
    {
        $user = User::find(Auth::id());

        return response()->view('login', ["user" => $user])->setStatusCode(200);
    }


    public function create_user()
    {
        $user = User::find(Auth::id());

        return response()->view('create_user', ["user" => $user])->setStatusCode(200);
    }


    public function store_user(Request $request)
    {

        request()->validate(
            [
                'name' => 'required',
                'email' => ['required', 'email', 'unique:users'],
                'password' => [
                    'required',
                    'min:8',
                    'regex:/[A-Z]/',
                    'regex:/[@$!%*#?&]/',
                ],
                'password_confirmation' => [
                    'required',
                    'same:password',
                ]
            ],
            [
                'name.required' => "O nome deve ser informado!",
                'email.required' => "O email deve ser informado!",
                'email.unique' => "Esse email já está cadastrado!",
                'email.email' => "O email não está correto!",
                'password.required' => "A senha deve ser informada!",
                'password.min' => "A senha deve ter no mínimo 8 caracteres!",
                'password.regex' => "A senha deve ter um caracter maiúsculo e um caracter especial!",
                'password_confirmation.required' => "A senha de confirmação deve ser informada!",
                'password_confirmation.same' => "As senhas não conferem!"
            ]
        );

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $permission = Permission::where('role', '=', 'user')->firstOrFail();
        $user->permission_id = $permission->id;

        $user->save();
        Auth::login($user);
        
        $user = User::find(Auth::id());
        $pizzas = Pizza::all()->sortBy("id");

        return response()->view('index', ["user" => $user,"pizzas" => $pizzas])->setStatusCode(201);
    }


    public function auth(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => "O email deve ser informado!",
                'email.email' => "O email não está correto!",
                'password.required' => "A senha deve ser informada!"
            ]
        );

        if (Auth::attempt($credentials)) {

            $user = User::where('email', '=', $request->email)->first();
            Auth::login($user);

            return redirect()->intended('/', 302);
        }
        
        else {
            return redirect()->back(302)->with("auth", "Falha no login!<br> Confira seu email e senha!");
        }
    }


    public function logoff()
    {
        Auth::logout();
        return redirect('/',302);
    }


    //Painel Administrativo do Admin
    public function panel()
    {
        $user = User::find(Auth::id());
        $pizzas = Pizza::all()->sortBy("id");

        return response()->view('panel', ["user" => $user, "pizzas" => $pizzas])->setStatusCode(200);
    }


    //Formulário para recuperar a senha
    public function forget_password()
    {
        return response()->view('forget_password', ["user" => null])->setStatusCode(200);
    }


    //E-mail de recuperação de senha
    public function send_mail(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email']
        ],
        [
            'email.required' => "O email deve ser informado!",
            'email.email' => "O email não está correto!"
        ]);

        if ($credentials) {
            if (User::where('email', '=', $request->email)->exists()) {
                $token = Str::random(64);

                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => date('Y-m-d\TH:i')
                ]);

                Mail::send('email.forget_password', ['token' => $token], function ($message) use ($request) {
                    $message->to($request->email);
                    $message->from('projetoevagaropaba@gmail.com
                    ', 'Pizza Delivery By Alessandro Geras');
                    $message->subject('Recuperação de senha');
                });

                return redirect('/',302)->with("msg", "O email de recuperação de senha foi enviado");
            }
            
            else {
                return redirect()->back(302)->with("auth", "Falha ao enviar o email de recuperação de senha.<br> Verifique se seu email está correto ou tente mais tarde");
            }
        }
    }


    //Formulário para resetar a senha com token
    public function recover_password($token)
    {
        return response()->view('recover_password', ['token' => $token, "user" => null])->setStatusCode(200);
    }


    //Redefinir a nova senha com token
    public function new_password(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => [
                    'required',
                    'min:8',
                    'regex:/[A-Z]/',
                    'regex:/[@$!%*#?&]/',
                ],
                'password_confirmation' => [
                    'required',
                    'same:password',
                ]
            ],
            [
                'email.required' => "O email deve ser informado!",
                'email.email' => "O email não está correto!",
                'password.required' => "A senha deve ser informada!",
                'password.min' => "A senha deve ter no mínimo 8 caracteres!",
                'password.regex' => "A senha deve ter um caracter maiúsculo e um caracter especial!",
                'password_confirmation.required' => "A senha de confirmação deve ser informada!",
                'password_confirmation.same' => "As senhas não conferem!"
            ]
        );

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return redirect('/',302)->with("msg", "Falha no link de verificação");
        }

        User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login',302)->with('msg', 'Sua senha foi alterada com sucesso');
    }
}
