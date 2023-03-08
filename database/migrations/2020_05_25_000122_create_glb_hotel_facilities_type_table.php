<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlbHotelFacilitiesTypeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'glb_hotel_facilities_type';

    /**
     * Run the migrations.
     * @table glb_hotel_facilities_type
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->nullable()->default(null);
            $table->string('facility');
            $table->string('facility_type', 100);
            $table->timestamp('date_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('status', 11)->nullable()->default(null)->comment('\'\'=Pending, 0=Inactive, 1=Active, 2=Blocked');
            $table->tinyInteger('is_edit')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
