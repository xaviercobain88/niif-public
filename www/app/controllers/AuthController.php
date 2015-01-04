<?php

/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 12/31/14
 * Time: 4:47 PM
 */
class AuthController extends BaseController {

    protected $authenticationService;

    function __construct(\services\AuthenticationService $authenticationService) {
        $this->authenticationService = $authenticationService;
    }

    public function loginPage(){
        if(\Session::get('logged')){
            return Redirect::to("dashboard");
        }else{
            return View::make("auth.signin");
        }

    }

    public function signupPage(){
        return View::make("auth.signup");
    }

    public function login(){

        $email = Input::get('email');
        $password= Input::get('password');
        $loggedin=$this->authenticationService->login($email, $password);
        if($loggedin){
            return Redirect::to("dashboard");
        }else{
            return View::make("auth.signin");
        }

    }

    public function signup(){
        return View::make("auth.signup");
    }

} 