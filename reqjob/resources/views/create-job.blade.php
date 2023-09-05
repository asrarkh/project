</head>
@include('layouts.partials.navbar')
<div class="max-w-6xl mx-auto ">
<div class="banner">
          <h1></h1>
        </div>
</div>
<link href="assets/css/styles.css" rel="stylesheet"/>
<div class="flex justify-center ">

    <form action="/store-job" method="post">
        <a class="fw-bold text-decoration-none link-primary" >
            <div class="badge bsb-tpl-bg-white text-primary p-3 mb-4">
                <section class="section">
                    <div class="row">
                      <div class="col-lg-10">
        @csrf
        <div class="row mb-3">
            <lable for="name" class="col-sm-2 col-form-label">Job Name<span>*</span></lable>
            <div class="col-sm-10">
            <input id="name" name="name" type="text" class="form-control">
        </div>

        <div class="row mb-3">
        <lable for="major" class="col-sm-2 col-form-label">Status<span>*</span></lable>
            <div class="col-sm-10">
            <select id="is_active" name="is_active" class="form-select" aria-label="Default select example">
                <option value="1">Active</option>
                <option value="0">Disabled</option>

            </select>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Submit</label>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
  </body>
</html>
