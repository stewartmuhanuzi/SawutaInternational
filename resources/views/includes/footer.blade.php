<!DOCTYPE html>
<html>
<head>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title></title>
</head>
<body>
    <div>

    </div>

    <div id="main-footer" class="main-footer bg-dark py-1">

        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="footer-logo-wrap mb-3">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('assets/images/logo-alt.png')}}" />
                        </a>
                    </div>

                    <div class="footer-menu-wrap">
                        <ul class="list-unstyled">
                            
                            <li><a href="">@lang('app.contact_us')</a> </li>
                        </ul>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="footer-menu-wrap mt-2">
                        <h4 class="mb-3">@lang('app.job_seeker')</h4>

                        <ul class="list-unstyled">
                            <li><a href="">@lang('app.create_account')</a> </li>
                            <li><a href="">@lang('app.search_jobs')</a> </li>
                            <li><a href="">@lang('app.applied_jobs')</a> </li>
                        </ul>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="footer-menu-wrap  mt-2">
                        <h4 class="mb-3">@lang('app.employer')</h4>

                        <ul class="list-unstyled">
                            <li><a href="">@lang('app.create_account')</a> </li>
                            <li><a href="/postjob/create">@lang('app.post_new_job')</a> </li>
                            <li><a href="">@lang('app.buy_premium_package')</a> </li>
                        </ul>

                    </div>

                </div>


            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright-text-wrap text-center mt-4">
                        <p>here is the footer</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>
