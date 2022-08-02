<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasstation extends Model
{
    use HasFactory;

    protected $table = 'gasstation';
    protected $fillable = ['GasStationId', 'District'];
    protected $guarded = [];

    public function districtRelation() {
        return $this->belongsTo(District::class, 'District', 'DistrictId');
    }

    public function gastypeRelation() {
        return $this->hasManyThrough(
            Gastype::class,
            Gasstationgastype::class,
            'GasStationId', // Foreign key on the environments table...
            'TypeCode', // Foreign key on the deployments table...
            'GasStationId', // Local key on the projects table...
            'GasType' // Local key on the environments table...
        );
    }
}
