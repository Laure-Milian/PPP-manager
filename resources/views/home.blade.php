@extends('layouts.app')

@section('content')
<div class="ui container">
	<div class="ui grid">
		<div class="four wide column">
			<button class="ui teal button">New PPP</button>
			<div>
				<select>
					<option>2017</option>
				</select>
			</div>
			<div>
				<select>
					<option>mars</option>
					<option>avril</option>
				</select>
			</div>
			<div id="ppps_list">
				<ul>
					@foreach ($ppps as $ppp)
					<li>{{$ppp->created_at}}</li>
					@endforeach
				</ul>			
			</div>
		</div>
		<div class="twelve wide column">
			<div>
				<h2>Progress</h2>
			</div>
			<div>
				blabla
			</div>
			<div>
				<h2>Problem(s)</h2>
			</div>
			<div>
				blabla
			</div>
			<div>
				<h2>Planned</h2>
			</div>
			<div>
				blabla
			</div>
			<div>
				<h3>Notes</h3>
			</div>
			<div>
				blabla
			</div>

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
	</div>



</div>
@endsection
