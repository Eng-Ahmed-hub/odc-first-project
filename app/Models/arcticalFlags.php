<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arcticalFlags extends Model
{
    use HasFactory;
    protected $fillable = ['title','arctical_id'];
    public function arctical()
    {
        return $this->belongsTo('App\Models\arctical', 'arctical_id');
    }
}
