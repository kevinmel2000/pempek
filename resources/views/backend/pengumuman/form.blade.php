@extends("backend.layout.backend")

@section("title","Pengumuman")

@section("content")
<div class="panel panel-featured panel-featured-primary">
	<div class="panel-heading">
		<h3 class="panel-title">@yield("title")</h3>
	</div>
	
	<div class="panel-body">
		<form class="form-horizontal" action="{{route('dashboard.pengumuman.store')}}" method="POST">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label">Title</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="title" id="title" required placeholder="Title" value="{{ ($action === 'add') ? old('title') : ((old('title')) ? old('title') : $pengumuman->title) }}">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
				<textarea name="description" id="summernote" class="form-control" required placeholder="Description">{{ ($action === 'add') ? old('description') : ((old('description')) ? old('description') : $pengumuman->description) }}</textarea>
			</div>
		</div>
		<input type="hidden" name="action" value="{{$action}}">
		@if($action === 'edit')
		<input type="hidden" name="id" value="{{$pengumuman->id}}">
		@endif
		{!! csrf_field() !!}
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
		</form>
	</div>
</div>

@push("script")
    <script type="text/javascript">
    	$('#summernote').summernote();
    </script>
@endpush

@endsection
