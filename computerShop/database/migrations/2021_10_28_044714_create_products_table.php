<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('pCategory',100);
            $table->string('pType',100);
            $table->string('pName',100);
            $table->string('pId',100)->unique();
            $table->string('pPrice',100);
            $table->string('pQuantity',100);
            $table->string('pPicture',100);
            $table->text('pSpecification');
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
        Schema::dropIfExists('products');
        
    }
}
