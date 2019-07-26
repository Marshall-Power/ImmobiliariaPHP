<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL_TOP-XL-L/0/id.pro.es.image.master/2c/33/75/693467457.jpg',
            'house_id' => '1'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/be/31/68/693467460.jpg',
            'house_id' => '1'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/20/b7/c0/693467462.jpg',
            'house_id' => '1'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/2a/fe/d7/688597766.jpg',
            'house_id' => '2'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/f8/de/da/688597767.jpg',
            'house_id' => '2'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/9d/c8/d9/688597768.jpg',
            'house_id' => '2'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/83/c9/94/581524812.jpg',
            'house_id' => '3'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/94/69/8f/581524825.jpg',
            'house_id' => '3'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-P/0/id.pro.es.image.master/67/38/a9/581525209.jpg',
            'house_id' => '3'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/75/3e/95/663292222.jpg',
            'house_id' => '4'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/a8/3c/da/663292233.jpg',
            'house_id' => '4'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/95/15/f4/663292227.jpg',
            'house_id' => '4'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/54/de/90/652831734.jpg',
            'house_id' => '5'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/ca/b5/16/652831721.jpg',
            'house_id' => '5'
        ]);
        Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/cf/3d/13/652831714.jpg',
            'house_id' => '5'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/32/f4/44/590549476.jpg',
            'house_id' => '6'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/17/cb/ea/590549478.jpg',
            'house_id' => '6'
        ]);
         Photo::create([
            'path' => 'https://img3.idealista.com/blur/WEB_DETAIL-XL-L/0/id.pro.es.image.master/f7/2a/4b/590549488.jpg',
            'house_id' => '6'
        ]);
    }
}
