<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalIdFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_id_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('name');
            $table->string('home_address');
            $table->integer('personal_contact_no');
            $table->string('height')->default('0 ft');
            $table->string('weight')->default('0 kg');
            $table->string('blood_type');
            $table->string('religion');
            $table->string('birth_place');
            $table->string('birth_date');
            $table->string('contact_person');
            $table->integer('contact_no');
            $table->integer('GSIS/SSS')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('pagibig')->nullable();
            $table->integer('tin_no')->nullable();
            $table->string('club_affiliation');
            $table->string('club_region');
            $table->string('club_president_name');
            $table->integer('member_control_number');
            $table->text('president_signature');
            $table->text('2x2_picture');
            $table->text('member_signature');
            $table->string('endorsed_by');
            $table->string('approved_by');
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
        Schema::dropIfExists('national_id_forms');
    }
}
