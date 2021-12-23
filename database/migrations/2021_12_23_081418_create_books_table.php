<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->float('regular_price');
            $table->float('sale_price');
            $table->text('description')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('author_name')->nullable();
            $table->string('featured_img');
            $table->string('category_id');
            $table->text('tags')->nullable(); ;
            $table->string('related_product_id')->nullable();
            $table->text('flash_title')->nullable();
            $table->tinyInteger('status')->default(1)->comment('Active=1, Inactive=0');
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
        Schema::dropIfExists('books');
    }
}
