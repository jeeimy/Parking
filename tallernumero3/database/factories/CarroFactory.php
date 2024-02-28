<?php

namespace Database\Factories;

use App\Models\carro;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\carro>
 */
class CarroFactory extends Factory
{
    protected $model= Carro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    
        $marca = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Volkswagen', 'BMW', 'Mercedes-Benz', 'Audi', 'Nissan', 'Hyundai', 'Kia', 'Subaru', 'Mazda', 'Tesla', 'Volvo', 'Porsche', 'Jaguar', 'Land Rover', 'Ferrari', 'Lamborghini', 'Aston Martin', 'Rolls-Royce', 'Bentley', 'Maserati', 'Bugatti'];
        $modelo = ['Corolla', 'Civic', 'Focus', 'Cruze', 'Golf', '3 Series', 'C-Class', 'A4', 'Altima', 'Elantra', 'Optima', 'Outback', 'CX-5', 'Model S', 'XC90', '911', 'F-Type', 'Range Rover', '488 GTB', 'Huracan', 'DB11', 'Phantom', 'Continental GT', 'Quattroporte', 'Chiron'];
        $matricula = ['Bogotá', 'Medellín', 'Cali', 'Cartagena', 'Barranquilla', 'Bucaramanga', 'Cúcuta', 'Santa Marta', 'Villavicencio', 'Pereira', 'Ibagué', 'Pasto', 'Manizales', 'Neiva', 'Popayán', 'Armenia', 'Riohacha', 'Quibdó', 'Montería', 'Sincelejo'];

        return [
            'marca' => $this->faker->randomElement($marca),
            'modelo' => $this->faker->randomElement($modelo), 
            'anio' => $this->faker->numberBetween(1900, 2024),
            'kilometraje' => $this->faker->numberBetween(0, 100000),
            'matricula' => $this->faker->randomElement($matricula),
            'placa' => $this->faker->regexify('[A-Z]{3}-[0-9]{3}'),
            'precio' => $this->faker->numberBetween(10000000, 200000000),
            'foto' => $this->faker->imageUrl(),
        ];
    }
}
