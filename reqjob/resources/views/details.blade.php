@include('layouts.partials.navbar')

</style>
  </head>

        </div>
  <html>
<head>
<title>Details</title>
</head>

<body>
    <div class="container px-4 text-center">
        <div class="row gx-5">
          <div class="col">
    <table class="table table-bordered">
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
<td>{{ $reqjob->listJob->name}}</td>
<td> <a href="{{asset($reqjob->cv)}}">Download CV</a></td>
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

