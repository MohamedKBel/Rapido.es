<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AddCategotyIdToAds extends Migration

{
    /**
     * Run the migrations.
     * 
     * @return void 
     */
    public function up()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->default(1);
            $table->foreing('category_id')->references('id')->on('categories');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropForeing(['caregory_id']);
            $table->dropColumn('caregory_id');
        });
    }
};
