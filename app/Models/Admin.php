<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;
use Illuminate\Database\Schema\softDeletes;

class Admin extends Model
{
    use HasFactory, EloquentSoftDeletes;
}
