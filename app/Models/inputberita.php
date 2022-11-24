<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;;

class inputberita extends Model
{
    use HasFactory;

    protected $table = 'inputberita';
    protected $fillable = ['judul', 'konten', 'sampul', 'slug', 'aksi', 'created_at', 'updated_at'];
}
