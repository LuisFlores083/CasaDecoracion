<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Decoracione>
 */
class DecoracioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'nombre'=>$this->faker->name(),
            'descripcion'=>$this->faker->paragraph(),
            'precio' => $this->faker->randomFloat(2, 0, 300),
            'categoria'=>$this->faker->randomElement(['Póster','Lámina fotográfica','Lienzo','Lámina enmarcada','Tela decorativa','Lámina artística','Lámina metálica','Lámina montada']),
            'imagen'=> 'lighten\icon\productos\Cdefault.png', 
            'precio' => $this->faker->randomInt(2, 0, 150)
        ];
    }
}
