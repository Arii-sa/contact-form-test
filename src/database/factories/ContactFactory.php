<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        'first_name'=> $this->faker->name,
        'last_name' => $this->faker->name,
        'gender' => $this->faker->boolean,
        'email' => $this->faker->safeEmail,
        'tel' => $this->faker->randomNumber,
        'address' => $this->faker->sentence,
        'building' => $this->faker->sentence,
        'content' => $this->faker->sentence,
        'detail' => $this->faker->text(120)
        ];
    }
}
