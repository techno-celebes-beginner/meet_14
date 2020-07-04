<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id){
    	$n = PertanyaanModel::get_by_id($id);
    	$answer = JawabanModel::get_by_question($id);
    	return view('jawaban-index',['que'=> $n,'answer'=>$answer]);
    }

    public function store(Request $request, $id){
    	$data_q = array();
    	$data_q['answer_content'] = $request->answer_content;
    	$data_q['question_id'] = $id;
    	$data_q['creator'] = 1;
        $data_q['created_at'] = date("Y-m-d H:i:s");
        $data_q['updated_at'] = date("Y-m-d H:i:s");
    	$new_q = JawabanModel::save($data_q);

    	return redirect('/jawaban/' . $id);
    }
}
