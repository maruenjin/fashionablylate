<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // bigint unsigned, PK, NOT NULL
            $table->unsignedBigInteger('category_id'); // FK
            $table->string('first_name'); // NOT NULL
            $table->string('last_name'); // NOT NULL
            $table->tinyInteger('gender'); // 1:男性, 2:女性, 3:その他
            $table->string('email'); // NOT NULL
            $table->string('tel'); // NOT NULL
            $table->string('address'); // NOT NULL
            $table->string('building')->nullable(); // 任意
            $table->text('detail'); // NOT NULL
            $table->timestamps();

            // 外部キー制約
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
