</head>
<div class="max-w-6xl mx-auto ">
<div class="banner">
          <h1>نموذج توظيف</h1>
        </div>
</div>
<link href="assets/css/styles.css" rel="stylesheet"/>
<div class="flex justify-center ">
    <form action="{{route('reqjob.index')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <lable for="name">name<span>*</span></lable>
            <input id="name" name="name" type="text">
        </div>
        <div>
        <lable for="major">major<span>*</span></lable>
            <input id="major" name="major" type="text">
        </div>
        <div>
        <lable for="job">job<span>*</span></lable>
            <select id="job" name="list_job_id">
                @foreach ($jobs as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
        <lable for="phone">phone<span>*</span></lable>
            <input id="phone" name="phone" type="number">
        </div>
        <div>
        <lable for="cv">cv<span>*</span></lable>
            <input id="cv" name="cv" type="file">
        </div>

        <div>
            <button type="submit">submit</button>
    </form>
</div>
  </body>
</html>
