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
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('categories_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('bar_code');
            $table->bigInteger('price');
            $table->integer('stock');
            $table->bigInteger('id_Sales');
            $table->bigInteger('id_voucher');
            $table->string('ruta_image');
            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('categories')->ondelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
