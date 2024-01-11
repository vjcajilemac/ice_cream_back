<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class IceCreamModel extends Model
{
    use HasFactory;
    protected $table ='icecreams';

    protected $fillable = [
        'id',
        'name',
        'price',
        'flavours_max',
        'description',
        'created_at',
        'updated_at',
    ];
    public function icecreams_flavours(): HasMany
    {
        return $this->hasMany(IceCreamFlavourModel::class);
    }
}
