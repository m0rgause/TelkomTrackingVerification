<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {

        $roles = ['Area', 'Regional', 'Mgr Telkom', 'Verifikator'];
        $nama_indonesia = [
            'Ahmad',
            'Budi',
            'Cecep',
            'Dewi',
            'Eka',
            'Faisal',
            'Gita',
            'Hendra',
            'Indah',
            'Joko',
            'Kartika',
            'Lia',
            'Maman',
            'Nina',
            'Oscar',
            'Putri',
            'Rudi',
            'Sinta',
            'Tono',
            'Wulan'
        ];
        $users = [];
        for ($i = 0; $i < 20; $i++) {
            $nik_naker = rand(1000000000000000, 9999999999999999);
            $role = $roles[array_rand($roles)];
            $password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'), 0, 10);
            $nama_lengkap = $nama_indonesia[array_rand($nama_indonesia)];
            $no_hp = rand(10000000000, 99999999999);
            $username_telegram = '@' . substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_-'), 0, 10);
            $gmail = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'), 0, 10) . '@gmail.com';
            array_push($users, [
                'nik_naker' => $nik_naker,
                'role' => $role,
                'password' => $password,
                'nama_lengkap' => $nama_lengkap,
                'no_hp' => $no_hp,
                'username_telegram' => $username_telegram,
                'gmail' => $gmail
            ]);
        }

        $data = [
            'users' => $users
        ];
        return view('users/users', $data);
    }

    public function edit()
    {
        return view('users/edit');
    }
}