<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Sederhana',
            'type'=>'text',
        ]);

        Setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Sleman, Yogyakarta Indonesia',
            'type'=>'text',
        ]);

        Setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://linkedin.com/in/mhmdshiddiq',
            'type'=>'text',
        ]);

        Setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://linkedin.com/in/mhmdshiddiq',
            'type'=>'text',
        ]);

        Setting::create([
            'key'=>'_twitter',
            'label'=>'Twitter',
            'value'=>'https://linkedin.com/in/mhmdshiddiq',
            'type'=>'text',
        ]);

        Setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://linkedin.com/in/mhmdshiddiq',
            'type'=>'text',
        ]);

        Setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website Sederhana dengan filament, untuk hidup sederhanas',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
