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
        Schema::create('cooking_posts', function (Blueprint $table) {
            // 自動増分する
            $table->bigIncrements('id');
            $table->char('product_name', 30);
            $table->char('cooking_explanation', 30);
            $table->char('image_path', 255);
            $table->timestamp('created_at')->nullable(false);
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cooking_posts');
    }
};
