@extends('dashboard.layouts.app')

@section('content')
    <div class="main-content">
        <div class="page-content wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div id="productList">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="mb-2 d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Orders</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-danger d-none" id="remove-actions"
                                                onClick="deleteMultiple()">
                                                <i class="ri-delete-bin-2-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div>
                                    <div class="table-responsive">
                                        <table class="table table-custom align-middle table-borderless table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Sr #.</th>
                                                    <th>Product</th>
                                                    <th>Price</th> //price of single prod format 00.00
                                                    <th>Quantity</th>
                                                    <th>Subtotal</th> //price of single prod * quantity format 00.00
                                                    <th>User</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($orders as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td class="category">{{ $item->category->name }}</td>
                                                        <td class="stock">{{ $item->quantity }}</td>
                                                        <td class="price">${{ $item->price }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end table-responsive-->

                                    <div class="noresult" style="display: none">
                                        <div class="text-center py-4">
                                            <div class="avatar-md mx-auto mb-4">
                                                <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                            </div>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">
                                                We've searched more than 150+ products We did not
                                                find any products for you search.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end noresult -->

                                    <div class="row mb-4 align-items-center" id="pagination-element">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">10</span> of
                                                <span class="fw-semibold">35</span> Results
                                            </div>
                                        </div>

                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <div class="pagination-wrap hstack gap-2 justify-content-center">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    <i class="mdi mdi-chevron-left align-middle"></i>
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    <i class="mdi mdi-chevron-right align-middle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end pagination-element -->
                                </div> --}}
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-custom align-middle table-borderless table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Sr #.</th>
                                                    <th>Products</th>
                                                    <th>Prices</th> <!-- Single product prices in format 00.00 -->
                                                    <th>Quantities</th>
                                                    <th>Subtotals</th>
                                                    <!-- Single product price * quantity in format 00.00 -->
                                                    <th>Total Price</th> <!-- Order total -->
                                                    <th>User</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($orders as $key => $order)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            @foreach ($order->orderItems as $item)
                                                                <div>{{ $item->product->name ?? 'Unknown Product' }}</div>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach ($order->orderItems as $item)
                                                                <div>${{ number_format($item->price, 2) }}</div>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach ($order->orderItems as $item)
                                                                <div>{{ $item->quantity }}</div>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            @foreach ($order->orderItems as $item)
                                                                <div>${{ number_format($item->price * $item->quantity, 2) }}
                                                                </div>
                                                            @endforeach
                                                        </td>
                                                        <td>${{ number_format($order->orderItems->sum(fn($item) => $item->price * $item->quantity), 2) }}
                                                        </td>
                                                        <td>{{ $order->user->name ?? 'Guest' }}</td>
                                                        <td>{{ $order->created_at->format('d M Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end table-responsive-->

                                    <div class="noresult" style="display: none">
                                        <div class="text-center py-4">
                                            <div class="avatar-md mx-auto mb-4">
                                                <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                            </div>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">
                                                We've searched more than 150+ orders but did not find any matching your
                                                criteria.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end noresult -->

                                    <div class="row mb-4 align-items-center" id="pagination-element">
                                        <div class="col-sm">
                                            <div class="text-muted text-center text-sm-start">
                                                Showing <span class="fw-semibold">{{ $orders->count() }}</span> of
                                                <span class="fw-semibold">{{ $orders->total() }}</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <div class="pagination-wrap hstack gap-2 justify-content-center">
                                                {{ $orders->links() }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end pagination-element -->
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        © Dosix.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
