<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalcheckup', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('merokok');
            $table->integer('alkohol');
            $table->integer('olahraga');
            $table->string('beratbadan');
            $table->string('tinggibadan');
            $table->string('tekanandarah');
            $table->string('hemoglobin');
            $table->string('leukosit_a');
            $table->string('hemotocrit');
            $table->string('trombosit');
            $table->string('lajuendapdarah');
            $table->enum('virushepatitishbsag',['Positif', 'Negatif']);
            $table->string('guladarahsewaktu');
            $table->string('warna');
            $table->string('ph');
            $table->string('beratjenis');
            $table->enum('lain_lain', ['Positif', 'Negatif']);
            $table->string('epitelcell');
            $table->string('leukosit_b');
            $table->string('eritrosit');
            $table->enum('bakteri',['Positif', 'Negatif']);
            $table->enum('keterangan',['Normal', 'Haid', 'Hbs Positif', 'Banyak Minum']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicalcheckup');
    }
}
