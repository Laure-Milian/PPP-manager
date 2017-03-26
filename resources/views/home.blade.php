@extends('layouts.app')

@section('content')
<div class="ui container">
	<div class="ui grid">
		<div class="four wide column">
			<a href="/create" class="ui teal button">New PPP</a>
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
					<li><a class="choosePPP" ppp_id="{{$ppp->id}}">{{$ppp->created_at}}</a></li>
					@endforeach
				</ul>			
			</div>
		</div>
		<div class="twelve wide column">
			<div>
				<h2>Progress</h2>
			</div>
			<div class="show_ppp_progress">
				blabla
			</div>
			<div>
				<h2>Problem(s)</h2>
			</div>
			<div class="show_ppp_problems">
				blabla
			</div>
			<div>
				<h2>Planned</h2>
			</div>
			<div class="show_ppp_planned">
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



</div>
@endsection
