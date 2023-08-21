@include('layouts.partials.navbar')

</style>
  </head>
<title>View Records</title>
</head>

<body>
<table border = "1">
<tr>
<td>Name</td>
<td>details</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->name }}</td>

<td>
<a type="button" href="/details/{{ $user->id }}"> show</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>
