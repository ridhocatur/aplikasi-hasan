<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatJar_m extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'perangkat_jaringan';

    protected $fillable = ['id, merk_perangkat, cpu, ram, lan_port, tahun'];
}
