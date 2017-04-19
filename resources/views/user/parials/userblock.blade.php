<div class="media">
	<a class="pull-left" href="{{ route('profile.index', ['name' => $user->name]) }}">
		<img class="media-object" src="{{ $user->getAvatarAttribute() }}">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['name' => $user->name]) }}">{{ $user->name }}</a></h4>
		@if($user->surname)
			<p>{{ $user->surname }}</p>
		@endif
	</div>
</div>