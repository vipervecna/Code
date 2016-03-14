<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrustedOne extends Model
{
  protected $fillable = [
    'trusted_name', 'trusted_lastname', 'trusted_email', 'trusted_status'
  ];

  protected $table = 'trustedones';
}
