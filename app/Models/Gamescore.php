<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamescore extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user01_id',
        'user02_id',
        'user03_id',
        'user04_id',
        'gamescore01',
        'gamescore02',
        'gamescore03',
        'gamescore04',
        'groupscore_id'
    ];
    
    public function getBylimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    
}
