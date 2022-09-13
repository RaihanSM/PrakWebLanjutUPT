<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [    
        [
            'npm' => '2057051021',
            'nama'    => 'Raihan',
            'alamat'    => 'Rajabasa',
            'created_at' => Time::now()
        ],
        [
            'npm' => '2017011011',
            'nama'    => 'Rere',
            'alamat'    => 'Way Halim',
            'created_at' => Time::now()
        ],
        [
            'npm' => '2001002001',
            'nama'    => 'Collei',
            'alamat'    => 'Gandharva Ville',
            'created_at' => Time::now()
        ],


        ];

        // // Simple Queries
        // $this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
            }
    }
}
