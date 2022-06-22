<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->text('2x2_picture')->nullable();
            $table->string('name');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('height')->default('0 ft');
            $table->string('weight')->default('0 kg');
            $table->string('citizenship');
            $table->string('civil_status');
            $table->string('religion');
            $table->string('blood_type');
            $table->string('address');
            $table->integer('telephone_no')->nullable();
            $table->integer('cellphone_no');
            $table->string('email');
            $table->string('name_of_office_line_of_business');
            $table->string('title_and_position');
            $table->string('work_address');
            $table->integer('work_tele_no');
            $table->integer('work_fax_no')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_date_of_birth')->nullable();
            $table->integer('spouse_age')->nullable();
            $table->string('child_name')->nullable();
            $table->string('child_date_of_birth')->nullable();
            $table->integer('child_age')->nullable();
            $table->string('elementary')->nullable();
            $table->string('highschool')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('special_skills')->nullable();
            $table->string('elementary_date_graduated')->nullable();
            $table->string('highschool_date_graduated')->nullable();
            $table->string('college_date_graduated')->nullable();
            $table->string('sponsor_name');
            $table->string('sponsor_date');
            $table->text('sponsor_signature');
            $table->text('applicant_signature');
            $table->text('endorsed_by');
            $table->text('concurred_by');
            $table->text('approved_by');
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
        Schema::dropIfExists('members');
    }
}
