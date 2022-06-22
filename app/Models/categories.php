<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class categories extends Model
{
    use HasFactory;
    protected $table = 'tbl_category_info';
    public $timestamps = false;

    public static function addCategory(array $data){
        $c = new categories;
        $c->name = $data['name'];
        $c->save();

        return $c->id;
    }

    public static function updateCategory($id,$data){
        $c = categories::find($id);
        $c->name = $data;
        $c->save();

        return $c->id;
    }

    public static function updateImage($id, $filename){
        $i = categories::find($id);
        $i->image = $filename;
        $i->save();
    }

}
