<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categories;

class testimonial extends Model
{
    use HasFactory;
    protected $table = 'tbl_testimonial_info';

    public static function addTestimonial(array $data){
        $c = new testimonial;
        $c->category_id = $data['category'];
        $c->client_name = $data['client_name'];
        $c->client_tagline = $data['client_tagline'];
        $c->testimonial = $data['testimonial'];
        $c->save();

        return $c->id;
    }

    public static function updateTestimonial($id,$data){
        $c = testimonial::find($id);
        $c->category_id = $data['category'];
        $c->client_name = $data['client_name'];
        $c->client_tagline = $data['client_tagline'];
        $c->testimonial = $data['testimonial'];
        $c->save();

        return $c->id;
    }


    public function category(){
        return $this->belongsTo(categories::class, 'category_id');
    }
}
