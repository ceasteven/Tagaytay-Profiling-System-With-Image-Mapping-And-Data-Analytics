<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('region', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('zone', 100)->nullable();
            $table->string('barangay', 100)->nullable();
            $table->string('purok', 100)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('housenum', 100)->nullable();
            $table->string('unitnum', 100)->nullable();
            $table->string('headname', 100)->nullable();
            $table->string('respondentname')->nullable();
            $table->date('startdate')->nullable();
            $table->time('timestart')->nullable();
            $table->string('enumname', 100)->nullable();
         
            $table->string('housecontrolnum')->nullable();
            $table->string('housetype', 100)->nullable();
            $table->string('bedroomnum', 100)->nullable();
            $table->string('storeysnum', 100)->nullable();
            $table->string('rooftype', 100)->nullable();
            $table->string('walltype')->nullable();
            $table->string('floortype')->nullable();
            $table->string('nucfam')->nullable();
            $table->string('housemembernum')->nullable();
            $table->string('householdhead', 100)->nullable();
            $table->string('householdmembername', 100)->nullable();
            $table->string('reltohead', 100)->nullable();
            $table->string('nucfambelong', 100)->nullable();
            $table->string('gender',100)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('age')->nullable();
            $table->string('birthregistered', 100)->nullable();
            $table->string('civilstatus', 100)->nullable();
            $table->string('ethnicity', 100)->nullable();
            $table->string('religiousaffiliation', 100)->nullable();
            $table->string('ofw', 100)->nullable();
            $table->string('ofwcountry', 100)->nullable();
            $table->string('residing', 100)->nullable();
            $table->string('residingo')->nullable();
            $table->string('attendschool', 100)->nullable();
            $table->string('yearlevel', 100)->nullable();
            $table->string('schooltype', 100)->nullable();
            $table->string('notattending', 100)->nullable();
            $table->string('educcompleted', 100)->nullable();
            $table->string('shsstrand', 100)->nullable();
            $table->string('collegecourse', 100)->nullable();
            $table->string('training', 100)->nullable();
            $table->string('pasttraining', 100)->nullable();
            $table->string('trainnum')->nullable();
            $table->string('trainprogram', 100)->nullable();
            $table->string('literate', 100)->nullable();
            $table->string('voter', 100)->nullable();
            $table->string('votedlast', 100)->nullable();
            $table->string('job', 100)->nullable();
            $table->string('nwork', 100)->nullable();
            $table->string('jobnum')->nullable();
            $table->string('occup', 100)->nullable();
            $table->string('occupcode', 100)->nullable();
            $table->string('industry', 100)->nullable();
            $table->string('industrycode', 100)->nullable();
            $table->string('employ')->nullable();
            $table->string('employhrs')->nullable();
            $table->string('employthrs')->nullable();
            $table->string('addhrsworkpast', 100)->nullable();
            $table->string('addextrawork', 100)->nullable();
            $table->string('classworker')->nullable();
            $table->string('fjobpast', 100)->nullable();
            $table->string('findwork', 100)->nullable();
            $table->string('rfindwork', 100)->nullable();
            $table->string('findworknum')->nullable();
            $table->string('rfnotwork', 100)->nullable();
            $table->string('lastlookjob', 100)->nullable();
            $table->string('pastwillingwork', 100)->nullable();
            $table->string('willingtotakeupwork', 100)->nullable();
            $table->string('cashsalary')->nullable();
            $table->string('kindsalary')->nullable();
            $table->string('sssmember')->nullable();
            $table->string('gsismember')->nullable();
            $table->string('philhealthmember')->nullable();
            $table->string('membertype', 100)->nullable();
            $table->string('philhealthdependent', 100)->nullable();
            $table->string('pregnant', 100)->nullable();
            $table->string('soloparent', 100)->nullable();
            $table->string('soloparentid', 100)->nullable();
            $table->string('disability', 100)->nullable();
            $table->string('disabilitytype', 100)->nullable();
            $table->string('pwdid', 100)->nullable();
            $table->string('seniorcitizenid', 100)->nullable();
            $table->string('crime', 100)->nullable();
            $table->string('crimetype', 100)->nullable();
            $table->string('crimeloc', 100)->nullable();
            $table->string('bloodtype', 100)->nullable();
            $table->string('rhtype')->nullable();
            $table->string('nutritionstatus', 100)->nullable();
            $table->date('datebns')->nullable();
            $table->string('treatment', 100)->nullable();
            $table->string('treatmentloc', 100)->nullable();
            $table->string('enddate', 100)->nullable();
            $table->time('endtime')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
};
