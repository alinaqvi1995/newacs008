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
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="card product-card-grid-menu">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="product-card-hrid-border">
                                    <p class="text-muted">Total Products</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="mb-0">
                                            <span class="counter-value" data-target="{{ count($products) }}">0</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-card-hrid-border">
                                    <p class="text-muted">Total Orders</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="mb-0">
                                            <span class="counter-value" data-target="{{ count($ordersTotal) }}">0</span>
                                        </h4>
                                        {{-- <p class="mb-0 text-muted">
                                            <span class="flex-shrink-0 badge bg-success-subtle text-success rounded-pill"><i
                                                    class="ph ph-trend-up align-middle me-1"></i>
                                                1.5%</span>
                                        </p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-card-hrid-border">
                                    <p class="text-muted">Total Stock</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="mb-0">
                                            $<span class="counter-value" data-target="218.36">0</span>k
                                        </h4>
                                        <p class="mb-0 text-muted">
                                            <span class="flex-shrink-0 badge bg-danger-subtle text-danger rounded-pill"><i
                                                    class="ph ph-trend-up align-middle me-1"></i>
                                                0.8%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-card-hrid-border">
                                    <p class="text-muted">Net Profit</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <h4 class="mb-0">
                                            $<span class="counter-value" data-target="564.95">0</span>M
                                        </h4>
                                        <p class="mb-0 text-muted">
                                            <span class="flex-shrink-0 badge bg-success-subtle text-success rounded-pill"><i
                                                    class="ph ph-trend-up align-middle me-1"></i>
                                                2.4%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-custom align-middle table-borderless table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Sr #.</th>
                                                    <th>Product</th>
                                                    <th>Price</th> <!-- Single product price in format 00.00 -->
                                                    <th>Quantity</th>
                                                    <th>Subtotal</th>
                                                    <!-- Single product price * quantity in format 00.00 -->
                                                    <th>User</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($orders as $key => $order)
                                                    @foreach ($order->orderItems as $item)
                                                        <tr>
                                                            <td>{{ $loop->parent->index + 1 }}</td>
                                                            <td>{{ $item->product->name ?? 'Unknown Product' }}</td>
                                                            <td>${{ number_format($item->price, 2) }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                            <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                                                            <td>{{ $order->user->name ?? 'Guest' }}</td>
                                                            <td>{{ $order->created_at->format('d M Y') }}</td>
                                                        </tr>
                                                    @endforeach
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
                                                We've searched more than 150+ products but did not find any orders matching
                                                your criteria.
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
