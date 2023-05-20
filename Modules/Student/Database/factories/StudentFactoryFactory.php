<?php

namespace Modules\Student\Database\factories;

use Modules\Student\Entities\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique()->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->unique()->phoneNumber(),
            'age' =>mt_rand(18, 25),
            'course' => $this->faker->randomElement([
                Student::COURSE_TYPE_REGULAR,
                Student::COURSE_TYPE_LIBRARY,
                Student::COURSE_TYPE_OFFER
            ]),
            'status'=>Student::ACTIVE,


        ];
    }
}
