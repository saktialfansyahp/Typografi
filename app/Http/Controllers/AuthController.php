<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function welcome()
    {
        if(Auth::check()){
            return view('welcome');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function index()
    {
        return view('login');
    }

    public function registration()
    {
        return view('register');
    }

    public function logout()
    {
        Auth::logout();

        return view('login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $credential = ['email' => $request->email, 'password' => $request->password];
        $login = Auth::attempt($credential);
        if ($login) {
            // dd(Auth::check());
            return redirect()->route('home');
        }else{
            return redirect()->back()->withInput()->withErrors("Invalid Credential");
        }
    }

    public function processRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if($user->save()){
            return redirect()->route('login')->with("success", "Register Success");
        }else{
            return redirect()->back()->withInput()->withErrors("Something Error !");
        }
    }

    public function layoutMain()
    {
        return view('layout_main');
    }

    public function home()
    {
        return view("home");
    }

}
