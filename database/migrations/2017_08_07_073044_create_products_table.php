<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('thumbs');
            $table->string('description');
            $table->string('productType');
            $table->string('manager');
            $table->string('profit');
            $table->string('interest');
            $table->string('scale');
            $table->string('origin');
            $table->string('deadline');
            $table->string('fundraise');
            $table->string('overhead');
            $table->string('trustee');
            $table->string('field');
            $table->string('status');
            $table->string('introduce');
            $table->string('used');
            $table->string('refund');
            $table->string('risk');
            $table->integer('order');
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
        Schema::dropIfExists('porducts');
    }
}
