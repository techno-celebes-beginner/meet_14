@extends('layout.master')

@section('content')
			<div class="content-wrapper answer-assignment-manual-wrapper">
            <!-- Content Header (Page header) -->
	            <div class="content-header">
	                <div class="container-fluid">
	                    <div class="row mb-2">
	                        <div class="col-sm-6">
	                            <h1 class="m-0 text-dark">Daftar Pertanyaan</h1>
	                        </div>
	                        <!-- /.col -->
	                        <div class="col-sm-6">
	                            <ol class="breadcrumb float-sm-right">
	                                <li class="breadcrumb-item"><a href="/">Pertanyaan</a></li>
	                            </ol>
	                        </div>
	                        <!-- /.col -->
	                    </div>
	                    <!-- /.row -->
	                </div>
	                <!-- /.container-fluid -->
	            </div>

	            <div class="content my-class-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								{{$que[0]->question_title }}
							</div>
							<div class="col-12">
								{{$que[0]->question_content }}
							</div>
		                </div>
		                <div class="row">
		                	@foreach($answer as $a)
		                	<div class="col-lg-12" style="margin-top: 35px;">
		                		<div class="card card-default">
			                		<div class="card-body">
				                		 <p>{{ $a->answer_content}}</p>
			                		</div>
		                		</div>
		                	</div>
		                	@endforeach
		                </div>
		                <form class="row" method="post" action="/jawaban/{{$que[0]->question_id}}">
		                	@csrf
		                	<div class="form-group col-lg-12" style="margin-top: 50px;">
		                		<label>Jawaban Baru</label>
		                		<textarea class="form-control" name="answer_content"></textarea>
		                	</div>
		                	<div class="col-lg-12">
			                	<button class="btn btn-primary" type="submit">Submit</button>
		                	</div>
		                </form>
		            </div>
		        </div>
	        </div>
@endsection
