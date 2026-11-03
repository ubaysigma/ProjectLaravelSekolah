<?php

namespace App\Models;

use Database\Factories\SubjectsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    /** @use HasFactory<SubjectsFactory> */
    use HasFactory;

    protected $table = 'subjects';
    protected $fillable = [
        'mapel',

    ];

    public function teacher ()
    {
        return $this ->belongsTo(Teachers::class,'mapel');
    }

}
