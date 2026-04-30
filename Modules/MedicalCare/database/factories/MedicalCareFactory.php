<?php

namespace Modules\MedicalCare\database\factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\MedicalCare\Models\MedicalCare>
 */
class MedicalCareFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\MedicalCare\Models\MedicalCare::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'type' => $this->faker->randomElement(['Primary Health care', 'Secondary Health care', 'Tertiary Health care']),
            'intro' => $this->faker->paragraph,
            'description' => $this->faker->paragraphs(3, true),
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'meta_keywords' => $this->faker->words(5, true),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}