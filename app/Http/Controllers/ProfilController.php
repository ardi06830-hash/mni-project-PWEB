<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama'    => 'Fan Ardiyansyah',
            'asal'    => 'Mojokerto',
            'sekolah' => 'SMKN 1 Trowulan',
            'skill'   => ['HTML', 'CSS', 'Laravel', 'PHP'],

            // Foto diambil dari folder public/images
            // Taruh file fotonya di: public/images/profil.jpg
            'foto'    => asset('images/profil.jpeg'),

            // Section informasi pribadi baru
            'info_pribadi' => [
                'Email'   => 'fan.ardiyansyah.2505336.students.um.ac.id',
                'No. HP'  => '08805971258',
                'Alamat'  => 'Mojokerto, Jawa Timur',
                'Hobi'    => 'Makan, Main, Tidur',
            ],
        ];

        return view('profil', $data);
    }
}