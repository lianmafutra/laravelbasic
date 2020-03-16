<!DOCTYPE html>
<html lang="en">
@include('frontend.template.partials.head')
<body>
@include('frontend.template.partials.navigation')

  <div class="container">
  @yield('content')
  </div>


 @include('frontend.template.partials.scripts ')   
@include('frontend.template.partials.toast')
</body>
</html>