<?php

namespace App\Models;

use App\Models\LeavesType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leaves extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function leaveType()
    {
        return $this->belongsTo(LeavesType::class, 'leave_type_name');
    }

}
