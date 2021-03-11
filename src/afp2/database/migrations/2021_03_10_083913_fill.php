<?php


use App\Models\Address;
use App\Models\User;
use App\Models\Product;
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
            'note' => 'Ide a lábad be ne tedd!'
        ],
        [
            'country' => 'Kambodzsa', 
            'post_code' => '123548', 
            'city' => 'Kőbánya',
            'street' => 'Tarnazsadányi út',
            'house' => '420',
            'note' => 'Ide se tedd be a lábad be ne tedd!'
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
            'price' => 965, 
            'category' => 'Dairy products',
        ],
        [
            'name' => 'Hot Lángoltkolbász', 
            'brand' => 'Pick', 
            'in_stock' => 28,
            'img' => 'http://kolbasz.de/wp-content/uploads/2017/05/tot_csipos_kolbasz.jpg',
            'description' => 'A kolbászok sajtja', 
            's_description' => 'A kolbik kolbija', 
            'price' => 1254, 
            'category' => 'Animal Products',
        ],
        [
            'name' => 'Valk 3 rubik cube', 
            'brand' => 'Valk', 
            'in_stock' => 420,
            'img' => 'https://cdn.shopify.com/s/files/1/0646/0891/products/VALK3_4_1024x.png?v=1590544455',
            'description' => 'A kockák sajtja', 
            's_description' => 'A kockák kolbija', 
            'price' => 3588, 
            'category' => 'Games',
        ],
        [
            'name' => 'Remote control', 
            'brand' => 'Philips', 
            'in_stock' => 32,
            'img' => 'img/product/remote_c.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Brand new remote control for Philips TV-s. No programming required. Silicone rubber button. 30 Days Money Back Guarantee.1 Year Full Warranty', 
            'price' => 1254, 
            'category' => 'Tv accessory',
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
