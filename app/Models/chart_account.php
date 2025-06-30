<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chart_account extends Model
{
    public function accounts()
    {
        return $this->hasMany(chart_account::class,'parent_id');
    }
}
