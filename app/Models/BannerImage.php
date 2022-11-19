<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerImage extends Model
{
    use HasFactory;

    protected $table = "banner_images";

    protected $fillable = [
        'hero_id',
        'image',
        'is_deleted'
    ];

    public function HeroBanner(){
        return $this->belongsTo(HeroBanner::class, 'hero_id');
    }
}
