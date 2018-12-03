<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAluguelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'aluguel';

    /**
     * Run the migrations.
     * @table aluguel
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('clientes_id');
            $table->integer('naves_id');
            $table->dateTime('hora')->nullable();
            $table->string('planeta', 45)->nullable();
            $table->dateTime('finalizado')->nullable();

            $table->index(["naves_id"], 'fk_clientes_has_naves_naves1_idx');

            $table->index(["clientes_id"], 'fk_clientes_has_naves_clientes_idx');


            $table->foreign('clientes_id', 'fk_clientes_has_naves_clientes_idx')
                ->references('id')->on('clientes')
                ->onDelete('no action')
                ->onUpdate('no action');

            });

        Schema::table('aluguel', function($table) {
            $table->foreign('naves_id', 'fk_clientes_has_naves_naves1_idx')
                ->references('id')->on('naves')
                ->onDelete('no action')
                ->onUpdate('no action');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
