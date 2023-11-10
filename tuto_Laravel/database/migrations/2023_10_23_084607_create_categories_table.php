<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        //on veut modifier la table pour avoir une relation du type 1-1 avec catagory_id
        Schema::table('posts', function (Blueprint $table){
            $table->foreignIdFor(Category::class)->nullable()->constrained()->cascadeOnDelete();
        });
        //foreignIdFor() qui permet de nommer automatiquement la clef étrangère
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Category::class);
            //pour revenir en arrière,on supprime la clé si elle existe déjà
        });
    }
    // à  la fin de ces config, on fait php artisan migrate
};
