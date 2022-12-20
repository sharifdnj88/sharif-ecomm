<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - App Icon - Clock</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{asset('frontend/clock/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="icon-large icon-clock" style="margin-top:-800px;z-index:99">
  <div class="clock">
    <ol>
      <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
    </ol>
    <div id="hour"></div>
    <div id="min"></div>
    <div id="sec"></div>
  </div>
</div>
<!-- partial -->
  <script  src="{{asset('frontend/clock/script.js')}}"></script>

</body>
</html>
