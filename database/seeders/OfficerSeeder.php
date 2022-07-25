<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Officer;
use Illuminate\Hashing\BcryptHasher;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $officer = [
          'name' => 'biatanlempake',
          'email' => 'biatanlempake@desjur.com',
          'username' => 'auzaniman',
          'ttl' => 'Yogya 12 juni',
          'nik' => '1234567890123457',
          'kk' => '1234567890123458',
          'kelamin' => 'Laki-Laki',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'alamat_ktp' => 'Yogya',
          'alamat_domisili' => 'Yogya',
          'provinsi' => 'DIY',
          'kota' => 'Yogya',
          'kecamatan' => 'Umbulharjo',
          'no_telpon' => '089607575813',
          'no_wa' => '089607575813',
          'pendidikan' => 'Aplikasi Biatan Lempake',
          'password' => bcrypt('biatanlempake12345')
        ];

        Officer::insert($officer);
    }
}
