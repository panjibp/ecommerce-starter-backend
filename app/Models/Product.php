<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'type', 'description', 'price', 'quantity'
    ];

    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id');
    }

    public function getPhotoAttribute($value)
    {
        //untuk pakai fungsi ini, storage di luar harus di-link ke storage di public; php artisan storage:link
        return url('storage/' . $value);
    }
}
