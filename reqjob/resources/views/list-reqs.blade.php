@include('layouts.partials.navbar')

</style>
  </head>
<title>List applicants</title>
</head>

<body>
<link href="assets/css/styles.css" rel="stylesheet"/>
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
@foreach ($Reqjobs as $Reqjob)
<tr>
<td>{{ $Reqjob->name }}</td>
<td>{{ $Reqjob->major }}</td>
<td>{{ $Reqjob->phone }}</td>
<td>{{ $Reqjob->job }}</td>
<td>{{ $Reqjob->cv }}</td>
<td>{{ $Reqjob->status }}</td>
</tr>
@endforeach
</table>
</body>
</html>
