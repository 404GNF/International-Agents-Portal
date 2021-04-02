<?php

namespace Database\Factories;

use App\Models\Brochure;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrochureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brochure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'img_url' => $this->faker->imageUrl()
        ];
    }
}
