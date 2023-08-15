
 @include('layouts.partials.navbar')
<!DOCTPE html>
</style>
  </head>
<div class="max-w-6xl mx-auto ">
<div class="banner">
          <h1>List applicants </h1>
        </div>
</div>
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
<html>
<head>
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
