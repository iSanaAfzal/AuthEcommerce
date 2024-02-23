@include('Partials.style')


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
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.createproduct') }}">Create Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('admin.cartitem') }}">Products Details</a>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('admin.orders') }}">Orders</a>
                </li>
            </ul>
        </div>

        <div class="col">

            <!-- Add your users table here -->
            @if ($users->isNotEmpty())
                <table class="table table-bordered table-striped table-hover table-success mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->Name }}</td>
                                <td>{{ $user->Description }}</td>
                                <td>
                                    @if ($user->Image)
                                        <img src="{{ asset('storage/' . $user->Image) }}" alt="Product Image"
                                            height="50%" width="50%">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </td>

                                <td>{{ $user->price }}</td>
                                <td>
                                    <a href="{{ route('edit', ['id' => $user->id]) }}">
                                        <button class="btn btn-lite">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('delete/' . $user->id) }}">
                                        <button class="btn btn-lite">
                                            <i class="bi bi-trash"></i> <!-- FontAwesome Delete Icon -->
                                        </button>

                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No users found.</p>
            @endif
        </div>
    </div>
</div>
<!-- Add this script in your Blade file or include it from an external script -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

{{-- <script>
    function updateUser(userId) {
        var formData = {
            '_token': document.getElementById('updateForm' + userId).querySelector('[name=_token]').value,
            'id': userId,
            'name': document.getElementById('name' + userId).value,
            'email': document.getElementById('email' + userId).value,
            'role': document.getElementById('role' + userId).value
        };

        axios.post('/update-user', formData)
            .then(function(response) {
                if (response.data.success) {
                    alert('Record updated successfully!');
                    // Optionally, you can reload the page or update the UI as needed.
                    location.reload();
                } else {
                    alert('Error updating record. Please try again.');
                }
            })
            .catch(function(error) {
                alert('Error updating record. Please try again.');
            });
    }
</script> --}}

@include('Partials.scripts')
