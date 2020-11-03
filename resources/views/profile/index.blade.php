<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		@foreach($profile as $profile)
			{{ $user->profile->title}}
		@endforeach
	</div>

</body>
</html>