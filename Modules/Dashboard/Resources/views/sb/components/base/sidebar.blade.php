<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        {{--        <div class="sidebar-brand-icon rotate-n-15">--}}
        {{--            <i class="fas fa-laugh-wink"></i>--}}
        {{--        </div>--}}
        <div
            class="sidebar-brand-text mx-3">
            {{ app_name() }}
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @include('dashboard::sidebar')

</ul>
<!-- End of Sidebar -->

