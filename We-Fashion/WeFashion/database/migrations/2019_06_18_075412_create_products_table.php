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
            $table->BigIncrements('id_product');
            $table->string('name',100);
            $table->text('description');
            $table->decimal('price',9,2);
            $table->enum('size',['XS','S','M','L','XL']);
            $table->string('url_image')->nullable();
            $table->boolean('is_visible');
            $table->enum('status',['en solde', 'standard']);
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(Blueprint $table)
    {
        $table->dropforeign('products_category_id_foreign');
        Schema::dropIfExists('products');
    }
}
