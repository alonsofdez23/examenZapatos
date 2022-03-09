<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carritos';

    /**
     * Get the user that owns the Carrito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the zapato that owns the Carrito
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zapato(): BelongsTo
    {
        return $this->belongsTo(Zapato::class);
    }
}
