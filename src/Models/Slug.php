<?php

namespace wdd\slug\Models;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    protected $table = 'slugs';

    protected $fillable = ['model', 'slug'];
}
