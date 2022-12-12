@extends('backend.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
</div>


@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
{{ session('pesan') }}
</div>
@endif

	<h2>Data Project</h2>
	<td><a href="/project/create" class="btn btn-dark mb-3">Add Project</a></td>
	<table class="table table-boredered">
	
	<tr>
	<th>No</th>
	<th>Id</th>
	<th>Name</th>
	<th>Client Id</th>
	<th>Project Start</th>
	<th>Project End</th>
	<th>Project Status</th>
	<th>Aksi</th>
	</tr>

@foreach ($tb_m_project as $tb_m_project)

	<tr>
	<td>{{ $loop->iteration }} </td>
	<td>{{ $tb_m_project->id }}</td>
	<td>{{ $tb_m_project->name }}</td>
	<td>{{ $tb_m_project->client_id }}</td>
	<td>{{ $tb_m_project->project_start }}</td>
	<td>{{ $tb_m_project->project_end }}</td>
	<td>{{ $tb_m_project->project_status }}</td>
	
	<td>
		<a href="/project/{{ $tb_m_project->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
		<form action="/project/{{ $tb_m_project->id }}" method="post" class="d-inline">

	@method('DELETE')
	@csrf
	<button class="btn btn-danger btn-sm" type="submit" 
	onclick="return confirm('Yakin akan menghapus data ? ')" >Delete</button>
	</form>

	</td>
	</tr>
@endforeach
	</table>



@endsection