<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            // Rules & Validate
            $rules = [
                'email' => 'required',
                'password' => 'required'
            ];
            $validate = $this->validate($rules);
            if ($validate) {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $userModel = new User();
                $user = $userModel->asObject()->where('email', $email)->first();
                if ($user) {
                    if (password_verify($password, $user->password)) {
                        $data = [
                            'id' => $user->id,
                            'name' => $user->name,
                            'email'  => $user->email,
                            'alamat' => $user->alamat_cust,
                            'logged_in' => TRUE
                        ];
                        session()->set($data);
                        return redirect('/');
                    }
                }

                return redirect()->back()->withInput()->with('error', 'Username atau Password salah!');
            }
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        return view('auth/login', ['session' => null,]);
    }

    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'name' => [
                    'rules' => 'required|min_length[2]'
                ],
                'email' => [
                    'rules' => 'required|valid_email|is_unique[users.email]'
                ],
                'password' => [
                    'rules' => 'required|min_length[5]'
                ],
                'cpassword' => [
                    'rules' => 'required|matches[password]'
                ],
            ];
            $validate = $this->validate($rules);
            if ($validate) {
                $newUser = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'alamat_cust' => $this->request->getPost('address'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                ];

                $userModel = new User();
                $userModel->insert($newUser);

                return redirect('/');
            } else {
                return redirect('/register')->withInput()->with('validation', $this->validator);
            }
        }

        return view('auth/register', ['validation' => null]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
