@include('Partials.style')

<body>
    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-dark" id="sidebar" role="navigation">
                <ul class="nav flex-column pl-2 mt-5" style="margin-bottom: 24rem;">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.useradmintable') }}">Users</a>
                    </li>
                    <li>
                        <a class="nav-link text-white" href="{{ route('admin.createproduct') }}">Create Products</a>
                    </li>
                    </li>
                    <li><a class="nav-link text-white" href="{{ route('admin.cartitem') }}">Products Details</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.orders') }}">Orders</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-10 main d-flex justify-content-center align-items-center mt-5">
                <div class="card" style="background-color: #8de7f3; width: 60%; color: #0e0b0b;">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Update Product</h4>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Updated form for updating an existing product -->
                        <form method="POST" action="{{ route('admin.updateproduct', ['id' => $user->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="productName" class="form-label" style="color: #0e0c0c;">Product
                                    Name</label>
                                <input type="text" class="form-control" id="productName" name="name"
                                    placeholder="Enter product name" value="{{ old('Name', $user->Name) }}" required>
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger mt-2" style="color: #110d0d;">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="productDescription" class="form-label" style="color: #070606;">Product
                                    Description</label>
                                <textarea class="form-control" id="productDescription" name="description" placeholder="Enter product description"
                                    rows="3" required>{{ old('Description', $user->Description) }}</textarea>
                                @if ($errors->has('Description'))
                                    <div class="alert alert-danger mt-2" style="color: #080606;">
                                        {{ $errors->first('Description') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="customImage" style="color: #0e0202;">Image Upload</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="customImage" name="Image"
                                        accept="Image/*">
                                    <label class="input-group-text" for="customImage">Upload</label>
                                </div>
                                @if ($errors->has('Image'))
                                    <div class="alert alert-danger mt-2" style="color: #070101;">
                                        {{ $errors->first('Image') }}
                                    </div>
                                @endif
                            </div>


                            <div class="mb-3">
                                <label for="productPrice" class="form-label" style="color: #0a0303;">Product
                                    Price</label>
                                <input type="number" class="form-control" id="productPrice" name="price"
                                    placeholder="Enter product price" value="{{ old('price', $user->price) }}"
                                    required>
                                @if ($errors->has('price'))
                                    <div class="alert alert-danger mt-2" style="color: #0a0000;">
                                        {{ $errors->first('price') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-success ">Update Product</button>
                            </div>
                        </form>

                        <div id="successMessage" style="display:none; text-align:center; color:green; margin-top:10px;">
                            Product Updated successfully!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Partials.scripts')
</body>

</html>
