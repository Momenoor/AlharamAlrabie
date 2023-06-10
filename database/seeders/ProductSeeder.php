<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private $items = [
        ['name' => 'Delivery 3 DHS', 'category' => 'التوصيل - Delivery'],
        ['name' => 'Delivery 5 DHS', 'category' => 'التوصيل - Delivery'],
        ['name' => 'Delivery 8 DHS', 'category' => 'التوصيل - Delivery'],
        ['name' => 'Delivery 10 DHS', 'category' => 'التوصيل - Delivery'],
        ['name' => 'بطاطس 🥔 Farm Potato', 'category' => 'الحلو - Sweets'],
        ['name' => 'ساندوتش حلاوة بالقشطة - Halawa with Cream Sandwich', 'category' => 'الحلو - Sweets'],
        ['name' => 'ساندوتش مربى بالقشطة - Jam with Cream Sandwich', 'category' => 'الحلو - Sweets'],
        ['name' => 'ساندوتش سكلانس(مربى- حلاة-قشطة) - Sakalans Sandwich (Jam-Halawa-Cream)', 'category' => 'الحلو - Sweets'],
        ['name' => 'قنبلة الهرم الرابع  (مربى -قشطة حلاوة -نوتيلا) - Al Haram Al Rabie Konbela (Jam-Cream-Halawa-Nutella)', 'category' => 'الحلو - Sweets'],
        ['name' => 'رز باللبن - Rice with Milk', 'category' => 'الحلو - Sweets'],
        ['name' => 'مياه معدنية - Mineral Water', 'category' => 'المشروبات - Drinks'],
        ['name' => 'سفن آب - 7up', 'category' => 'المشروبات - Drinks'],
        ['name' => 'بيبسي - Pepsi', 'category' => 'المشروبات - Drinks'],
        ['name' => 'ميراندا - Miranda', 'category' => 'المشروبات - Drinks'],
        ['name' => 'ديو - Dew', 'category' => 'المشروبات - Drinks'],
        ['name' => 'بيبسي دايت - Pepsi Diet', 'category' => 'المشروبات - Drinks'],
        ['name' => 'سفن آب دايت - 7up Diet', 'category' => 'المشروبات - Drinks'],
        ['name' => 'كفتة مشوية - Kofta', 'category' => 'بلدي - Baldi'],
        ['name' => 'كبدة اسكندراني - Eskandarani Liver', 'category' => 'بلدي - Baldi'],
        ['name' => 'كبدة جريل - Grilled Liver', 'category' => 'بلدي - Baldi'],
        ['name' => 'سجق اسكندراني - Eskandarani Sausage', 'category' => 'بلدي - Baldi'],
        ['name' => 'سجق جريل - Grilled Sausage', 'category' => 'بلدي - Baldi'],
        ['name' => 'حواوشي لحم - Beef Hawawshi', 'category' => 'بلدي - Baldi'],
        ['name' => 'حواوشي لحم مكس سجق - Sausage Mix Hawawshi', 'category' => 'بلدي - Baldi'],
        ['name' => 'حواوشي لحم مكس جبن - Cheese Mix Hawawshi', 'category' => 'بلدي - Baldi'],
        ['name' => 'حواوشي الهرم الرابع (لحم - سجق - جبن) - Al Haram Al Rabie Hawawshi (Beef-Sausage-Cheese)', 'category' => 'بلدي - Baldi'],
        ['name' => 'كفتة مشوية - Kofta', 'category' => 'فينو - Feno'],
        ['name' => 'كبدة اسكندراني - Eskandarani Liver', 'category' => 'فينو - Feno'],
        ['name' => 'كبدة جريل - Grilled Liver', 'category' => 'فينو - Feno'],
        ['name' => 'سجق اسكندراني - Eskandarani Sausage', 'category' => 'فينو - Feno'],
        ['name' => 'سجق جريل - Grilled Sausage', 'category' => 'فينو - Feno'],

    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->insert($this->items);
        Product::query()->update(['created_at' => now()]);
    }
}
