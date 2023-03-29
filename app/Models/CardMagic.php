<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardMagic extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'number',
        'name',
        'property_id',
        'rarity_id',
        'image_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function property()
    {
        return $this->hasOne(Property::class);
    }

    public function rarity()
    {
        return $this->hasOne(Rarity::class);
    }

    public function image()
    {
        return $this->hasOne(File::class);
    }

}
