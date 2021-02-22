<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
	protected $table = "materi";
    protected $fillable = [
    	'id',
    	'nama',
    	'video',
    	'foto',
    	'isi',
    	'kategori',
    	'sertifikat',
    ];
    
}
