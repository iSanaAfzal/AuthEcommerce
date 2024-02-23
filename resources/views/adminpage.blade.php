<a href="{{ route('adminpage') }}"></a>

@include('Partials.style')

<body>
    <nav class="navbar navbar-fixed-top navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="flex-row d-flex">
            <a class="navbar-brand mb-1" href="#">Ecommerce Site</a>
            <button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas"
                title="Toggle responsive left sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#myAlert" data-toggle="collapse">Wow</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>


    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-dark" id="sidebar" role="navigation">
                <ul class="nav flex-column pl-2 mt-5" style="margin-bottom: 24rem;">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.useradmintable') }}">Users</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.createproduct') }}">
                            Create Products</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.cartitem') }}">Products
                            Details</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.orders') }}">Orders</a>
                    </li>
                </ul>
            </div>


            @include('Partials.scripts')
