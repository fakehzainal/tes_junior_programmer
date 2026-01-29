<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    protected $fillable = [
        'kategori_id',
        'status_id',
        'nama_produk',
        'harga',
    ];
}
