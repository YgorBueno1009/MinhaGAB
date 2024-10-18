<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GabFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => User::inRandomOrder()->first()->id,  // Seleciona um ID aleatório da tabela users
            'clinic_id' => User::inRandomOrder()->first()->id,
            'path' => $this->faker->filePath(), // Gera um caminho de arquivo aleatório
            'status' => $this->faker->randomElement(['pendente', 'emitida', 'erro']), // Status aleatório
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
