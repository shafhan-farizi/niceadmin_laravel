<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $guarded = ['id'];

    // mendefinisikan field yang boleh diisi
    // protected $fillable = ['name', 'nim', 'major', 'class'];

    // hasOne : tabel saat ini meminjamkan id
    // BelongsTo : tabel saat ini meminjam id dari tabel lain

    public function course(): BelongsTo {
        return $this->belongsTo(Course::class);
    }
}
