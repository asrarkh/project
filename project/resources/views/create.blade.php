</head>
<div class="max-w-6xl mx-auto ">
<div class="banner">
          <h1>نموذج توظيف</h1>
        </div>
</div>
<link href="assets/css/styles.css" rel="stylesheet"/>
<div class="flex justify-center ">
    <form action="{{route('project.index')}}" method="post">
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
            <select id="job" name="job">
                <option value="software Engineer">software Engineer</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Data analyst">Data analyst</option>
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