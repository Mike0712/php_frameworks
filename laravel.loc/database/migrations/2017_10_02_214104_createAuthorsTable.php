<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->text('about')->default('');
            $table->timestamp('birth_date')->nullable();
            $table->timestamps();
        });

        DB::table('authors')->insert([
            ['first_name' => 'Глеб', 'last_name' => 'Шаповалов', 'birth_date' => '1980-12-12'],
            ['first_name' => 'Полина', 'last_name' => 'Власова', 'birth_date' => '1986-01-17'],
            ['first_name' => 'Семен', 'last_name' => 'Клочков', 'birth_date' => '1984-09-11'],
            ['first_name' => 'Инесса', 'last_name' => 'Максимова', 'birth_date' => '1979-03-14'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
