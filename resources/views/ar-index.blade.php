<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            *{
                direction: rtl;
                text-align: right;
                text-decoration: none!important;
                font-family: 'Cairo', sans-serif;
            }
            .row{
                margin: 0px;
            }
            @if(isset($_GET['mode']) && $_GET['mode']=="night")
                @if(isset($_GET['night_bg']))
                body{
                    background: #{{$_GET['night_bg']}}!important;
                }
                @else
                body{
                    background: #131923!important;
                }
                @endif
            .text-mode{
                color: #ddd!important
            }
            .footer-link{
                color: #ddd!important
            }
            @elseif(isset($_GET['mode']) && $_GET['mode']=="day")
                @if(isset($_GET['day_bg']))
                    body{
                        background: #{{$_GET['day_bg']}}!important;
                    }
                    @else
                    body{
                        background: #fff!important;
                    }
            @endif
            .text-mode{
                color: #666!important
            }
            .footer-link{
                color: #666!important
            }
            @endif

        </style>
    </head>

    <body style="display:flex;

    ">
        <div class="container m-auto">
            <div class="col-12 text-center">
                <a target="_blank" href="https://devlab.ae/">
                    <img src="{{env('PUBLIC_PATH')}}/brandmark-design.png"  style="width: 180px;max-width: 100%" class="mt-4">
                </a>
                {{-- <h6 style="font-size: 14px;" class="text-center py-3">مجموعة مواقع Devlab</h6> --}}
                <div class="col-12 pt-4 px-0">
                    <div class="col-12 row px-0">
                        <div class="col-12 row text-center d-inline px-0">
                            @foreach ($sites as $site)
                                <div class="d-inline-block" style="width: 112px;height: 91px;">
                                    <a target="_blank" href="{{$site->link}}" style="width: 100%;height: 91px;" class="d-block text-center">
                                        <img title="{{$site->name}}" src="{{($site->site_profile && count($site->site_profile) > 0 && $site->site_profile[0]->icon_en) ? $site->site_profile[0]->icon_en : env('PUBLIC_PATH').'/brandmark-design.png' }}" style="width: 48px;height: 48px;object-fit: contain;" class="text-center d-inline-block my-2">
                                        <h6 style="color:#666;font-size: 14px;" class="text-center text-mode">{{$site->name}}</h6>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-12 row text-center d-inline px-0" style="margin-top: 15px">
                            <a target="_blank" href="https://devlab.ae/terms" class="footer-link" style="margin-right: 20px; margin-left: 20px">الشروط والاحكام</a>
                            <a target="_blank" href="https://devlab.ae/policy" class="footer-link" style="margin-right: 20px; margin-left: 20px">سياسة الخصوصية</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>
</html>
