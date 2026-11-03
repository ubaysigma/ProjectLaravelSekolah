<?php

namespace App\Models;

use Database\Factories\TeachersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    /** @use HasFactory<TeachersFactory> */
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'niy',
        'mapel',
        'start-date',
        'start_date',
        'subject',
    ];
    public function subjects ()
    {
        return $this -> belongsTo(Subjects::class,'mapel');
    }

}
