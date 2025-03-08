<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producers extends Model
{
    use HasFactory;
    protected $table = 'producers';
    protected $fillable = ['name','birthdate','profil'];

      public function movies()
    {
        return $this->hasMany(Movies::class, 'producer_id');
    }
}
