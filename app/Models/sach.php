<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    use HasFactory;
    protected $table = 'sach';
    public $timestamps = false;
    protected $primaryKey = 'MaSach';
}
