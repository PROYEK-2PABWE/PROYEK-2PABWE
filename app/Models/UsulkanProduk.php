<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulkanProduk extends Model
{
    use HasFactory;
    protected $table = 'usulkan_produk';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
