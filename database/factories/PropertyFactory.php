<?php
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => $this->faker->numberBetween(1, 2), // Assuming you have 10 clients in the database
            'street' => $this->faker->streetName,
            'city' => $this->faker->city,
            'postcode' => $this->faker->postcode,
            'country' => $this->faker->country,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Property $property) {
            // Create rooms for the property
            $property->rooms()->createMany(
                Room::factory()->count(rand(0, 5))->make()->toArray()
            );
        });
    }
}
