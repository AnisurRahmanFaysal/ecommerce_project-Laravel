<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name');
            $table->string(column:'image');
            $table->string(column:'amount');
            $table->string(column:'price');
            $table->boolean(column:'is_active');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
