<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">

            @include('includes.header')

            <!-- sidebar content -->
                @include('includes.sidebar')

            <!-- content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- footer -->
            <footer class="footer">
                @include('includes.footer')
            </footer>

        </div>
    </div>
</body>

<!-- foot -->
@include('includes.foot')

</html>
