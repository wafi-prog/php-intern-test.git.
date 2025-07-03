<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
protected $table = 'employess';
  protected $fillable = [
    'nomor',
    'nama',
    'jabatan',
    'talahir',
    'photo_upload_path'
    ];

}
