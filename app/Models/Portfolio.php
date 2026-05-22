<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'portfolio_category_id',
        'title',
        'description',
        'image',
        'priority',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class,'portfolio_category_id');
    }
}
