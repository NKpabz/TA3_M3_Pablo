<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel->findAll();

        $data['users'] = array_map(function ($user) {
            return [
                'username' => $user['username'],
                'fullname' => $user['full_name'],
                'role'     => 'User',
            ];
        }, $users);

        return view('users', $data);
    }
}