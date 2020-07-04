<?php


namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel{

	public static function get_all(){
		$pertanyaan = DB::table('question')->get();
		return $pertanyaan;
	}

	public static function get_by_id($id){
		$pertanyaan = DB::table('question')->where("question_id",$id)->get();
		return $pertanyaan;
	}

	public static function save($data){
		$new_q = DB::table('question')->insert($data);
		return $new_q;
	}
}
