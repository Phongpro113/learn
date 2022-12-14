<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'm_district';
    protected $fillable = ['DistrictId', 'DistrictName'];
    protected $guarded = [];
}
