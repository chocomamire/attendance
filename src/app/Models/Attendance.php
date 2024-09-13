<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'work_start',
        'work_end'
    ];

    // ユーザー関連付け
    // 1対多

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
