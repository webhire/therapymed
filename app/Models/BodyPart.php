<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BodyPart extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;

    public function issue() {
        return $this->hasMany(Issue::class);
    }
}

