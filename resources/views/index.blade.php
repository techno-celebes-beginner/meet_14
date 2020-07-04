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
							<a class="btn btn-primary" href="/pertanyaan/create">Buat Pertanyaan</a>
						</div>
						<div class="row">
		                	<div class="col-12 table-responsive">
		                		<table class="table">
		                			<thead class="thead-dark">
		                				<tr>
		                					<td>Judul Petanyaan</td>
		                					<td>Isi Petanyaan</td>
		                					<td>Aksi</td>
		                				</tr>
		                			</thead>
		                			<tbody>
		                				@foreach($que as $q)
		                				<tr>
		                					<td>{{$q->question_title}}</td>
		                					<td>{{$q->question_content}}</td>
		                					<td>
		                						<a class="btn btn-primary" href="/pertanyaan/{{ $q->question_id}}/edit">Edit Pertanyaan</a>
												<a class="btn btn-success" href="/jawaban/{{ $q->question_id}}">Lihat Jawaban</a>
												<form method="post" action="/pertanyaan/{{ $q->question_id}}">
													@csrf
													<input type="hidden" name="_method" value="delete" />
													<button class="btn btn-danger" type="submit">Delete</button>
												</form>
		                					</td>
		                				</tr>
		                				@endforeach
		                			</tbody>
		                		</table>
		                	</div>
		                </div>
		            </div>
		        </div>
	        </div>
@endsection