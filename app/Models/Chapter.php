<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Choice;
use App\Models\Illustration;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapter';

    public function illustration()
    {
        return $this->hasOne(Illustration::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
