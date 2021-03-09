<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $temp = Address::factory()->count(1)->create()->pluck('id');

        return [
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
            'first_name' => $this->faker->firstName($gender = 'male'|'female'),
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'birthdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'billing_address' => $temp[0],
            'shipping_address' => $temp[0],
            'regdate' => null,
            'level' => 1,
        
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
