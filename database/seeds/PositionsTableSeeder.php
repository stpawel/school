<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
        	'kind'=>'Dyrektor',
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Sekretarka'
        	]);

        DB::table('positions')->insert([
        	'kind'=>'Klasa I'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Klasa II'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Klasa III'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Język Polski'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Język Angielski'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Matematyka'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Fizyka'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Chemia'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Przyroda'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Geografia'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Historia'
        	]);
        
        DB::table('positions')->insert([
        	'kind'=>'Biologia'
        	]);
    }
}
