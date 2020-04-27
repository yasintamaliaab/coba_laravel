<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
   protected $table = 'mahasiswa'; //ngasih tau kalo tabel nya ambil dari mahasiswa, soalnya gak default.
    //kalo mau default dia ambilnya dari table students 
}
