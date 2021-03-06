<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCraigslistListsTable extends Migration {

    public function up() {
        Schema::create('mfwcraigslistscrapers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('citycode');
            $table->string('section');
        });

        Schema::create('mfwcraigslistphrasefilters', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('phrase');
        });
    }

    public function down() {
        Schema::drop('mfwcraigslistscrapers');
        Schema::drop('mfwcraigslistphrasefilters');
    }
}
