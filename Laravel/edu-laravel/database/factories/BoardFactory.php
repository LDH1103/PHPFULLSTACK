<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// 팩토리 : (더미데이터 생성) : database\factories의 각 클래스 파일
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    // 팩토리 생성 : php artisan make:factory BoardFactory --model=Board
    // 팩토리 실행 : php artisan db:seed

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [
            'category' => $this->faker->randomNumber(1) // randomNumber(자리수)
            ,'btitle' => $this->faker->realText(100) // realText(글자수)
            ,'bcontent' => $this->faker->realText(2000)
            ,'created_at' => $date
            ,'updated_at' => $date
            // 이하 DatabaseSeeder에서 작업
        ];
    }
}
