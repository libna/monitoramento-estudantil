<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Requests\MatriculaRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'string', 'max:255', 'unique:users'],
            'siape' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create_prof(Request $data)
    {
        $user = User::create([
            'name'     => $data['name_prof'],
            'siape'    => $data['siape_prof'],
            'email'    => $data['email_prof'],
            'password' => Hash::make($data['password_prof']),
        ]);
        Auth::loginUsingId($user->id);
        return response('created', 200)
        ->header('Content-Type', 'text/plain');
    }
     protected function create_student(Request $data)
    {
        // consulta ao banco para saber se já existe aluno com esta matrícula
        // caso exista, retorna um cõdigo de erro (ver como faz isso no laravel (retornar cõdigo http especĩfico))
        // caso contrario, continua com o procedimento abaixo
        $user = User::create([
            'name'      => $data['name_aluno'],
            'matricula' => $data['matricula_aluno'],
            'email'     => $data['email_aluno'],
            'password'  => Hash::make($data['password_aluno']),
        ]);
        Auth::loginUsingId($user->id);
        return response('created', 200)
        ->header('Content-Type', 'text/plain');

        User::where("matricula",$data["matricula_aluno"])->select('matricula')->first()->matricula;
        if (isset($data["matricula_aluno"])) {
            return abort(409);

        }
        return abort(100);
    }
}
