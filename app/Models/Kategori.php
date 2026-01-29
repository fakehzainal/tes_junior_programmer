<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class);
    }
    protected $fillable = [
        'nama_kategori',
    ];
}
