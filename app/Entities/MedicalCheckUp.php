<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class MedicalCheckUp extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merokok','alkohol','olahraga','beratbadan','tinggibadan','tekanandarah','hemoglobin','leukosit_a','hemotocrit','trombosit','lajuendapdarah','virushepatitishbsag','guladarahsewaktu','warna','ph','beratjenis','lain_lain','epitelcell','leukosit_b','eritrosit','bakteri','keterangan'
    ];

    protected $table = 'medicalcheckup';

}
