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

	public static function update($data){
		$new_q = DB::table('question')->where('question_id',$data['question_id'])->update(['question_content'=>$data['question_content'],'question_title'=>$data['question_title'],'updated_at'=>$data['updated_at']]);
		return $new_q;
	}

	public static function delete($id){
		$new_q = DB::table('question')->where('question_id',$id)->delete();
		return $new_q;
	}
}
