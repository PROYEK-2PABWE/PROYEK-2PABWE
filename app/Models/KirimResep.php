<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KirimResep extends Model
{
    use HasFactory;
    protected $table = 'kirim_resep';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
