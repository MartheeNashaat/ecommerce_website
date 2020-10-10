<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    protected $table='wishlists';
    
    protected $fillable = [
        'product_id','User_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
     }
     
     public function product(){
        return $this->belongsTo(product::class);
     }
     public function wishlist(){
        return $this->hasMany(wishlist::class);
     }

}
