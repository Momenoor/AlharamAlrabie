<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryVariant;
use App\Models\PredefinedVariant;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{

    private array $categories = [
        'Delivery - التوصيل',
        'Sweets - الحلو',
        'Drinks - المشروبات',
        'Sandwich - سندويتش',
        'Pasta - مكرونة',
        'Orders - طلبات',
    ];

    private array $predefined_variant = [
        'Sandwich - سندويتش' => [
            'Feno - فينو',
            'Baldi - بلدي',
        ]
    ];
    private array $products =
        array(
            array('id' => 1, 'name' => 'Delivery 3 DHS', 'description' => NULL, 'price' => '3', 'account_id' => 53, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Delivery - التوصيل', 'type' => 'service', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '0',),
            array('id' => 2, 'name' => 'Delivery 5 DHS', 'description' => NULL, 'price' => '5', 'account_id' => 53, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Delivery - التوصيل', 'type' => 'service', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '0',),
            array('id' => 3, 'name' => 'Delivery 8 DHS', 'description' => NULL, 'price' => '8', 'account_id' => 53, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Delivery - التوصيل', 'type' => 'service', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '0',),
            array('id' => 4, 'name' => 'Delivery 10 DHS', 'description' => NULL, 'price' => '10', 'account_id' => 53, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Delivery - التوصيل', 'type' => 'service', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '0',),
            array('id' => 5, 'name' => 'بطاطس 🥔 Farm Potatoo', 'description' => NULL, 'price' => '3', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Sweets - الحلو', 'type' => 'service', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 6, 'name' => 'ساندوتش حلاوة بالقشطة - Halawa with Cream Sandwich', 'description' => 'Halawa With Cream From Thin Layers Of Dough Saturated With Butter, and It Is Filled With A Rich Mixture Of Cream, Sugar and Nuts Such As Pistachios Or Almonds.', 'price' => '5', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Sweets - الحلو', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 7, 'name' => 'ساندوتش مربى بالقشطة - Jam with Cream Sandwich', 'description' => 'Jam With Cream With Its Creamy Texture and Rich Flavor. It Is Made By Cooking Cream With Sugar, Lemon Juice and Citrus Peels', 'price' => '5', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Sweets - الحلو', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 8, 'name' => 'ساندوتش سكلانس(مربى- حلاة-قشطة) - Sakalans Sandwich (Jam-Halawa-Cream)', 'description' => 'Jam, Halawa and Cream', 'price' => '5', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Sweets - الحلو', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 9, 'name' => 'قنبلة الهرم الرابع  (مربى -قشطة حلاوة -نوتيلا) - Al Haram Al Rabie Konbela (Jam-Cream-Halawa-Nutella)', 'description' => 'Jam, Halawa, Cream and Nutella', 'price' => '7', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Sweets - الحلو', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 10, 'name' => 'رز باللبن - Rice with Milk', 'description' => 'Slow-cooked rice infused with creamy milk, sweetened to perfection', 'price' => '3', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Sweets - الحلو', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 11, 'name' => 'مياه معدنية - Mineral Water', 'description' => NULL, 'price' => '1', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 12, 'name' => 'سفن آب - 7up', 'description' => NULL, 'price' => '3', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 13, 'name' => 'بيبسي - Pepsi', 'description' => NULL, 'price' => '3', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 14, 'name' => 'ميراندا - Miranda', 'description' => NULL, 'price' => '3', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 15, 'name' => 'ديو - Dew', 'description' => NULL, 'price' => '3', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 16, 'name' => 'بيبسي دايت - Pepsi Diet', 'description' => NULL, 'price' => '3', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 17, 'name' => 'سفن آب دايت - 7up Diet', 'description' => NULL, 'price' => '3', 'account_id' => 52, 'image' => NULL, 'slug' => NULL, 'category_id' => 'Drinks - المشروبات', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 18, 'name' => 'كفتة مشوية - Kofta', 'description' => 'Grilled Kofta With A Combination Of Minced Meat Saturated With Good Flavors and Aromatic Spices. The Meat Is Shaped Into Round Discs and Then Grilled', 'price' => '12', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 19, 'name' => 'كبدة اسكندراني - Eskandarani Liver', 'description' => 'Eskandrani Liver', 'price' => '10', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 20, 'name' => 'كبدة جريل - Grilled Liver', 'description' => 'Grilled Liver. The Liver Is Characterized By Its Rich Flavor and Distinctive Texture, As It Is Prepared On The Grill', 'price' => '10', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 21, 'name' => 'سجق اسكندراني - Eskandarani Sausage', 'description' => 'Eskandrani Sausage', 'price' => '10', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 22, 'name' => 'سجق جريل - Grilled Sausage', 'description' => 'Juicy and smoky sausage cooked on the grill.', 'price' => '10', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 23, 'name' => 'حواوشي لحم - Beef Hawawshi', 'description' => 'Delicious Grilled Meat Hawawshi. This Sandwich Is Distinguished By The Rich Taste and Delicious Flavor That Comes From Grilled Meat With Its Special Spices', 'price' => '10', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 24, 'name' => 'حواوشي لحم مكس سجق - Sausage Mix Hawawshi', 'description' => 'Beef and Sausage In Addition To Onions and Pepper', 'price' => '12', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 25, 'name' => 'حواوشي لحم مكس جبن - Cheese Mix Hawawshi', 'description' => 'Seasoned Meat Pieces Are Grilled On Charcoal Or In A Hot Pan Until The Meat Is Tender and Roasted On Sides.', 'price' => '15', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 26, 'name' => 'حواوشي الهرم الرابع (لحم - سجق - جبن) - Al Haram Al Rabie Hawawshi (Beef-Sausage-Cheese)', 'description' => 'Beef, Sausage and Cheese', 'price' => '18', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Baldi - بلدي', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 27, 'name' => 'كفتة مشوية - Kofta', 'description' => 'Grilled Kofta With A Combination Of Minced Meat Saturated With Good Flavors and Aromatic Spices. The Meat Is Shaped Into Round Discs and Then Grilled', 'price' => '10', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Feno - فينو', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 28, 'name' => 'كبدة اسكندراني - Eskandarani Liver', 'description' => 'Eskandrani Liver', 'price' => '8', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Feno - فينو', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 29, 'name' => 'كبدة جريل - Grilled Liver', 'description' => 'Grilled Liver. The Liver Is Characterized By Its Rich Flavor and Distinctive Texture, As It Is Prepared On The Grill', 'price' => '8', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Feno - فينو', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 30, 'name' => 'سجق اسكندراني - Eskandarani Sausage', 'description' => 'Eskandrani Sausage', 'price' => '8', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Feno - فينو', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',),
            array('id' => 31, 'name' => 'سجق جريل - Grilled Sausage', 'description' => 'Juicy and smoky sausage cooked on the grill.', 'price' => '8', 'account_id' => 51, 'image' => NULL, 'slug' => NULL, 'variant' => 'Feno - فينو', 'category_id' => 'Sandwich - سندويتش', 'type' => 'product', 'created_at' => '2023-09-03 21:41:22', 'updated_at' => '2023-09-03 21:41:22', 'is_menu_item' => '1',)
        );
    private array $expenses = [
        ['name' => 'Baldi Bread', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Feno Bread', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Meat', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Cheese', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Vegetables', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Liver', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Fuel', 'category' => 'Operational', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Materials', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Staff Food', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Salaries', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Dairy Materials', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Hospitality', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Tea', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Mineral Water', 'category' => 'Cost Of Goods Sold', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Sewa Bill', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'DU Bill', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Shop Rent', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Flat Rent', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Licenses', 'category' => 'Administration', 'price' => 0, 'type' => 'expense'],
        ['name' => 'Others', 'category' => 'Administration', 'price' => 0, 'type' => 'expense']
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::query()->create([
                'name' => $category,
                'slug' => Str::slug($category, '-'),
                'description' => $category,
                'status' => 'active',
            ]);
        }

        foreach ($this->predefined_variant as $category => $variant) {
            if (is_array($variant)) {
                foreach ($variant as $value) {
                    PredefinedVariant::query()->create([
                        'name' => $value,
                        'category_id' => Category::query()->where('name', $category)->first()->id,
                    ]);
                }
            }

        }

        foreach ($this->products as $product) {
            $p = Product::query()->updateOrCreate(
                [
                    'name' => $product['name'],
                ],
                [
                    'description' => $product['description'],
                    'account_id' => $product['account_id'],
                    'category_id' => Category::query()->where('name', $product['category_id'])->first()->id,
                    'slug' => Str::slug($product['name']),
                    'type' => $product['type'],
                    'is_show_in_menu' => (boolean)$product['is_menu_item'],
                    'price' => $product['price'],
                ]);
            if (!empty($product['variant'])) {
                $predfinedVariant = PredefinedVariant::query()->where('name', $product['variant'])->first();
                $p->predefinedVariants()->attach(
                    $predfinedVariant->id, ['price' => $product['price']],
                );
            }
        }
        User::create([
            'name' => 'Momen Noor',
            'email' => 'momen.noor@gmail.com',
            'password' => Hash::make('moLA@1324'),
        ]);

    }
}
