<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->timestamps();
            $table->mediumtext('description');
            $table->string('image');
            $table->text('contenue');


             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users');

             $table->unsignedBigInteger('categorie_id');
             $table->foreign('categorie_id')->references('id')->on('categories');

            // $table->foreignIdFor(User::class);
            // $table->foreignIdFor(Category::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
