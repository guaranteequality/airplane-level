
<!DOCTYPE html>
<!-- saved from url=(0040)http://forum.azyrusthemes.com/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum :: Home Page</title>
          <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap -->

        <!-- Start: injected by Adguard -->



        <!-- End: injected by Adguard -->       

        <!-- Custom -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('plugin/Lightweight-XHTML-BBCode-WYSIWYG-Editor-SCEditor/minified/themes/default.min.js')}}" type="text/css" media="all" />
<!--        <link rel="stylesheet" href="{{asset('plugin/Small-Custom-Star-Rating-Plugin-For-jQuery-Stars-js/demo/style.css')}}" type="text/css" media="all" />-->
        <link href="{{asset('plugin/texteditor/editor.css')}}" rel="stylesheet">
        <link href="{{asset('forum/custom.css')}}" rel="stylesheet">
        <link href="{{asset('forum/style.css')}}" rel="stylesheet">
        <link href="{{asset('forum/settings.css')}}" rel="stylesheet">


        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    </head>
    <body style="">

        <div class="container-fluid">



            <div class="headernav fixed-top bg-light mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-xs-3 col-sm-2 col-md-2 logo "><a href="/"><img src="{{asset('imgs/logo.png')}}" alt=""></a></div>

                        <div class="col-lg-6 search hidden-xs hidden-sm col-md-6">
                            <div class="wrap">
                                <form action="http://forum.azyrusthemes.com/index.html#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <section class="content mt-5 pt-5 mb-5 pb-5">

                @yield('content')


            </section>

            <footer class="fixed-bottom bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="http://forum.azyrusthemes.com/index.html#"><img src="{{asset('forum/logo.jpg')}}" alt=""></a></div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2014, websitename.com</div>

                    </div>
                </div>
            </footer>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
         <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script src="{{asset('plugin/texteditor/editor.js')}}"></script>
        <script src="{{asset('plugin/Small-Custom-Star-Rating-Plugin-For-jQuery-Stars-js/stars.js')}}"></script>
        <script src="{{asset('forum/script.js')}}"></script>
       
        <div class="adguard-alert adguard-assistant-button-fixed adguard-assistant-button-bottom adguard-assistant-button-right">
            <span class="adguard-a-logo">
                <span class="adguard-logo"></span>
            </span>
        </div></body></html>