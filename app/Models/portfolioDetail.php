<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolioDetail extends Model
{
    use HasFactory;
    protected $table = 'tbl_portfolio_detail_info';
    public $timestamps = false;
}
