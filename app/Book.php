<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{  
    
    protected $guarded=[];
    
    public function author(){  
        return $this->belongsTo(Author::class);
    }

    public function getCover(){

        // jika 5 karakter pertama mempunyai value https
        if(substr($this->cover,0,5) == "https"){
            return $this->cover;
        }

        // jika mempunyai value selain https
        if($this->cover){
            return asset('/storage/assets/covers/'.$this->cover);
        }

        // jika kedua kondisi diatas tidak terpenuhi 
        return 'https://via.placeholder.com/150x200.png?text=No+Cover';

    }

    

   
}
