<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardMonster extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'atk',
        'def',
        'level',
        'number',
        'type_id',
        'description',
        'attribute_id',
        'rarity_id',
        'image_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function attribute()
    {
        return $this->hasOne(Attribute::class);
    }

    public function rarity()
    {
        return $this->hasOne(Rarity::class);
    }

    public function image()
    {
        return $this->hasOne(File::class);
    }

    public function type()
    {
        return $this->hasMany(Type::class);
    }

}
