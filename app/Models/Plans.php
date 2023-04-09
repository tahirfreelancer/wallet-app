<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;
    protected $table = 'plans';
    protected $fillable = ['name', 'amount', 'gram', 'estimated_profit', 'daily_perecntage', 'bonus', 'community_bonus', 'created_at','updated_at'];
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
