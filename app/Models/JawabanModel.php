<?php


namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel{
	public static function get_all(){
		$pertanyaan = DB::table('answer')->get();
		return $pertanyaan;
	}

	public static function get_by_question($id){
		$pertanyaan = DB::table('answer')->where("question_id",$id)->get();
		return $pertanyaan;
	}

	public static function save($data){
		$new_q = DB::table('answer')->insert($data);
		return $new_q;
	}
}
