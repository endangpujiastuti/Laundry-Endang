<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlets')->insert([
            [
                'nama'=>'Toko Endang Puji Laundry',
                'alamat'=>'Padaherang',
                'tlp'=>'888777444555'
            ],
            [
                'nama'=>'Toko Endang Puji Laundry-2',
                'alamat'=>'Kalipucang',
                'tlp'=>'888666444111'
            ]
        ]);

        DB::table('users')->insert([
            [
                'nama'=>'Administrator',
                'username'=>'admin',
                'password'=>bcrypt('1234'),
                'role'=>'admin',
                'outlet_id'=>1,
            ],
            [
                'nama'=>'Kasir',
                'username'=>'kasir',
                'password'=>bcrypt('1234'),
                'role'=>'kasir',
                'outlet_id'=>1,
            ],
            [
                'nama'=>'Pemilik',
                'username'=>'owner',
                'password'=>bcrypt('1234'),
                'role'=>'owner',
                'outlet_id'=>1,
            ]
        ]);

        DB::table('pakets')->insert([
            [
                'nama_paket'=>'Reguler',
                'harga'=>7000,
                'jenis'=>'kiloan',
                'outlet_id'=>1,
            ],
            [
                'nama_paket'=>'Bed Cover',
                'harga'=>5000,
                'jenis'=>'bed_cover',
                'outlet_id'=>1,
            ]
        ]);

        DB::table('members')->insert([
            [
                'nama'=>'Dodo Sidodo',
                'jenis_kelamin'=>'L',
                'alamat'=>'Padaherang',
                'tlp'=>'888777666888'
            ]
           
            // [
            //     'nama'=>'Endang',
            //     'jenis_kelamin'=>'p',
            //     'alamat'=>'Padaherang',
            //     'tlp'=>'888777666555'
            // ]
            ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
