<?php

namespace Database\Seeders;

use App\Models\Poi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pois')->truncate();

        Poi::create([
            'name' => 'Malcolm Hall',
            'history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'courses' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'offices' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'top' => 14.65659,
            'bottom' => 14.65613,
            'left' => 121.07186,
            'right' => 121.07248,
        ]);

        Poi::create([
            'name' => 'Palma Hall',
            'history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'courses' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'offices' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'top' => 14.65390,
            'bottom' => 14.65341,
            'left' => 121.06956,
            'right' => 121.07019,
        ]);

        Poi::create([
            'name' => 'Melchor Hall',
            'history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'courses' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'offices' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'top' => 14.65660,
            'bottom' => 14.65608,
            'left' => 121.06910,
            'right' => 121.07012,
        ]);

        Poi::create([
            'name' => 'Quezon Hall',
            'history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'courses' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'offices' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'top' => 14.65513,
            'bottom' => 14.65472,
            'left' => 121.06494,
            'right' => 121.06525,
        ]);

        Poi::create([
            'name' => 'Oblation Statue',
            'history' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'courses' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'offices' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi vel blandit mi. Donec faucibus pretium nibh, ac tristique
            augue egestas at. Maecenas tincidunt pulvinar tortor a egestas.
            Sed enim dolor, malesuada ut dapibus quis, ornare in neque.
            Nullam at orci felis. Integer ac dictum dui. Cras pulvinar
            lacus vel augue suscipit consectetur. Integer eu lectus
            efficitur, gravida arcu quis, blandit diam. Aliquam non mi
            vitae ligula lobortis egestas in id lorem. Etiam sodales rhoncus
            posuere.',
            'top' => 14.65508,
            'bottom' => 14.65477,
            'left' => 121.06433,
            'right' => 121.06490,
        ]);

    }
}
