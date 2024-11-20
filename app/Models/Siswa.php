<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // Import HasFactory

class Siswa extends Model
{
    use HasFactory; // Use the HasFactory trait

    protected $fillable = [
        'id_user',
        'image',
        'nis',
        'tingkatan',
        'jurusan',
        'kelas',
        'hp',
        'status',
    ];
}
