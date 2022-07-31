<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasstation extends Model
{
    use HasFactory;
    protected $table = 'gasstation';
    protected $guarded = [];

    public function gasstationgastype() {
        return $this->hasMany(Gasstationgastype::class, 'GasStationId', 'GasStationId');
    }
}
