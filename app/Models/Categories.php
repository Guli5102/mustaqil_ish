<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'book_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
