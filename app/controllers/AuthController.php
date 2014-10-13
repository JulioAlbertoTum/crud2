<?php

class AuthController extends BaseController {
   
	/**
     * Muestra el formulario para login.
     */
    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('hello');
    }

	public function postLogin(){
		$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')

			);
		
		if(Auth::attempt($userdata, Input::get('remember-me', 0))){
			return Redirect::to('/');
		}
		return Redirect::to('/logear')
					->with('mensaje_error', 'Tus datos son incorrectos')
					->withInput();
	}


	  public function logOut()
    {
        Auth::logout();
        return Redirect::to('/');
                    //->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

}