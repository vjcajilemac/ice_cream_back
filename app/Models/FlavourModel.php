<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlavourModel extends Model
{
    use HasFactory;
    protected $table ='flavours';

    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'created_at',
        'updated_at',
    ];

    public function icecreams_flavours(): HasMany
    {
        return $this->hasMany(IceCreamFlavourModel::class);
    }
    
}
