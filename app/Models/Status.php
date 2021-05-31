<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'status_id', 'id');
    }

    public static function table()
    {
        return (new self())->getTable();
    }
}
