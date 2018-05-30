<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryAdsSeeder extends Seeder {
    public function run()
    {
        DB::table('category_ads')->delete();
        $category = app()->make('App\CategoryAds');
        $category->fill(['name' => 'Komputer & Gadget']);
        $category->save();

        $category = app()->make('App\CategoryAds');
        $category->fill(['name' => 'Barang Pecah Belah']);
        $category->save();

        $category = app()->make('App\CategoryAds');
        $category->fill(['name' => 'Barang Elektronik']);
        $category->save();
    }
}