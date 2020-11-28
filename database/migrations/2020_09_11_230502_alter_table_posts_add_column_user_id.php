<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePostsAddColumnUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // criando o campo que será a chave estrangeira da tabela
            $table->unsignedBigInteger('user_id')->after('id');
            // definindo campo como chave estrangeira para fazer a relação entre as tabelas.
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // removendo a chave estrangeira (tabela_nomedacoluna_foreign).
            $table->dropForeign('posts_user_id_foreign');
            // removendo a coluna user_id.
            $table->dropColumn('user_id');
        });
    }
}
