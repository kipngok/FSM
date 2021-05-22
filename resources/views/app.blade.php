<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>FSM</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>

<body class="antialiased">

    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script type="text/javascript">

  $('.sidebar-menu li').on('click', 'a', function(e){
  console.log('here'); 
    if ($(this).parent().children('ul').length){
    e.preventDefault();
    $('a.active').removeClass('active');
    $('.nolist').slideUp();
    $(this).addClass('active');
    $(this).parent().children('ul').slideDown();
  }         
  });

  $('.sidebar-menu li').on('click', 'a.active', function(e){
    e.preventDefault();
    $(this).removeClass('active');
  $(this).parent().children('ul').slideUp();   
    
  });

</script>


</html>