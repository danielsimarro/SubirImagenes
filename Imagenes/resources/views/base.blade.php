<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Cruz Empleados</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/jumbotron.css') }}" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    <main>
      <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
          @section('header')
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-4">Daniel Simarro Reigada</span>
          </a>
          @show
        </header>
        <div class="content">
             @yield('content')
        </div>
        <footer class="pt-3 mt-4 text-muted border-top">
          @include('base.footer')
        </footer>
      </div>
    </main>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('js')
  </body>
</html>

<style>
.form-group{
  margin-top:10px;
}

#enviar{
  
  margin-top:30px;
  margin-right:50px;
  width:20%;
  
}

#volver{
  margin-top:30px;
  width:10%;
}

.table{
  margin:20px 0;
}

#enviarimg{
  margin-top:30px;
  margin-right:100%;
  width:20%;
  clear:both;
}

img{
  width:400px;
  height:300px;
}

td > img {
  width:100px;
  height:60px;
}
</style>