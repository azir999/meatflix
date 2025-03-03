<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): View
    {
        return view('auth.login');

    }  


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin')
                        ->withSuccess('Login Berhasil');
        }
  
        return redirect("login")->withError('Email atau password kamu salah');
    }
      /**
     * Write code on Method
     *
     * @return response()
     */
    public function admin()
    {
        if(Auth::check()){
            return view('admin');
        }
  
        return redirect("login")->withSuccess('Kamu tidak punya akses');
    }
    
    
}
