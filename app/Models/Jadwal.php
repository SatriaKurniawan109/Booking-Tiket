<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    
    protected $table = 'jadwal_tayang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal', 'waktu', 'film_id'
    ];

    public function film(){
        return $this->belongsTo(Film::class, 'film_id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
