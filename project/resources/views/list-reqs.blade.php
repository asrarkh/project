@include('layouts.partials.navbar')

</style>
  </head>
<title>List applicants</title>
</head>

<body>
<body>
<table border = "1">
<tr>
<td>Name</td>
<td>Major</td>
<td>Phone</td>
<td>job</td>
<td>cv</td>
<td>Status</td>
</tr>
@foreach ($projects as $project)
<tr>
<td>{{ $project->name }}</td>
<td>{{ $project->major }}</td>
<td>{{ $project->phone }}</td>
<td>{{ $project->job }}</td>
<td>{{ $project->cv }}</td>
<td>{{ $project->status }}</td>
</tr>
@endforeach
</table>
</body>
</html>
