<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function new()
    {
        return view('users/create');
    }

    public function create()
    {
        $rules = [
            'username' => 'required|is_unique[users.username]',
            'full_name' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('users/create', ['validation' => $this->validator]);
        }

        $model = new UserModel();
        $model->save([
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
        
        $avatar = $this->request->getFile('avatar');
        $avatarName = $this->request->getPost('old_avatar');

        if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {
            $rules = [
                'avatar' => 'uploaded[avatar]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]'
            ];
            if (!$this->validate($rules)) {
                return view('users/edit', ['user' => $model->find($id), 'validation' => $this->validator]);
            }
            $avatarName = $avatar->getRandomName();
            $avatar->move(ROOTPATH . 'public/uploads', $avatarName);
        }

        $model->update($id, [
            'username' => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'avatar' => $avatarName
        ]);

        return redirect()->to('/users');
    }
}   