<?php

namespace Database\Factories\API;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Content>
 */
class PageConfigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Text','Image','Video','Donate'];
        $languges = ['english','english'];
        $category = ['Home','News','Media'];
        return [
            'page_type' => $types[rand(0,2)],
            'name' => 'names',
            'img_link' => fake()->imageUrl(),
            'parent' => 'parent',
            'description' => fake()->paragraph(),
            'header_img' => fake()->imageUrl(),
            'header_text' => $category[rand(0,2)],
            'updated_by' => rand(0,1),
            'tenant_id' => rand(0,1),
            'seq_no' => rand(0,1),
            'language' => $languges[rand(0,1)],
            'created_at' => round(microtime(true) * 1000),
            'updated_at' => round(microtime(true) * 1000)
        ];
    }
}
