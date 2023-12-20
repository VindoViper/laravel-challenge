<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('api_token');
            $table->timestamps();
        });

        $defaultUser = new User();
        $defaultUser->name = 'sail';
        $defaultUser->email = 'sail@pete-self.co.uk';
        $defaultUser->api_token = 'cf94bfd0bd5ba98975e8974bd4844319';

        $defaultUser->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
