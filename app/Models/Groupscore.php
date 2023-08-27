<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupscore extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user(string $collumn_name)
    {
        return $this->belongsTo(User::class, $collumn_name);
    }
    
    protected $fillable = [
        'user01_id',
        'user02_id',
        'user03_id',
        'user04_id',
        'sumgamescore01',
        'sumgamescore02',
        'sumgamescore03',
        'sumgamescore04',
    ];
}
