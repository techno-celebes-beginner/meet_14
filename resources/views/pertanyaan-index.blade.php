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
						<div class="card card-default">
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										{{$que[0]->question_title }}
									</div>
									<div class="col-12">
										{{$que[0]->question_content }}
									</div>
				                </div>
							</div>

							<div class="card-footer">
								<div class="col-12">
									<p>Dibuat pada tanggal {{$que[0]->created_at }}</p>
									<p>Diupdate pada tanggal {{$que[0]->updated_at }}</p>
								</div>
							</div>
						</div>
		                <div class="row">
		                	@foreach($answer as $a)
		                	<div class="col-lg-12" style="margin-top: 35px;">
		                		<div class="card card-default">
			                		<div class="card-header">
				                		 <p>{{ $a->created_at}}</p>
			                		</div>
			                		<div class="card-body">
				                		 <p>{{ $a->answer_content}}</p>
			                		</div>
		                		</div>
		                	</div>
		                	@endforeach
		                </div>
		            </div>
		        </div>
	        </div>
@endsection
