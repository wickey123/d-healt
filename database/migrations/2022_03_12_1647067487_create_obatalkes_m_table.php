<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatalkesMTable extends Migration
{
    public function up()
    {
        Schema::create('obatalkes_m', function (Blueprint $table) {

		$table->increments('obatalkes_id');
		$table->string('obatalkes_kode',100)->nullable()->default('NULL');
		$table->string('obatalkes_nama',250)->nullable()->default('NULL');
		$table->decimal('stok')->nullable()->default(0);
		$table->text('additional_data')->nullable();
		$table->datetime('created_date')->useCurrent();
		$table->integer('created_by')->useCurrent();
		$table->integer('modified_count')->nullable()->default(NULL);
		$table->datetime('last_modified_date')->nullable()->default(NULL);
		$table->integer('last_modified_by')->nullable()->default(NULL);
		$table->tinyInteger('is_deleted')->default('0');
		$table->tinyInteger('is_active')->default('1');
		$table->datetime('deleted_date')->nullable()->default(NULL);
		$table->integer('deleted_by')->nullable()->default(NULL);
		

        });
    }

    public function down()
    {
        Schema::dropIfExists('obatalkes_m');
    }
}