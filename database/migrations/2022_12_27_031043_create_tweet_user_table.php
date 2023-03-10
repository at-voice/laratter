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
        Schema::create('tweet_user', function (Blueprint $table) {
            $table->id();
                // ð½ ããããè¿½å 
            $table->foreignId('tweet_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->unique(['tweet_id', 'user_id']);
                // ð¼ ããã¾ã§è¿½å 
                // foreignId()	å¼æ°ã®ã«ã©ã ãå¤é¨ã­ã¼å¶ç´ã§ãããã¨ãç¤ºãï¼å¤é¨ã­ã¼ãè¨­å®ããï¼
                // ä¸è¨ãã¾ã¨ããã¨ãä¸­éãã¼ãã«ã® user_id ã¯ users ãã¼ãã«ã® id ãåç§ãã¦ãã¦ï¼users ãã¼ãã«ã®ãã¼ã¿ãåé¤ãããã¨ä¸­éãã¼ãã«ã®ãã¼ã¿ãåé¤ããããã¨ãªãï¼
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
        Schema::dropIfExists('tweet_user');
    }
};
