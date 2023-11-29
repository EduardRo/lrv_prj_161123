<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    private $carModels = ['BMW', 'Mercedes', 'Toyota', 'Renault', 'Ford', 'Dacia', 'Audi'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->randomElement($this->carModels),
            'price'=>fake()->numberBetween(10000,120000),



        ];
    }

    public function 
}
/*
 $table->string('brand');
            $table->string('model');
            $table->enum('fuel', ['petrol', 'diesel', 'electric', 'hybrid']);
            $table->decimal('price', 6, 2);