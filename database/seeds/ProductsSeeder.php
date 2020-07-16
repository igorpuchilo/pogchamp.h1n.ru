<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'category_id' => '9',
                'brand_id' => '1',
                'title' => 'Viatti Brina V-521 195/65R15 91T',
                'alias' => 'viatti-brina-v-521',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 300,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '1.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '2',
                'category_id' => '8',
                'brand_id' => '1',
                'title' => 'Cordiant Polar SL 205/55R16 94T',
                'alias' => 'cordiant-polar-sl',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 200,
                'old_price' => 200,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '2.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '3',
                'category_id' => '8',
                'brand_id' => '1',
                'title' => 'Cordiant Snow Cross 195/65R15 91T',
                'alias' => 'cordiant-snow-cross',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 400,
                'old_price' => 100,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '3.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '4',
                'category_id' => '3',
                'brand_id' => '2',
                'title' => 'Lassa Competus Winter 2 225/60R18 100H',
                'alias' => 'lassa-competus-winter-2',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 350,
                'old_price' => 200,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '4.png',
                'hit' => '1',
                'parent_id' => '1',
            ],


            [
                'id' => '5',
                'category_id' => '5',
                'brand_id' => '2',
                'title' => 'Tigar Winter 205/55R16 94H',
                'alias' => 'tigar-winter',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 320,
                'old_price' => 220,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '5.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '6',
                'category_id' => '5',
                'brand_id' => '2',
                'title' => 'Hankook Winter i*cept iZ2 W616 205/55R16 94T',
                'alias' => 'hankook-winter-i*cept-iZ2',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '6.png',
                'hit' => '1',
                'parent_id' => '1',
            ],


            [
                'id' => '7',
                'category_id' => '10',
                'brand_id' => '3',
                'title' => 'Белшина Artmotion Snow Бел-337 195/65R15 91T',
                'alias' => 'belshina-artmotion-snow-bel-337',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 320,
                'old_price' => 220,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '7.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '8',
                'category_id' => '10',
                'brand_id' => '4',
                'title' => 'Kumho WinterCraft SUV Ice WS31 225/65R17 106T',
                'alias' => 'kumho-wintercraft-suv-ice-ws31',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '8.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '9',
                'category_id' => '9',
                'brand_id' => '4',
                'title' => 'Sava Eskimo S3+ 205/55R16 91T',
                'alias' => 'sava-eskimo-s3+',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 320,
                'old_price' => 220,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '9.png',
                'hit' => '1',
                'parent_id' => '1',
            ],
            [
                'id' => '10',
                'category_id' => '8',
                'brand_id' => '4',
                'title' => 'BFGoodrich g-Force Winter 2 205/55R16 94H',
                'alias' => 'bfgoodrich-g-force-winter-2',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '10.png',
                'hit' => '1',
                'parent_id' => '1',
            ],


            [
                'id' => '11',
                'category_id' => '2',
                'brand_id' => '2',
                'title' => 'Swimming Watch VQ-01 - Часы для плавание в бассейне',
                'alias' => 'tyres-1',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '11.png',
                'hit' => '0',
                'parent_id' => '1',
            ],
            [
                'id' => '12',
                'category_id' => '2',
                'brand_id' => '2',
                'title' => 'Goodyear UltraGrip Ice 2 205/55R16 94T',
                'alias' => 'goodyear-ultragrip-ice-2',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '12.png',
                'hit' => '0',
                'parent_id' => '1',
            ],

            [
                'id' => '13',
                'category_id' => '15',
                'brand_id' => '2',
                'title' => 'Michelin X-Ice 3 205/55R16 94H',
                'alias' => 'michelin-x-ice-3',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '13.png',
                'hit' => '0',
                'parent_id' => '1',
            ],

            [
                'id' => '14',
                'category_id' => '13',
                'brand_id' => '2',
                'title' => 'Barum Polaris 5 205/55R16 91T',
                'alias' => 'barum-polaris-5',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '14.png',
                'hit' => '0',
                'parent_id' => '1',
            ],

            [
                'id' => '15',
                'category_id' => '16',
                'brand_id' => '2',
                'title' => 'Continental WinterContact TS 860 195/65R15 91T',
                'alias' => 'continental-wintercontact-ts-860',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '15.png',
                'hit' => '0',
                'parent_id' => '1',
            ],

            [
                'id' => '16',
                'category_id' => '12',
                'brand_id' => '2',
                'title' => 'KAMA 505 195/65R15 91Q',
                'alias' => 'kama-505',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '16.png',
                'hit' => '0',
                'parent_id' => '1',
            ],

            [
                'id' => '17',
                'category_id' => '11',
                'brand_id' => '2',
                'title' => 'Kormoran Snow 205/55R16 94H',
                'alias' => 'kormoran-snow',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => 370,
                'old_price' => 250,
                'status' => '1',
                'keywords' => 'tyres',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => '17.png',
                'hit' => '0',
                'parent_id' => '1',
            ],

        ];

        DB::table('products')->insert($data);
    }
}