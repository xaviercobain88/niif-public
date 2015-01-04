<?php

/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 12/31/14
 * Time: 4:47 PM
 */
class LicensedUserController extends BaseController {

    public function getDashboard() {
        if (\Session::get('logged')) {
            return View::make("app.dashboard");
        } else {
            return Redirect::to("login");
        }
    }

}