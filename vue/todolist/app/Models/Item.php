<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // 타입 캐스트
    // 없으면 boolean이 아닌 0, 1로 넘어옴
    protected $casts = [
        'completed' => 'boolean'
    ];

    // completed_at'를 데이트 설정에 추가
    protected $dates = [
        'completed_at'
    ];

    // API로 JSON을 파싱할 때 데이터 를 timezone에 맞추기 위한 설정
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
