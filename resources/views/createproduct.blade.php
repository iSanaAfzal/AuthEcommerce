{{-- <a href="{{ route('admin.createproduct') }}"></a> --}}
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

    <div class="container-fluid " id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-dark" id="sidebar" role="navigation">
                <ul class="nav flex-column pl-2 mt-5" style="margin-bottom: 24rem;">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.useradmintable') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.createproduct') }}"> Create Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.cartitem') }}">Product Details</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.orders') }}">Orders</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-10" id="main">
                <div class="card mx-auto mt-5" style="background-color: #3498db; color: #fff; width: 60%;">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Create Product</h4>

                        <form method="POST" action="{{ route('admin.createproduct') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="name"
                                    placeholder="Enter product name" required>
                            </div>

                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Product Description</label>
                                <textarea class="form-control" id="productDescription" name="description" placeholder="Enter product description"
                                    rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="customImage">Image Upload</label>
                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupFile">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile" name="image"
                                        accept="image/*">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Product Price</label>
                                <input type="number" class="form-control" id="productPrice" name="price"
                                    placeholder="Enter product price" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark d-grid gap-2 col-6 mx-auto">Submit
                                    Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('Partials.scripts')
</body>

</html>
