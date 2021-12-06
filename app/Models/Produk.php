<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    
    function image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->gambarProduk)))
            return asset('images/post/' . $this->gambarProduk);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->gambarProduk)))
            return unlink(public_path('images/post/' . $this->gambarProduk));
    }
}
