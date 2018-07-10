<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('hometeam')->nullable()->change();
            $table->string('codingteam')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('content')->nullable();
            $table->string('nickname')->nullable();  
            $table->string('birthday')->nullable();  
            $table->string('gender')->nullable();  
            $table->string('birthplace')->nullable();  
            $table->string('character1')->nullable();  
            $table->string('character2')->nullable();  
            $table->string('hobby')->nullable();  
            $table->string('charmpoint')->nullable();  
            $table->string('dream')->nullable();  
            $table->string('app')->nullable();  
            $table->string('rank1')->nullable();  
            $table->string('rank2')->nullable();  
            $table->string('rank3')->nullable();
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable(false)->change();
            $table->string('hometeam')->nullable(false)->change();
            $table->string('codingteam')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->dropColumn('content')->nullable(false);
            $table->dropColumn('nickname')->nullable(false);  
            $table->dropColumn('birthday')->nullable(false);  
            $table->dropColumn('gender')->nullable(false);  
            $table->dropColumn('birthplace')->nullable(false);  
            $table->dropColumn('character1')->nullable(false);  
            $table->dropColumn('character2')->nullable(false);  
            $table->dropColumn('hobby')->nullable(false);  
            $table->dropColumn('charmpoint')->nullable(false);  
            $table->dropColumn('dream')->nullable(false);  
            $table->dropColumn('app')->nullable(false);  
            $table->dropColumn('rank1')->nullable(false);  
            $table->dropColumn('rank2')->nullable(false);  
            $table->dropColumn('rank3')->nullable(false);
        });
    }
}
