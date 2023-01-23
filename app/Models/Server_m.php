<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server_m extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'data_server';

    protected $fillable = ['id, merk_server, jenis, hardisk, ram, processor, os, tahun, penggunaan'];
}
