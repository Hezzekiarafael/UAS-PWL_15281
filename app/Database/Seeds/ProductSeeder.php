<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

// Mengisi data awal (dummy/real) ke dalam tabel

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'Simple Way Of Piece Life',
                'harga'  => 10899000,
                'jumlah' => 5,
                'foto' => 'product-item1.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Great Travel At Desert',
                'harga'  => 6899000,
                'jumlah' => 7,
                'foto' => 'product-item2.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'The Lady Beauty Scarlett',
                'harga'  => 6299000,
                'jumlah' => 5,
                'foto' => 'product-item3.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}