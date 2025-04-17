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
                'rating' => 5.0,
                'bonus_title' => 'Jusqu\'à 750$',
                'bonus_subtitle' => '+ 200 Tours Gratuits',
                'description' => 'Découvrez Cashed Casino, la nouvelle destination de divertissement en ligne préférée des joueurs français. Plongez dans son univers de jeu passionnant et profitez de tous ses bonus et fonctionnalités.',
                'website' => 'https://www.casinoonlinefrancais.info/casino/cashed-casino/go.html',
                'verified' => true,
                'country_code' => 'CM',
            ],
            [
                'brand_name' => 'Vegasino',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/vegasino-casino.webp',
                'rating' => 4.9,
                'bonus_title' => 'Jusqu\'à 500€',
                'bonus_subtitle' => '+ 200 Tours Gratuits + 1 Bonus Crab',
                'description' => 'Sur Vegasino Casino, vous retrouverez plus de 2 000 jeux innovants, plusieurs bonus généreux et réguliers ainsi que la possibilité de réaliser des opérations financières avec la cryptomonnaie. Inscrivez-vous dès à présent pour ne rien manquer.',
                'website' => 'https://www.casinoonlinefrancais.info/casino/vegasino-casino/go.html',
                'verified' => false,
                'country_code' => 'FR',
            ],
            [
                'brand_name' => 'Alexander',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/alexander-casino.webp',
                'rating' => 3,
                'bonus_title' => 'Jusqu\'à 100€',
                'bonus_subtitle' => '+ 100 Tours Gratuits',
                'description' => 'Voici un casino en ligne destiné aux joueurs les plus conquérants ! Alexander Casino propose une interface de grande qualité : un cashback jusqu’à 2 %, des mini-jeux de Spribe, une sélection judicieuse de machines à sous et bien d’autres avantages.',
                'website' => 'https://www.casinoonlinefrancais.info/casino/alexander-casino/go.html',
                'verified' => true,
                'country_code' => 'CM',
            ],
            [
                'brand_name' => 'Talismania',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/talismania-casino.webp',
                'rating' => 4.8,
                'bonus_title' => 'Jusqu\'à 750$',
                'bonus_subtitle' => '+ 200 Tours Gratuits',
                'description' => 'Découvrez Talismania Casino, la nouvelle plateforme de jeux de Rabidi N.V. à l’ambiance mystique et magique. Un bonus de bienvenue généreux et des promotions attrayantes vous accueillent dans ce vaste univers ludique, tandis qu’une ludothèque massive dépassant les 4 000 titres vous assure une expérience de jeu complète et captivante !',
                'website' => 'https://www.casinoonlinefrancais.info/casino/talismania-casino/go.html',
                'verified' => true,
                'country_code' => 'BE',
            ],
            [
                'brand_name' => 'Gransino',
                'brand_image' => 'https://www.casinoonlinefrancais.info/cdn-cgi/image/format=webp,width=255,height=100,quality=80/img/logo250/gransino-casino.webp',
                'rating' => 4.5,
                'bonus_title' => 'Jusqu\'à 750$',
                'bonus_subtitle' => '+ 200 Tours Gratuits',
                'description' => 'Grâce à ses nombreux bonus ainsi qu’à sa licence PAGCOR, Gransino est rapidement devenue une destination de choix pour les joueurs français.',
                'website' => 'https://www.casinoonlinefrancais.info/casino/gransino-casino/go.html',
                'verified' => true,
                'country_code' => 'CA',
            ],
        ];

        foreach ($brands as $brand) {
            \App\Models\Brand::create([
                'brand_name' => $brand['brand_name'],
                'brand_image' => $brand['brand_image'],
                'rating' => $brand['rating'],
                'bonus_title' => $brand['bonus_title'],
                'bonus_subtitle' => $brand['bonus_subtitle'],
                'description' => $brand['description'],
                'website' => $brand['website'],
                'verified' => $brand['verified'],
                'country_code' => $brand['country_code']
            ]);
        }
    }
}
