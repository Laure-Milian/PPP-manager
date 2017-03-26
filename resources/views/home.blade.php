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
					<li>PPP 1</li>
					<li>PPP 2</li>
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
		</div>
	</div>

	@foreach ($ppps as $ppp)
	{{$ppp->progress}}
	@endforeach


</div>
@endsection
