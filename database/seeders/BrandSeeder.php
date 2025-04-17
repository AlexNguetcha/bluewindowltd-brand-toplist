<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand; // Make sure you have a Brand model

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'brand_name' => 'Cashed Casino',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/cashed-casino.webp',
                'rating' => 5,
                'bonus_title' => 'Jusqu\'à 750$',
                'bonus_subtitle' => '+ 200 Tours Gratuits',
                'description' => 'Découvrez Cashed Casino, la nouvelle destination de divertissement en ligne préférée des joueurs français.',
                'website' => 'https://www.cashedcasino.com',
                'verified' => true,
                'country_code' => 'FR',
            ],
            [
                'brand_name' => 'Jackpot Paradise',
                'brand_image' => 'https://www.example.com/logo-jackpot.webp',
                'rating' => 4,
                'bonus_title' => 'Bonus de bienvenue 500€',
                'bonus_subtitle' => '100 Free Spins',
                'description' => 'Un casino avec une énorme sélection de jeux et des jackpots réguliers.',
                'website' => 'https://www.jackpotparadise.com',
                'verified' => true,
                'country_code' => 'FR',
            ],
            [
                'brand_name' => 'LuckyWin',
                'brand_image' => 'https://www.example.com/logo-luckywin.webp',
                'rating' => 3,
                'bonus_title' => '300€ de bonus',
                'bonus_subtitle' => '',
                'description' => 'LuckyWin est connu pour ses retraits rapides et un excellent service client.',
                'website' => 'https://www.luckywin.com',
                'verified' => false,
                'country_code' => 'CA',
            ],
            [
                'brand_name' => '777 Casino',
                'brand_image' => 'https://www.example.com/logo-777.webp',
                'rating' => 5,
                'bonus_title' => '777€ offerts',
                'bonus_subtitle' => '77 tours sans dépôt',
                'description' => 'Un classique dans le monde des casinos en ligne.',
                'website' => 'https://www.777casino.com',
                'verified' => true,
                'country_code' => 'BE',
            ],
            [
                'brand_name' => 'Royal Vegas',
                'brand_image' => 'https://www.example.com/logo-royalvegas.webp',
                'rating' => 4,
                'bonus_title' => '1200€ de bonus',
                'bonus_subtitle' => '',
                'description' => 'Une ambiance royale et une ludothèque de qualité.',
                'website' => 'https://www.royalvegas.com',
                'verified' => true,
                'country_code' => 'FR',
            ],
            [
                'brand_name' => 'Casino Extra',
                'brand_image' => 'https://www.example.com/logo-casinoextra.webp',
                'rating' => 4,
                'bonus_title' => '350€ de bonus',
                'bonus_subtitle' => '100 Free Spins',
                'description' => 'Un casino moderne avec des promotions régulières.',
                'website' => 'https://www.casinoextra.com',
                'verified' => false,
                'country_code' => 'LU',
            ],
            [
                'brand_name' => 'BitCasino',
                'brand_image' => 'https://www.example.com/logo-bitcasino.webp',
                'rating' => 5,
                'bonus_title' => '0.1 BTC de bonus',
                'bonus_subtitle' => '',
                'description' => 'Le leader des casinos crypto.',
                'website' => 'https://www.bitcasino.io',
                'verified' => true,
                'country_code' => 'FR',
            ],
            [
                'brand_name' => 'Spin Million',
                'brand_image' => 'https://www.example.com/logo-spinmillion.webp',
                'rating' => 3,
                'bonus_title' => '250€ + 25 tours',
                'bonus_subtitle' => '',
                'description' => 'Des gains fréquents et un bon support client.',
                'website' => 'https://www.spinmillion.com',
                'verified' => false,
                'country_code' => 'FR',
            ],
            [
                'brand_name' => 'MonteCrypto Casino',
                'brand_image' => 'https://www.example.com/logo-montecrypto.webp',
                'rating' => 4,
                'bonus_title' => '15 BTC de bonus',
                'bonus_subtitle' => '200% sur 1er dépôt',
                'description' => 'Un univers mystérieux et des gains colossaux.',
                'website' => 'https://www.montecrypto.com',
                'verified' => true,
                'country_code' => 'CH',
            ],
            [
                'brand_name' => 'Wild Sultan',
                'brand_image' => 'https://www.example.com/logo-wildsultan.webp',
                'rating' => 5,
                'bonus_title' => '1000€ + 100 tours',
                'bonus_subtitle' => '',
                'description' => 'Un casino au style oriental, très apprécié en France.',
                'website' => 'https://www.wildsultan.com',
                'verified' => true,
                'country_code' => 'FR',
            ],
        ];

        foreach ($brands as $brand) {
            \App\Models\Brand::create([
                'brand_name' => $brand['brand_name'],
                'brand_image' => $brand['brand_image'],
                'rating' => $brand['rating'],
                // 'bonus_title' => $brand['bonus_title'],
                // 'bonus_subtitle' => $brand['bonus_subtitle'],
                // 'description' => $brand['description'],
                // 'website' => $brand['website'],
                // 'verified' => $brand['verified'],
                'country_code' => $brand['country_code']
            ]);
        }
    }
}
