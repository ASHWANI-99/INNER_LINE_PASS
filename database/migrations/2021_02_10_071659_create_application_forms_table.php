<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('Application_No')->nullable();
            $table->String('Pass_No')->nullable();
            $table->Date('Application_date')->nullable();
            $table->String('Applicant_Name')->nullable();
            $table->String('Appellation')->nullable();
            $table->String('Suffix')->nullable();
            $table->integer('EPIC_UID_No')->nullable();
            $table->Date('DOB')->nullable();
            $table->String('gender')->nullable();
            $table->integer('Age')->nullable();
            $table->String('Religion')->nullable();
            $table->String('Occupation')->nullable();
            $table->String('Education')->nullable();
            $table->String('IdentificationMark')->nullable();
            $table->String('Email')->nullable();
            $table->integer('Contact_No')->nullable();
            $table->String('Fathers_Name')->nullable();
            $table->String('Appellation_F')->nullable();
            $table->String('Suffix_F')->nullable();
            $table->String('Present_Address_Hno')->nullable();
            $table->String('Present_Address_Sub_locality1')->nullable();
            $table->String('Present_Address_Sub_locality2')->nullable();
            $table->String('Present_Address_Location')->nullable();
            $table->String('Present_Address_Sub_District')->nullable();
            $table->String('Present_Address_District')->nullable();
            $table->String('Present_Address_State')->nullable();
            $table->integer('Present_Address_pin_code')->nullable();
            $table->String('present_Address_Country')->nullable();
            $table->String('Present_Address_Police_Station')->nullable();
            $table->String('Present_Address_Post_office')->nullable();
            $table->String('Permanent_Address_Hno')->nullable();
            $table->String('Permanent_Address_Sub_locality1')->nullable();
            $table->String('Permanent_Address_Sub_locality2')->nullable();
            $table->String('Permanent_Address_Location')->nullable();
            $table->String('Permanent_Address_Sub_District')->nullable();
            $table->String('Permanent_Address_District')->nullable();
            $table->String('Permanent_Address_State')->nullable();
            $table->integer('Permanent_Address_pin_code')->nullable();
            $table->String('Permanent_Address_Country')->nullable();
            $table->String('Permanent_Address_Police_Station')->nullable();
            $table->String('Permanent_Address_Post_office')->nullable();
            $table->String('E_Roll_SlNo')->nullable();
            $table->String('Part_No')->nullable();
            $table->String('Constituency')->nullable();
            $table->String('Sponsor_Name')->nullable();
            $table->String('Sponsors_Father_name')->nullable();
            $table->String('Sponsors_EPIC_UID_No')->nullable();
            $table->String('No_of_Non_Mizos_Presently_Sponsored')->nullable();
            $table->String('Provisional_Pass_No')->nullable();
            $table->String('sponsor_address_Hno')->nullable();
            $table->String('sponsor_address_Sub_locality1')->nullable();
            $table->String('sponsor_address_Sub_locality2')->nullable();
            $table->String('sponsor_address_Location')->nullable();
            $table->String('sponsor_address_Sub_District')->nullable();
            $table->String('sponsor_address_District')->nullable();
            $table->String('sponsor_address_State')->nullable();
            $table->String('sponsor_address_pin_code')->nullable();
            $table->String('sponsor_address_Police_Station')->nullable();
            $table->String('sponsor_address_Post_office');
            $table->String('VC')->nullable();
            $table->String('H_No')->nullable();
            $table->String('Purpose_of_stay')->nullable();
            $table->String('Need_for_labour')->nullable();
            $table->String('Regd_No')->nullable();
            $table->String('LSC_No')->nullable();
            $table->String('Skilled_SemiSkilled_Unskilled')->nullable();
            $table->String('Validaty_Period')->nullable();
            $table->String('doc1')->nullable();
            $table->String('doc2')->nullable();
            $table->String('Remark')->nullable();
            $table->String('Reason_For_Extension')->nullable();
            $table->String('A')->nullable();
            $table->String('B')->nullable();
            $table->String('UPDATION_FROM_CSC')->nullable();
            $table->String('Remarks_from_forwarder')->nullable();
            $table->String('Remarks_from_adc')->nullable();
            $table->String('Certificate')->nullable();
            $table->String('Acknowledgement')->nullable();
            $table->Date('Due_date_for_decision_of_application_')->nullable();
            $table->Date('Target_date')->nullable();
            $table->String('Comments_by_the_forwarder')->nullable();

            $table->integer('Note_sheet_file_number')->nullable();
            $table->integer('Note_sheet')->nullable();
            $table->Date('Due_date_of_decision_on_the_application_o')->nullable();
            $table->Date('Target_date_o')->nullable();
            $table->String('Remarks_by_approving_authority')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_forms');
    }
}
