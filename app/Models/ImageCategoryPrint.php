<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCategoryPrint extends Model
{
    use HasFactory;
    public $guarded = [];

    public function categoryPrint(){
        return $this->belongsTo(Category_print::class);
    }
}
