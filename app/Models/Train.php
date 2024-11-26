<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'trains';
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'peron',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
