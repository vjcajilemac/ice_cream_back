<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IceCreamFlavourModel extends Model
{
    use HasFactory;

    protected $table="icecreams_flavours";

    protected $fillable = [
        'id',
        'productId',
        'icecreamId',
        'flavourId',
        'created_at',
        'updated_at',
    ];

    public function ice_creams(): BelongsTo
    {
        return $this->belongsTo(IceCreamModel::class);
    }

    public function flavours(): BelongsTo
    {
        return $this->belongsTo(FlavourModel::class);
    }




}
