<?php

use App\Models\Kullanici;

use App\Models\KullaniciDetay;

use Illuminate\Database\Seeder;

class KullaniciTableSeeder extends Seeder
{

    public function run(Faker\Generator $faker)

    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Kullanici::truncate();

        KullaniciDetay::truncate();

        $kullanici_yonetici = Kullanici::create([

            'adsoyad' => 'Eray ALTUN',

            'email' => 'eray_altun_25@hotmail.com',

            'sifre' => bcrypt('25251905'),

            'aktif_mi' => 1,

            'yonetici_mi' => 1

        ]);

        $kullanici_yonetici -> detay() -> create([

            'adres' => 'İstanbul',

            'telefon' => '(506) 969 22 25',

            'ceptelefonu' => '(506) 969 22 25'

        ]);

        for ($i = 0; $i < 50; $i++)

        {

            $kullanici_musteri = Kullanici::create([

                'adsoyad' => $faker -> name,

                'email' => $faker -> unique() -> safeEmail,

                'sifre' => bcrypt('25251905'),

                'aktif_mi' => 1,

                'yonetici_mi' => 0

            ]);

            $kullanici_musteri -> detay() -> create([

                'adres' => $faker -> address,

                'telefon' => $faker -> e164PhoneNumber,

                'ceptelefonu' => $faker -> e164PhoneNumber

            ]);

        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
