<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
