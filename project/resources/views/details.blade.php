@include('layouts.partials.navbar')

</style>
  </head>
      
        </div>
  <html>
<head>
<title>Details</title>
</head>

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

<tr>
<td>{{ $project->name }}</td>
<td>{{ $project->major }}</td>
<td>{{ $project->phone }}</td>
<td>{{ $project->job }}</td>
<td> <a href="/display_pdf/{id}">Download CV</a></td>
<td>
    @if($project->status == null)
    <a type="button" href="/details/{{$project->id}}/approve">approve</a>
    <a type="button" href="/details/{{$project->id}}/reject">reject</a>
    @else
    <a type="button" href="">{{$project->status}}</a>
    @endif
</td> 
</tr>

</table>
</body>
</html>

    