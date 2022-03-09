<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zapato extends Model
{
    use HasFactory;

    protected $table = 'zapatos';

    /**
     * Get all of the carritos for the Zapato
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos(): HasMany
    {
        return $this->hasMany(Carrito::class);
    }

    /**
     * Get all of the lineas for the Zapato
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lineas(): HasMany
    {
        return $this->hasMany(Linea::class);
    }
}
