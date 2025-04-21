<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Shop || @yield('title')</title>

    @include('admin.includes.styles')
    @stack('styles')
</head>

<body class="skin-blue fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">As Sunnah</p>
        </div>
    </div>
    <div id="main-wrapper">
        @include('admin.includes.header')
        @include('admin.includes.sidebar')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"> @yield('title')</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"> @yield('module')</a></li>
                                <li class="breadcrumb-item active"> @yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('body')
            </div>
        </div>

        <footer class="footer">
            &copy; {{ date('Y - m - d') }} Develop by
            <a href="https://gm-zesan.netlify.app/">G.M.Zesan</a>
        </footer>
    </div>

    @include('admin.includes.scripts')
    @stack('scripts')
</body>


</html>
