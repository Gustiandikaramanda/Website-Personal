<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $table = 'portfolioitems';
    protected $fillable = [
        'img_path','item_url','title'
    ];
    use HasFactory;
}
