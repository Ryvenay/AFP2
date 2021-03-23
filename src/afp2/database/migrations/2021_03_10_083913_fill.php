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
            'name' => 'Remote control', 
            'brand' => 'Philips', 
            'in_stock' => 32,
            'img' => 'img/product/remote_c.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Brand new remote control for Philips TV-s.Silicone rubber button. 30 Days Money Back Guarantee.', 
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
            's_description' => 'Cognitive Processor XR™ understands how humans see and hear for true immersion.', 
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
            's_description' => 'It was designed to keep end-users productive.', 
            'price' => 200000, 
            'category' => 'Computer',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'LaserJet Pro printer', 
            'brand' => 'HP', 
            'in_stock' => 19,
            'img' => 'img/product/hp_printer.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Print, copy, scan, fax, dual band wireless. Simple set-up.', 
            'price' => 250000, 
            'category' => 'Printer',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Network Adapter Card', 
            'brand' => 'Intel', 
            'in_stock' => 28,
            'img' => 'img/product/network_card.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Gigabit Ethernet Adapters (up to 2.5GbE). On-chip QoS and Traffic Management. Flexible Port Partitioning.', 
            'price' => 10000, 
            'category' => 'Computer component',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Server RAM', 
            'brand' => 'Samsung', 
            'in_stock' => 17,
            'img' => 'img/product/samsung_ram.jpg',
            'description' => 'Detailed description', 
            's_description' => '64GB, DDR4, 2666 MHz, 288 pin, 1,2V, 60 g.', 
            'price' => 5000, 
            'category' => 'Computer component',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Smart LED TV', 
            'brand' => 'Philips', 
            'in_stock' => 40,
            'img' => 'img/product/philips_TV.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Intelligent LEDs around the edges of the TV cast on-screen colours onto the walls.', 
            'price' => 120000, 
            'category' => 'Television',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Galaxy S20', 
            'brand' => 'Samsung', 
            'in_stock' => 27,
            'img' => 'img/product/samsung_phone.jpg',
            'description' => 'Detailed description', 
            's_description' => 'You can send back for 14 days if it has any problems.', 
            'price' => 98000, 
            'category' => 'Smart Phone',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'P2719H Professional', 
            'brand' => 'Dell', 
            'in_stock' => 38,
            'img' => 'img/product/dell_monitor.jpg',
            'description' => 'Detailed description', 
            's_description' => 'LCD LED monitor.DisplayPort, HDMI 1.4, VGA, USB.', 
            'price' => 150000, 
            'category' => 'Monitor',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Galaxy Tab A', 
            'brand' => 'Samsung', 
            'in_stock' => 50,
            'img' => 'img/product/samsung_tab.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Samsung Galaxy Tab A is powered by a 1.2GHz quad-core processor. It comes with 2GB of RAM.', 
            'price' => 80000, 
            'category' => 'Tablet',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Toner LaserJet 1018', 
            'brand' => 'HP', 
            'in_stock' => 12,
            'img' => 'img/product/hp_toner.jpg',
            'description' => 'Detailed description', 
            's_description' => 'Toner with black ink for HP LaserJet printers.', 
            'price' => 38000, 
            'category' => 'Printer component',
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
