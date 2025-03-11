<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories;
use Illuminate\Database\Eloquent\Model;

     class welcome extends Models{
        use HasFactory;

        public function messageWelcome(){
            return "Hello Dsi2";
        }

    }
