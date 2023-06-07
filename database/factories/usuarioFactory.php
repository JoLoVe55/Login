<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class usuarioFactory extends Factory
{
 /** 
*
*  @var string
*/

    protected $model = usuario::Class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nombre'=>$this->faker->name('En_US'),
          'username'=>$this->faker->unique()->userName(),
          'password'=>$this->faker->numberBetween(8),
          'email'=>$this->faker->unique()->safeEmail
            //
        ];
    }
}
