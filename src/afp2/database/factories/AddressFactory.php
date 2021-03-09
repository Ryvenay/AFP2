<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'id' => null,
            'country' => $this->faker->country,
            'post_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'street' => $this->faker->streetName,
            'house' => $this->faker->buildingNumber,
            'note' => $this->faker->phoneNumber,
        ];
    }
}
