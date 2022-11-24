<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class post
{
    private static $private_siswa = [
            "title" => "Profile",
            "name" => "Wildan Taufik",
            "nisn" => "211402102",
            "role" => "Murid",
            "kelas" => "V",
            "contact" => "081234567891",
            "email" => "Wildan@gmail.com",
            "asal" => "Medan",
            "created" => "May 2022",
            "hobby" => "Basketball",
            "lahir" => "01-06-2003"
    ];

    public static function all()
    {
        return self::$private_siswa;
    }
}
