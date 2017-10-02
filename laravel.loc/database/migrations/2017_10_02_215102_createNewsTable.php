<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->date('publ_date')->nullable();
            $table->unsignedInteger('author_id');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
        });

        DB::table('news')->insert([
            ['title' => 'Чудеса да и только', 'content' => 'С полигона в Ленинградской области угнали танк', 'author_id' => 2],
            ['title' => 'Наглость второе счастье!', 'content' => 'Студент из мордовии получил стипендию 2 раза', 'author_id' => 1],
            ['title' => 'Вот это поворот!', 'content' => 'Китайцы сдвинули чертово колесо', 'author_id' => 4],
            ['title' => 'Накатали на 2 года', 'content' => 'Подростки решили покататься без спроса', 'author_id' => 3],
            ['title' => 'Достойный отпор', 'content' => 'Пенсионер в Угличе отбил атаку гопников', 'author_id' => 2],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
