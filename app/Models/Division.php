<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function district(){
        return $this->hasMany(District::class);
    }

}
