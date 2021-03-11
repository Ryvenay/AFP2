<?php


use App\Models\Address;
use App\Models\User;
use App\Models\Product;
use App\Models\Cupon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Address::insert([
        [
            'country' => 'Kirgizisztán', 
            'post_code' => '420-420', 
            'city' => 'Baktalórántháza',
            'street' => 'Velő út',
            'house' => '420',
            'note' => 'Ide a lábad be ne tedd!',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'country' => 'Kambodzsa', 
            'post_code' => '123548', 
            'city' => 'Kőbánya',
            'street' => 'Tarnazsadányi út',
            'house' => '420',
            'note' => 'Ide se tedd be a lábad be ne tedd!',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        ]);

        User::insert([
        [
            'username' => 'Tesztelek_69_420', 
            'password' => Hash::make('teszt'), 
            'first_name' => 'Elek',
            'last_name' => 'Teszt',
            'email' => 'tesztelek@teszt.hu',
            'birthdate' => '1969-12-16',
            'regdate' => now(),
            'billing_address' => 1,
            'shipping_address' => 1,
            'level' => '69',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        ]);

        Cupon::insert([
            [
                'cupon_name' => 'blz', 
                'multiplier' => 0.97, 
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);

        Product::insert([
        [
            'name' => 'Cheese', 
            'brand' => 'Cheese kft.', 
            'in_stock' => 23,
            'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftrademagazin.hu%2Fwp-content%2Fuploads%2F2019%2F11%2Fmsajt-end3d-cmyk_opt-1024x768.jpg&f=1&nofb=1',
            'description' => 'A sajtok sajtja', 
            's_description' => 'Trappista Sajt', 
            'price' => 999, 
            'category' => 'Dairy products',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Hot Lángoltkolbász', 
            'brand' => 'Pick', 
            'in_stock' => 28,
            'img' => 'http://kolbasz.de/wp-content/uploads/2017/05/tot_csipos_kolbasz.jpg',
            'description' => 'A kolbászok sajtja', 
            's_description' => 'A kolbik kolbija', 
            'price' => 1299, 
            'category' => 'Animal Products',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Valk 3 rubik cube', 
            'brand' => 'Valk', 
            'in_stock' => 420,
            'img' => 'https://cdn.shopify.com/s/files/1/0646/0891/products/VALK3_4_1024x.png?v=1590544455',
            'description' => 'A kockák sajtja', 
            's_description' => 'A kockák kolbija', 
            'price' => 8999, 
            'category' => 'Games',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Remote control', 
            'brand' => 'Philips', 
            'in_stock' => 32,
            'img' => 'img/product/remote_c.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Brand new remote control for Philips TV-s. No programming required. Silicone rubber button. 30 Days Money Back Guarantee.1 Year Full Warranty', 
            'price' => 4999, 
            'category' => 'Television accessory',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Smart LED TV', 
            'brand' => 'Sony', 
            'in_stock' => 32,
            'img' => 'img/product/sony_TV.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Cognitive Processor XR™ understands how humans see and hear for true immersion.Multi-position stand for versatile TV placement.', 
            'price' => 99999, 
            'category' => 'Television',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Latitude E5450 laptop', 
            'brand' => 'Dell', 
            'in_stock' => 40,
            'img' => 'img/product/dell_laptop.jpg',
            'description' => 'Detailed description', 
            's_description' => 'It was designed to keep end-users productive. This laptop offers more options of ports, storage and connectivity than any other Latitude', 
            'price' => 200000, 
            'category' => 'Laptop',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
