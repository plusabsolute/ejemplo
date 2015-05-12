
		<h1>Curso Básico de Laravel</h1>
		<p>
			@if (isset($user))
				Bienvenidos {{ $user }}
			@else
				[Login]
			@endif
		</p>