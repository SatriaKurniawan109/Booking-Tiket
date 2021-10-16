<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul', 'category_id', 'jadwal_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}
