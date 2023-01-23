<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NvrCctv_m extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nvr_cctv';

    protected $fillable = ['id, merk_nvr, video_ch, hardisk, penggunaan, tahun'];
}
