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
<td>{{ $reqjob->name }}</td>
<td>{{ $reqjob->major }}</td>
<td>{{ $reqjob->phone }}</td>
<td>{{ $reqjob->job }}</td>
<td> <a href="/upload-file">Download CV</a></td>
<td>
    @if($reqjob->status == null)
    <a type="button" href="/details/{{$reqjob->id}}/approve">approve</a>
    <a type="button" href="/details/{{$reqjob->id}}/reject">reject</a>
    @else
    <a type="button" href="">{{$reqjob->status}}</a>
    @endif
</td> 
</tr>

</table>
</body>
</html>

    