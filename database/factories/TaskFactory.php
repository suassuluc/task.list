<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'long_description' => fake()->paragraph(7, true),
            'completed' => fake()->boolean,
        ];
    }
}

//facotories servem para criar dados seeders fakes para uso de testes, exemplo a factorie cria varias tasks fakes para utilizar
//no sistema ,obs: a utilização de um sistema como fillwithdump ja e o suficiente porem bem util para criar usuarios fakes
//utilize o comando <php artisan db:seed> para mandar as seeds para o banco de dados
