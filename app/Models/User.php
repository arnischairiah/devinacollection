<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory,Notifiable;
    
    // LIMIT WHAT COLUMNS CAN BE BULK FILLED
    // protected $fillable = ['name', 'username', 'email', 'password'];

    // LIMIT WHAT COLUMNS CANNOT BE BULK FILLED
    protected $fillable = [
        'username',
        'email',
        'password',
        'level',
        'NISN',
        'kelas',
        'hobby',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'nohp',
    ];


    //fungsi untuk search early
    // public function scopeFilter($query, array $filters){
    //     if(isset($filters['search']) ? $filters['search'] : false ){//jika benar lakukan dibawah, jika salah skip langkah ini
    //         return $query->where('username','like','%'.$filters['search'].'%')
    //              ->OrWhere('NISN','like','%'.$filters['search'].'%');
    //     }



    // }
    //end search

}