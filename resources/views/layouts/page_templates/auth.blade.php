@include('layouts.navbars.navs.auth')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" data-color="purple">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        @yield('content')
    </div>
    @include('layouts.footers.guest')
</div>
