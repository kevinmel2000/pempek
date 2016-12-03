@extends("backend.layout.backend")

@section("title","Slider")

@section("content")
<div class="panel panel-featured panel-featured-primary">
	<div class="panel-heading">
		<h3 class="panel-title">@yield("title")</h3>
	</div>
	
	<div class="panel-body">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>
					<a href="{{route('dashboard.sliders.add')}}" class="btn btn-sm btn-primary">Add New</a>
				</th>
			</tr>
			@foreach($slider as $data)
			<tr>
				<td>{{$data->id}}</td>
				<td>{{$data->title}}</td>
				<td>
        			<a href="{{ route('dashboard.sliders.edit', ['id' => $data->id]) }}">
        				<i class="glyphicon glyphicon-pencil text-muted"></i>
        			</a>
        			<a href="{{ route('dashboard.sliders.delete', ['id' => $data->id]) }}">
        				<i class="glyphicon glyphicon-trash text-danger"></i>
        			</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>

{{ $slider->links() }}

@endsection
