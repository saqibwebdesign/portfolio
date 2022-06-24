<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;

class portfolio extends Model
{
    use HasFactory;
    protected $table = 'tbl_portfolio_info';

    public static function addPortfolio(array $data){
        $c = new portfolio;
        $c->title = $data['title'];
        $c->category_id = $data['category'];
        $c->description = $data['description'];
        $c->is_featured = !empty($data['is_featured']) ? '1' : '0';
        $c->status = '1';
        $c->save();

        return $c->id;
    }

    public static function updatePortfolio($id, array $data){
        $c = portfolio::find($id);
        $c->title = $data['title'];
        $c->category_id = $data['category'];
        $c->description = $data['description'];
        $c->is_featured = !empty($data['is_featured']) ? '1' : '0';
        $c->save();

        return $c->id;
    }


    public static function updateImage($id, $filename){
        $i = portfolio::find($id);
        $i->image = $filename;
        $i->save();
    }

    public static function updateImageLarge($id, $filename){
        $i = portfolio::find($id);
        $i->large_image = $filename;
        $i->save();
    }

    public function category(){
        return $this->belongsTo(categories::class, 'category_id');
    }
}
