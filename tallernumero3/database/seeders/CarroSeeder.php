<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\carro;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carro= new Carro();
        $carro->marca = 'Mazda';
        $carro->modelo='323';
        $carro->anio='2003';
        $carro->kilometraje="16989";
        $carro->matricula="Cali";
        $carro->placa="786HJK";
        $carro->precio="22,500.00";
        $carro->foto='mazda.jpg';
        $carro->timestamps();
    }
}
