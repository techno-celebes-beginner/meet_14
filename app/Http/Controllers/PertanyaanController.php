<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
    	$n = PertanyaanModel::get_all();
    	return view('index',['que'=> $n]);
    }

    public function create(){
    	return view('create_question');
    }

    public function show($id){
        $n = PertanyaanModel::get_by_id($id);
        $answer = JawabanModel::get_by_question($id);
        return view('pertanyaan-index',['que'=> $n,'answer'=>$answer]);
    }

    public function edit($id){
        $n = PertanyaanModel::get_by_id($id);
        return view('edit_question',['que'=> $n]);
    }

    public function delete($id){
        PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }

    public function store(Request $request){
    	$data_q = array();
    	$data_q['question_content'] = $request->question_content;
    	$data_q['question_title'] = $request->question_title;
    	$data_q['creator'] = $request->creator;
        $data_q['created_at'] = date("Y-m-d H:i:s");
        $data_q['updated_at'] = date("Y-m-d H:i:s");
    	$new_q = PertanyaanModel::save($data_q);

    	return redirect('/pertanyaan');
    }

    public function update(Request $request){
        $data_q = array();
        $data_q['question_content'] = $request->question_content;
        $data_q['question_title'] = $request->question_title;
        $data_q['question_id'] = $request->question_id;
        $data_q['updated_at'] = date("Y-m-d H:i:s");
        $new_q = PertanyaanModel::update($data_q);

        return redirect('/pertanyaan/' . $request->question_id . "/edit");
    }
}
