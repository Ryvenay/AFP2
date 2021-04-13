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
            'description' => 'Comfortable handle, easy to use.Long range, stable performance.This is a special replacement remote control, it covers all the functions of the original remote control.This TV remote control can compatible with most of its LCD, LED smart TVs under the brand for Philips.', 
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
            'description' => 'Zones of LEDs lit or dimmed independently for realistic brightness and shadow detail. Take pictures closer to 8K with 8K X-Reality™ PRO. Sound in harmony with picture for an immersive experience.', 
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
            'description' => 'It offers more options of ports, storage and connectivity than any other Latitude, while maintaining the promise of the world’s most secure and manageable laptop with outstanding reliability.', 
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
            'description' => 'Print speed letter: Up to 23 ppm (black). 150-sheet input tray, Wi-Fi Direct. Uses toner with JetIntelligence. Helps save energy with HP Auto-On/Auto-Off Technology. Easily manage tasks directly at the printer. The 2-line LCD display is simple to read and operate.', 
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
            'description' => 'This Network Interface Card from Intel is ideal for connecting your server to your network. The Gigabit Dual Port Server Adapter proven to be reliable and standards-based solutions. This product has been tested and validated on several systems.', 
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
            'description' => 'You will find a great choice of Samsung Server Memory modules that are compatible with a wide variety of branded servers. Contact us now to discuss your Samsung Server Memory and RAM requirements.', 
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
            'description' => 'It is powered by Android TV offer fluent, fast navigation through menus and app galleries. New Philips Shelf with content promotion and personalized recommendations helps you to find your way around a rapidly expanding repertoire of apps, services and content.', 
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
            'description' => 'Galaxy S20 makes every day epic with cinematic 8K video and our fastest processor yet—all housed in a striking new design. It’s a multitasking computer suite. It’s the Powerphone that forever changes how you work and play.', 
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
            'description' => 'Its large 27 inch screen gives you plenty of space for multitasking, and its wide viewing angles are great for when you need to share your screen with a co-worker or friend. It also has good reflection handling and is bright enough to combat glare, so you shouldnt have any visibility issues in well-lit rooms. Its ergonomics are good, allowing for a range of adjustments so you can set it to your ideal viewing position, and it rotates from landscape to portrait mode. ', 
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
            'description' => 'It has a great screen and speakers, and it’s thin and light enough to hold for extended watching sessions.The 16:10 screen ratio is designed for an immersive viewing experience both in portrait and landscape mode. It comes bundled with a free YouTube Premium subscription so your favorite videos keep playing ad-free and uninterrupted. The dual speakers are designed to provide enriched sound quality while seamlessly merging with the sleek design. There are cameras on the front and back, including a dual-camera setup on the rear with a standard camera and an ultrawide option.', 
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
            'description' => 'Produce top-quality colour documents at speeds your printer was built to achieve. Original HP Toner cartridges with JetIntelligence are specially engineered to match your printer’s high-speed performance, while producing professional-quality prints. Depending on your use, those cartridge capacities should last 3–6 months or more.', 
            's_description' => 'Toner with black colour for HP LaserJet printers.', 
            'price' => 38000, 
            'category' => 'Printer component',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'HDMI 2.0', 
            'brand' => 'Vention', 
            'in_stock' => 50,
            'img' => 'img/product/hdmi.jpg',
            'description' => 'This HDMI to HDMI male cable also support Mirror and Extended mode. In mirror mode, you can enjoy the big screen home theater at home! The ideal solution to enjoy ultra high definition image and video with your family and friends. While in extended mode, your computer interprets the monitors that you are extending as separate devices. You can see different things on each monitor, excellent for save the time and improve work efficiency.', 
            's_description' => 'High quality cable. Black, 2 metres long.', 
            'price' => 1500, 
            'category' => 'Tv Cables',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Hdr-Cx240 EB camera', 
            'brand' => 'Sony', 
            'in_stock' => 14,
            'img' => 'img/product/sony_camera.jpg',
            'description' => 'Its blistering speed and autofocus performance are impressive, and matched only by its phenomenal connectivity, which promises to be a game changer for pro shooters. The big advantage that you get with the Hdr-Cx240 EB is the built-in optical stabilisation.', 
            's_description' => 'It has Sonys latest autofocus system, with fast processing and face/eye/animal detection.', 
            'price' => 230000, 
            'category' => 'Photo, Video',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'X-Bee', 
            'brand' => 'Overmax', 
            'in_stock' => 23,
            'img' => 'img/product/overmax_drone.jpg',
            'description' => 'You can set up the speed of flying. It keeps the height automatically. There is an additional sensor which protect you from losing the drone. If this is too far from you this sensor will make it turn back.', 
            's_description' => 'With a lot of smart functions and GPS. Its camera can rotate in 90 degrees.', 
            'price' => 54500, 
            'category' => 'Drones',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Brew 9 Cup Coffee Maker', 
            'brand' => 'OXO', 
            'in_stock' => 10,
            'img' => 'img/product/oxo_coffee.jpg',
            'description' => 'Microprocessor controlled brew cycle replicates the pour over method to produce 2 to 9 cups of SCA certified perfect Coffee.
            Water is heated and held at the perfect temperature for Coffee (197.6 to 204.8 degrees Fahrenheit).
            Rainmaker shower head evenly disperses water over Coffee grounds for uniform saturation and full flavor extraction.
            Intuitive LED interface features a backlit screen that displays the Coffee maker status and freshness indicator.', 
            's_description' => 'Double walled carafe keeps your brew hot and fresh. Voltage is 120Volt/60Hertz.', 
            'price' => 55000, 
            'category' => 'Kitchen equipments',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Supermicro DQ670W mainboard', 
            'brand' => 'Intel', 
            'in_stock' => 44,
            'img' => 'img/product/intel_mainboard.jpg',
            'description' => 'Number of Memory Slots: 4. Input/Output Ports: Rj45 LAN Port X 1, USB 2.0. Form Factor: MicroATX. Features: On-Board Video Chipset, On-Board Audio. Expansion Slots: PCI. Socket Type: LGA 1155/Socket H2. Compatible CPU Brand: Intel. Memory Type: DDR3 SDRAM.', 
            's_description' => 'At present this is the top mainboard from this company.', 
            'price' => 96000, 
            'category' => 'Computer Component',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'NW-E393 Series Walkman 4GB MP3', 
            'brand' => 'Sony', 
            'in_stock' => 12,
            'img' => 'img/product/sony_walkman.jpg',
            'description' => 'High-Resolution Audio compatible. 128 GB built-in memory. Up to 33 hours playback. ø0.17" Balanced Standard Plug. BLUETOOTH® Receiver function. Digital noise cancelation and Ambient Sound Mode.', 
            's_description' => 'Supported by Android™, Wi-Fi compatible.', 
            'price' => 34500, 
            'category' => 'Mediaplayers',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'CopperTop AA Alkaline Batteries', 
            'brand' => 'Duracell', 
            'in_stock' => 50,
            'img' => 'img/product/duracell_battery.jpg',
            'description' => 'Ion Core™ technology provides these AA cells with an extremely long life span. In fact, these rugged batteries carry a 5-year replacement warranty and can be recharged up to 400 times. An exceptionally high-density core provides a full 2500mAh capacity, while Duracells Duralock Power Preserve™ technology gives the cells the ability to retain a charge for up to a full year in storage. With all these features, theyre still fully compatible with standard NiMH chargers.', 
            's_description' => 'Duracell has been in the portable power industry for 50 years.', 
            'price' => 3600, 
            'category' => 'Batterys',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'AMR 910 Wireless Mouse', 
            'brand' => 'Acer', 
            'in_stock' => 68,
            'img' => 'img/product/acer_mouse.jpg',
            'description' => 'Colour: Black. Weight (Approximate): 58.4 g. Pointing Device Connectivity Technology: Wireless. Pointing Device Wireless Technology: Radio Frequency. Limited Warranty: 2 Years. Movement Detection: Optical. Movement Resolution: 1200 dpi.', 
            's_description' => 'The best accessory for your Acer laptop.Height: 27.7 mm, Width: 56.4 mm, Depth: 109 mm.', 
            'price' => 4200, 
            'category' => 'Computer Component',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'EliteDisplay V27I Monitor', 
            'brand' => 'HP', 
            'in_stock' => 22,
            'img' => 'img/product/hp_monitor.jpg',
            'description' => 'Response Time: 5 ms. Brightness of the screen: 250 cd/m². Ratio of image format: 16: 9. Viewing angle horizontal: 178 °. Vertical Viewing Angle: 178 °. Hub with built-in USB port.Version of the USB hub: USB 3.0 (3.1 Gen 1). VESA mounting.', 
            's_description' => 'HP Elite display V27I. Screen size: 60.5 cm (23.8).', 
            'price' => 65750, 
            'category' => 'Monitor',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'KX-TS 880FXB Telephone', 
            'brand' => 'Panasonic', 
            'in_stock' => 10,
            'img' => 'img/product/panasonic_phone.jpg',
            'description' => 'Original construction. Ideal choose for your office.', 
            's_description' => '3-years guarantee.', 
            'price' => 21300, 
            'category' => 'Cable phones',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => 'Headset Pro', 
            'brand' => 'Apple', 
            'in_stock' => 56,
            'img' => 'img/product/apple_headset.jpg',
            'description' => 'Unlike traditional, circular earbuds, the design of the EarPods is defined by the geometry of the ear. Which makes them more comfortable for more people than any other earbud-style headphones.The speakers inside the EarPods have been engineered to maximize sound output and minimize sound loss, which means you get high-quality audio.The EarPods also include a built-in remote that lets you adjust the volume, control the playback of music and video, and answer or end calls with a pinch of the cord.', 
            's_description' => 'Designed by Apple. Deeper, richer bass tones. Greater protection from sweat and water.', 
            'price' => 8000, 
            'category' => 'Audio Cables',
            'updated_at' => now(),
            'created_at' => now(),
        ],
        [
            'name' => '2050A Deskjet', 
            'brand' => 'HP', 
            'in_stock' => 10,
            'img' => 'img/product/hp_deskjet.jpg',
            'description' => 'Print speed ISO: Up to 8 ppm black, up to 5 color. Built-in WiFi, mobile printing. Instant Ink ready. High yield ink available.', 
            's_description' => 'All in one. Print, scan, copy. 1 year guarantee in case of any problems.', 
            'price' => 129000, 
            'category' => 'Printer',
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
