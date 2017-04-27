<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Tamu extends Model
{
    protected $table = 'tamu';
    protected $fillable = ['nama', 'jenis_kelamin', 'telepon', 'alamat', 'keperluan'];

    public function getJenisKelaminAttribute($v)
    {
        if ($v == 1) {
            return $v = 'Laki Laki';
        } else {
            return $v = 'Perempuan';
        }
    }

    public function getCreatedAtAttribute($v)
    {
        $date = Carbon::parse($v)->format("D H:i:s");
        return $date;
    }
}
