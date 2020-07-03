<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
    	$n = PertanyaanModel::get_all();
    	return view('index',['que'=> $n]);
    }

    public function create(){
    	return view('create_question');
    }

    public function store(Request $request){
    	$data_q = array();
    	$data_q['question_content'] = $request->question_content;
    	$data_q['question_title'] = $request->question_title;
    	$data_q['creator'] = $request->creator;
    	$new_q = PertanyaanModel::save($data_q);

    	return redirect('/pertanyaan');    	
    }
}
