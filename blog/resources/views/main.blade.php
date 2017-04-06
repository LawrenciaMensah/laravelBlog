<!DOCTYPE html>
<html lang="en">

 <head>

@include('_head')

</head>

  <body>
@include('_nav')








   <div class="container">
   
@yield('content')
@include('_footer')

 </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   @include('_javascripts')

@yield('scripts')


  </body>
</html> 