<?php

namespace App\Models;

class Profil
{
    /**
     * Mengambil data profil.
     * Data masih statis (belum dari database), tapi ditaruh di sini
     * supaya Controller cukup memanggil Model, bukan menyimpan data sendiri.
     */
    public static function getData(): array
    {
        return [
            'nama'    => 'Fan Ardiyansyah',
            'asal'    => 'Mojokerto',
            'sekolah' => 'SMKN 1 Trowulan',
            'skill'   => ['HTML', 'CSS', 'Laravel', 'PHP'],

            // Foto diambil dari folder public/images
            'foto'    => asset('images/profil.jpeg'),

            // Informasi pribadi
            'info_pribadi' => [
                'Email'  => 'fan.ardiyansyah.2505336.students.um.ac.id',
                'No. HP' => '08805971258',
                'Alamat' => 'Mojokerto, Jawa Timur',
                'Hobi'   => 'Makan, Main, Tidur',
            ],
        ];
    }
}