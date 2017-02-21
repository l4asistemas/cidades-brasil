<?php echo '<?php' ?>

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CidadesBrasilSetupTables extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        DB::beginTransaction();

        Schema::create('{{ $estadosTable  }}', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uf');
            $table->string('nome');
            $table->integer('codigo_uf_ibge');
            $table->timestamps();
        });

        Schema::create('{{ $cidadesTable  }}', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_cidade');
            $table->integer('codigo_uf_ibge');
            $table->string('nome');
            $table->timestamps();
        });

        DB::commit();
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('{{ $cidadesTable  }}');
        Schema::drop('{{ $estadosTable  }}');
    }
}