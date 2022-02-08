<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#">
    <meta name="author" content="Jasterweb">
    <link rel="icon" href="{{asset('assets/img/fav.png')}}" type="image/x-icon">
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" type="image/x-icon">
    <title>@yield('title') - JasterSpace</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet"> 
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
     @include('layouts.main.css')
    @yield('style')
  </head>