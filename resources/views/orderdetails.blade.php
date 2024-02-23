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

        <table class="table table-bordered table-striped table-hover table-success mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone_no</th>
                    <th>address</th>
                    <th>country</th>
                    <th>city</th>
                    <th>product_id</th>
                    <th>user_id</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if ($orders->count() > 0)
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone_no }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->country }}</td>
                            <td>{{ $order->city }}</td>
                            <td>{{ $order->product_id }}</td>
                            <td>{{ $order->user_id }}</td>
                            <div id="successMessage" style="display: none;" class="alert alert-success mt-3"></div>
                            <!-- Your buttons -->
                            <td>
                                @if ($order->order_status == 1)
                                    <button class="btn btn-success approve-btn"
                                        onclick="approveOrder({{ $order->id }})">Approve</button>
                                @elseif ($order->order_status == 0)
                                    <button class="btn btn-danger reject-btn"
                                        onclick="rejectOrder({{ $order->id }})">Reject</button>
                                @else
                                    <!-- Display both buttons if neither approved nor rejected -->
                                    <button class="btn btn-success approve-btn"
                                        onclick="approveOrder({{ $order->id }})">Approve</button>
                                    <button class="btn btn-danger reject-btn"
                                        onclick="rejectOrder({{ $order->id }})">Reject</button>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="12">No orders found.</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>
<script>
    function approveOrder(orderId) {
        axios.post('/approve-order/' + orderId)
            .then(function(response) {
                // Update the success message div
                document.getElementById('successMessage').innerHTML = response.data.message;
                document.getElementById('successMessage').style.display = 'block';

                // You can update the UI or perform other actions if needed
            })
            .catch(function(error) {
                console.error(error);
            });
    }

    function rejectOrder(orderId) {
        axios.post('/reject-order/' + orderId)
            .then(function(response) {
                // Update the success message div
                document.getElementById('successMessage').innerHTML = response.data.message;
                document.getElementById('successMessage').style.display = 'block';

                // You can update the UI or perform other actions if needed
            })
            .catch(function(error) {
                console.error(error);
            });
    }
</script>







@include('Partials.scripts')
