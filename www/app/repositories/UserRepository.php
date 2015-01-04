<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 12/31/14
 * Time: 5:22 PM
 */

namespace repositories;


use models\User;

class UserRepository {


    protected $model;

    function __construct() {
        $this->model = new User();
    }

    public function findByUsername($username) {

        if (empty($username)) {
            return null;
        }
        return $this->model->where("username", "=", $username)->first();
    }
    public function findByEmail($email) {

        if (empty($email)) {
            return null;
        }
        return $this->model->where("email", "=", $email)->first();
    }
}