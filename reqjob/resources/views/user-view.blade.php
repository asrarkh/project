@include('layouts.partials.navbar')

</style>
  </head>
<title>View Records</title>
</head>

<body>
    <div class="container px-4 text-center">
        <div class="row gx-5">
          <div class="col">
    <table class="table table-bordered">
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
