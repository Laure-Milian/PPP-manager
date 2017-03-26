@extends('layouts.app')

@section('content')
<div class="ui container">

	<div>
		<form action="/create" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			<div>
				<label for="progress"># Progress</label>
			</div>
			<div>
				<textarea id="progress" name="progress"></textarea>
			</div>
			<div>
				<label for="problems"># Problems</label>
			</div>
			<div>
				<textarea id="problems" name="problems"></textarea>
			</div>
			<div>
				<label for="planned"># Planned</label>
			</div>
			<div>
				<textarea id="planned" name="planned"></textarea>
			</div>
			<div>
				<label for="notes">Notes</label>
			</div>
			<div>
				<textarea id="notes" name="notes"></textarea>
			</div>
			<div>
				<input type="submit" name="submit" value="PPP terminé">
			</div>
		</form>
	</div>
</div>

@endsection
