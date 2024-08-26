<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationSetting extends Model
{
    use HasFactory;

    const NAME = "name";
    const DOSAGE_UNIT  = "dosage_unit";
    const MEDICATION_ABBR = "medication_abbr";

    protected $fillable = [
        self::NAME,
        self::DOSAGE_UNIT,
        self::MEDICATION_ABBR
    ];
}
