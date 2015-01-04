<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 12/31/14
 * Time: 5:19 PM
 */

namespace services;


use repositories\UserRepository;

class AuthenticationService {


    protected $userRepository;

    function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function login($username, $password) {
        $user = $this->userRepository->findByEmail($username);
        if (empty($user)) {
            return false;
        }
        if ($user->password == $password) {
            \Session::set("logged", true);
            return true;
        }
        return false;
    }
} 