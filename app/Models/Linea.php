<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Linea extends Model
{
    use HasFactory;

    protected $table = 'lineas';

    protected $fillable = [
        'factura_id',
        'zapato_id',
        'cantidad',
    ];

    /**
     * Get the zapato that owns the Linea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zapato(): BelongsTo
    {
        return $this->belongsTo(Zapato::class);
    }

    /**
     * Get the factura that owns the Linea
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function factura(): BelongsTo
    {
        return $this->belongsTo(Factura::class);
    }
}
