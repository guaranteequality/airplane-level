<!DOCTYPE html>
<html>
<head>
  @include('admin.header')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
               @include('admin.leftmenu')
            <div class="right-column">
                @include('admin.righttop')
                <main class="main-content p-4">
                      @yield('content')
                </main>
            </div>
        </div>
    </div>
     @include('admin.footer')
</body>
</html>