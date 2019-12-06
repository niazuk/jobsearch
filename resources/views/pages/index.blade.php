@extends('layouts.layout')

@section('head')
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
@endsection

@section('content')
	<div class="container" style="border-color: #ff0000; box-shadow: 5px;">	
		<table class="table table-striped">
			<thead><tr><th>Available Vacancies({{count($jobs)}})</th></tr></thead>
			<tbody>
				@foreach($jobs as $job)
				<tr>
					<td>
						<h2 style="text-align:left;">{{ $job->title }}</h2>
						<p style="text-align:left;"><i class='fas fa-map-marker-alt' style='font-size:24px'></i>   	   {{ $job->location }}      <i class='fas fa-pound-sign' style='font-size:24px;'></i>      {{ $job->salarymin }} - {{ $job->salarymax }}</p>
						{{ $job->description }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $jobs->links()}}
	</div>
@endsection