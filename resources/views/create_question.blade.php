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
	                                <li class="breadcrumb-item"><a href="/">Home</a></li>
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
							<form class="col-12 table-responsive" action="/pertanyaan" method="post">
								@csrf
								<input type="hidden" name="creator" value="1">
								<div class="form-group">
									<label>Question Title</label>
									<input class="form-control" type="text" name="question_title">
								</div>
								<div class="form-group">
									<label>Question Content</label>
									<textarea class="form-control" name="question_content"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
		                </div>
		            </div>
		        </div>
	        </div>
@endsection
