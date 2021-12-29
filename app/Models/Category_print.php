<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_print extends Model
{
    use HasFactory;

    public function children()
    {
        return $this->hasMany(Category_print::class, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Category_print::class, 'parent_id');
    }
    public function imageCategoryPrints(){
        return $this->hasMany(ImageCategoryPrint::class,'category_print_id');
    }
}
