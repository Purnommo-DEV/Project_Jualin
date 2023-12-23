<?php
// Folder Helpers dan File Global.php kita membuat sendiri
// Dengan menggunakan Global.php ini nantinya function dapat di panggil di berbgai folder
use \App\Pesan;
use \App\Sosmed;

function hitung()
{
    return Pesan::where('status',0)->count();
}

function sosmed()
{
    $sosmed = Sosmed::all();
    return $sosmed;
}