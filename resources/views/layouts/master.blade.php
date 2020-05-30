<!doctype html>
<html lang="en" ng-app="userApp">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <!-- sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.1/dist/sweetalert2.min.css">

    <!-- css -->
    @yield('css')

    <title>Task Management</title>
  </head>
  <body>

    <!-- navbar -->
    @include('layouts.partials._navbar')
   
    <!-- content -->
    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.1/dist/sweetalert2.all.min.js"></script>
    <!-- AngularJs -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <!-- AngularJS App -->
    <script src="{{ URL::to('app/app.module.js') }}"></script>
    <!-- AngularJS Project Service -->
    <script src="{{ URL::to('app/services/project.service.js') }}"></script>
    <!-- AngularJS Project Controller -->
    <script src="{{ URL::to('app/controllers/project.controller.js') }}"></script>
    <!-- AngularJS Task Service -->
    <script src="{{ URL::to('app/services/task.service.js') }}"></script>
    <!-- AngularJS Task Controller -->
    <script src="{{ URL::to('app/controllers/task.controller.js') }}"></script>

    {{-- custom script --}}
    <script>
        localStorage.setItem('APP_BASE_PATH', '{{ URL::to('/') }}');
    </script>

    <!-- js -->
    @yield('js')
  </body>
</html>