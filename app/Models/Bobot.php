<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{

    use HasFactory;

    protected $table = 'bobot';

    protected $primaryKey = 'id_bobot';

    protected $fillable = [
        'w1',
        'w2',
        'w3',
        'w4',
        'w5',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
