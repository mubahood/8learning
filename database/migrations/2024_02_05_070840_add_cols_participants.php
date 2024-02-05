<?php

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participants', function (Blueprint $table) {
            $table->foreignIdFor(User::class, 'user_id')->nullable();
            $table->foreignIdFor(Course::class, 'course_id')->nullable();
            $table->string('activation_status')->nullable()->default('Inactive');
            $table->string('payment_status')->nullable()->default('Not Paid');
            $table->string('payment_method')->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('payment_currency')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participants', function (Blueprint $table) {
            //
        });
    }
}
