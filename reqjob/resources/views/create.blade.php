<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{URL::asset('css/wave-bsb.css')}}" rel="stylesheet"/>
    <div class="flex justify-center ">


    <form action="{{route('reqjob.index')}}" method="post" enctype="multipart/form-data">
        <a class="fw-bold text-decoration-none link-primary" >
            <div class="badge bsb-tpl-bg-white text-primary p-3 mb-4">
        @csrf
        <div>
            <main id="main" class="main">

                <div class="pagetitle">
                  <h1>Request Job</h1>
                </div>

                <section class="section">
                  <div class="row">
                    <div class="col-lg-10">

                <form>
                <div class="row mb-3">
                    <lable for="name" class="col-sm-2 col-form-label">name<span>*</span></lable>
                    <div class="col-sm-10">
                    <input id="name" name="name" type="text"  class="form-control">
                </div>

                </div>
                <div class="row mb-3">
                    <label for="major" class="col-sm-2 col-form-label">Major</label>
                    <div class="col-sm-10">
                    <input type="text" id="major" name="major" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input type="number" id="phone" name="phone" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="job" class="col-sm-2 col-form-label">job<span>*</span></label>
                    <div class="col-sm-10">
                        <select id="job" name="list_job_id" class="form-select" aria-label="Default select example">
                            @foreach ($jobs as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>

                <div class="row mb-3">
                    <label for="cv" class="col-sm-2 col-form-label">CV Upload<span>*</span></label>
                    <div class="col-sm-10">
                    <input class="form-control" id="cv" name="cv" type="file">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit</label>
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                </form>
            </form>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/all.min.js"></script>
  </body>
</html>
