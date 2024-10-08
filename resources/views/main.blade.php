@include('dashboard.layout.header')

<body id="page-top">
    <div id="wrapper">

        @include('dashboard.layout.aside')


        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('dashboard.layout.navbar')

                <div class="container">

                    @yield('content')
                </div>
            </div>
            @include('dashboard.layout.footer')
        </div>
    </div>
    @include('dashboard.layout.script')
