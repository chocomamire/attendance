<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaktime extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'break_start',
        'break_end'
    ];

    // ユーザー関連付け
    // 1対多

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
