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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



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