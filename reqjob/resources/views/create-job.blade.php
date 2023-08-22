</head>
<div class="max-w-6xl mx-auto ">
<div class="banner">
          <h1>نموذج توظيف</h1>
        </div>
</div>
<link href="assets/css/styles.css" rel="stylesheet"/>
<div class="flex justify-center ">
    <form action="/store-job" method="post">
        @csrf
        <div>
            <lable for="name">Job Name<span>*</span></lable>
            <input id="name" name="name" type="text">
        </div>
        <div>
        <lable for="major">Status<span>*</span></lable>
            <select id="is_active" name="is_active">
                <option value="1">Active</option>
                <option value="0">Disabled</option>

            </select>
        </div>

            <button type="submit">submit</button>
    </form>
</div>
  </body>
</html>
