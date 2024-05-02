<?php
//
//namespace Database\Factories;
//
//use Illuminate\Database\Eloquent\Factories\Factory;
//
///**
// * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
// */
//class ClientFactory extends Factory
//{
//    /**
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
//    protected $model = Client::class;
//
//    /**
//     * Define the model's default state.
//     *
//     * @return array
//     */
//    public function definition()
//    {
//        return [
//            'name' => $this->faker->name,
//            'email' => $this->faker->unique()->safeEmail,
//            'phone' => $this->faker->phoneNumber,
//        ];
//    }
//}


namespace Database\Factories;

use App\Models\Client;

// Import the Client model
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
        ];
    }

}
