<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KycLevels extends Model
{
    use HasFactory;

    protected $table = 'kyc_levels';

    public const DEV = 1;
    public const SUPPORT = 2;

}
