<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = ['id','cover', 'title','producer_id', 'actor_actress', 'synopsis'];

    public function producers()
    {
        return $this->belongsTo(Producers::class, 'producer_id');
    }



}




