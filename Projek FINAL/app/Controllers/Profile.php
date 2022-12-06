<?php

namespace App\Controllers;

use App\Models\User;

class Profile extends BaseController
{
    public function profile($id)
    {
        $userModel = new User();
        $user = $userModel->where('id', $id)->first();

        // dd($user);
        return view('profile/index', [
            'user' => $user,
        ]);
    }

    public function editprofile($id)
    {
        $userModel = new User();
        $user = $userModel->where('id', $id)->first();

        return view('profile/edit', [
            'user' => $user,
        ]);
    }

    public function updateprofile($id)
    {
        $userModel = new User();
        $dataNew = [
            'name' => $this->request->getPost('name'),
            'alamat_cust' => $this->request->getPost('alamat'),
        ];

        $userModel->update($id, $dataNew);


        return redirect()->to('/');
    }
}
