<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table ='beritas';
    protected $fillable =['judul','kategori_id', 'deskripsi'];

    /**
     * Get the Kategori that owns the Berita
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
