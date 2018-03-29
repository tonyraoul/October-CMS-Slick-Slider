<?php namespace PeterHegman\SlickSlider\Updates;



use Schema;

use October\Rain\Database\Updates\Migration;



class BuilderTableUpdatePeterhegmanSlicksliderSlideShows11 extends Migration

{

    public function up()


    {


        Schema::table('peterhegman_slickslider_slide_shows', function($table)


        {


            $table->string('video_mp4')->nullable();


        });


    }


    


    public function down()


    {


        Schema::table('peterhegman_slickslider_slide_shows', function($table)


        {


            $table->dropColumn('video_mp4');


        });


    }

}

