<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">

            @include('includes.header')

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                @include('includes.footer')
            </footer>

        </div>
    </div>
</body>

</html>
