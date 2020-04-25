<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['Npm','Nama','Jenjang','Alamat','Jurusan','Email'];
}
