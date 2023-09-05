<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private $items = [
        ['name' => 'Delivery 3 DHS', 'category' => 'التوصيل - Delivery', 'price'=>3, 'type'=>'product'],
        ['name' => 'Delivery 5 DHS', 'category' => 'التوصيل - Delivery', 'price'=>5, 'type'=>'product'],
        ['name' => 'Delivery 8 DHS', 'category' => 'التوصيل - Delivery', 'price'=>8, 'type'=>'product'],
        ['name' => 'Delivery 10 DHS', 'category' => 'التوصيل - Delivery', 'price'=>10, 'type'=>'product'],
        ['name' => 'بطاطس 🥔 Farm Potato', 'category' => 'الحلو - Sweets', 'price'=>3, 'type'=>'product'],
        ['name' => 'ساندوتش حلاوة بالقشطة - Halawa with Cream Sandwich', 'category' => 'الحلو - Sweets', 'price'=>5, 'type'=>'product'],
        ['name' => 'ساندوتش مربى بالقشطة - Jam with Cream Sandwich', 'category' => 'الحلو - Sweets', 'price'=>5, 'type'=>'product'],
        ['name' => 'ساندوتش سكلانس(مربى- حلاة-قشطة) - Sakalans Sandwich (Jam-Halawa-Cream)', 'category' => 'الحلو - Sweets', 'price'=>5, 'type'=>'product'],
        ['name' => 'قنبلة الهرم الرابع  (مربى -قشطة حلاوة -نوتيلا) - Al Haram Al Rabie Konbela (Jam-Cream-Halawa-Nutella)', 'category' => 'الحلو - Sweets', 'price'=>7, 'type'=>'product'],
        ['name' => 'رز باللبن - Rice with Milk', 'category' => 'الحلو - Sweets', 'price'=>3, 'type'=>'product'],
        ['name' => 'مياه معدنية - Mineral Water', 'category' => 'المشروبات - Drinks', 'price'=>1, 'type'=>'product'],
        ['name' => 'سفن آب - 7up', 'category' => 'المشروبات - Drinks', 'price'=>3, 'type'=>'product'],
        ['name' => 'بيبسي - Pepsi', 'category' => 'المشروبات - Drinks', 'price'=>3, 'type'=>'product'],
        ['name' => 'ميراندا - Miranda', 'category' => 'المشروبات - Drinks', 'price'=>3, 'type'=>'product'],
        ['name' => 'ديو - Dew', 'category' => 'المشروبات - Drinks', 'price'=>3, 'type'=>'product'],
        ['name' => 'بيبسي دايت - Pepsi Diet', 'category' => 'المشروبات - Drinks', 'price'=>3, 'type'=>'product'],
        ['name' => 'سفن آب دايت - 7up Diet', 'category' => 'المشروبات - Drinks', 'price'=>3, 'type'=>'product'],
        ['name' => 'كفتة مشوية - Kofta', 'category' => 'بلدي - Baldi', 'price'=>12, 'type'=>'product'],
        ['name' => 'كبدة اسكندراني - Eskandarani Liver', 'category' => 'بلدي - Baldi', 'price'=>10, 'type'=>'product'],
        ['name' => 'كبدة جريل - Grilled Liver', 'category' => 'بلدي - Baldi', 'price'=>10, 'type'=>'product'],
        ['name' => 'سجق اسكندراني - Eskandarani Sausage', 'category' => 'بلدي - Baldi', 'price'=>10, 'type'=>'product'],
        ['name' => 'سجق جريل - Grilled Sausage', 'category' => 'بلدي - Baldi', 'price'=>10, 'type'=>'product'],
        ['name' => 'حواوشي لحم - Beef Hawawshi', 'category' => 'بلدي - Baldi', 'price'=>10, 'type'=>'product'],
        ['name' => 'حواوشي لحم مكس سجق - Sausage Mix Hawawshi', 'category' => 'بلدي - Baldi', 'price'=>12, 'type'=>'product'],
        ['name' => 'حواوشي لحم مكس جبن - Cheese Mix Hawawshi', 'category' => 'بلدي - Baldi', 'price'=>15, 'type'=>'product'],
        ['name' => 'حواوشي الهرم الرابع (لحم - سجق - جبن) - Al Haram Al Rabie Hawawshi (Beef-Sausage-Cheese)', 'category' => 'بلدي - Baldi', 'price'=>18, 'type'=>'product'],
        ['name' => 'كفتة مشوية - Kofta', 'category' => 'فينو - Feno', 'price'=>10, 'type'=>'product'],
        ['name' => 'كبدة اسكندراني - Eskandarani Liver', 'category' => 'فينو - Feno', 'price'=>8, 'type'=>'product'],
        ['name' => 'كبدة جريل - Grilled Liver', 'category' => 'فينو - Feno', 'price'=>8, 'type'=>'product'],
        ['name' => 'سجق اسكندراني - Eskandarani Sausage', 'category' => 'فينو - Feno', 'price'=>8, 'type'=>'product'],
        ['name' => 'سجق جريل - Grilled Sausage', 'category' => 'فينو - Feno', 'price'=>8, 'type'=>'product'],
        ['name' => 'Baldi Bread', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Feno Bread', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Meat', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Cheese', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Vegetables', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Liver', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Fuel', 'category' => 'Operational', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Materials', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Staff Food', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Salaries', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Dairy Materials', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Hospitality', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name'=> 'Tea', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Mineral Water', 'category' => 'Cost Of Goods Sold', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Sewa Bill' , 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'DU Bill', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Shop Rent', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Flat Rent', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Licenses', 'category' => 'Administration', 'price'=>0, 'type'=>'expense'],
        ['name' => 'Others', 'category' => 'Administration','price'=>0,  'type'=>'expense']
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::query()->insert($this->items);
        Item::query()->update(['created_at' => now()]);
    }
}
