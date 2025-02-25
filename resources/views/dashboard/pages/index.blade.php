@extends('dashboard.layouts.app')
@section('title', 'Dashboard')
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Customers</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-wrap gap-3">
                                    <div class="flex-grow-1">
                                        <h3 class="card-title mb-0">Customers List</h3>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal"
                                                data-bs-target="#showModal"><i
                                                    class="bi bi-plus-circle align-baseline me-1"></i> Add
                                                Customer</button>
                                            <button type="button" class="btn btn-secondary"><i
                                                    class="ph-cloud-arrow-down align-middle me-1"></i>
                                                Import</button>
                                            <button type="button" class="btn btn-subtle-info"><i
                                                    class="ph-cloud-arrow-up align-middle me-1"></i>
                                                Export</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row" id="customer-list">
                    <div class="col-xxl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-4">
                                        <div class="search-box">
                                            <input type="text" class="form-control search"
                                                placeholder="Search customer, email etc...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4">
                                        <div>
                                            <select class="form-control" id="idStatus" data-choices
                                                data-choices-search-false>
                                                <option value="all">All Select</option>
                                                <option value="Active">Active</option>
                                                <option value="Unactive">Unactive</option>
                                                <option value="Block">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4">
                                        <input type="text" class="form-control" id="datepicker-range"
                                            data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                            placeholder="Select date">
                                    </div>
                                    <div class="col-xl-2 col-md-4">
                                        <button class="btn btn-subtle-primary w-100" onclick="filterData();"><i
                                                class="bi bi-funnel align-baseline me-1"></i> Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table align-middle table-nowrap">
                                        <tbody class="list">
                                            <tr>
                                                <td class="id d-none"><a href="javascript:void(0);"
                                                        class="fw-medium link-primary">01</a></td>
                                                <td class="customer">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <div>
                                                                <img class="avatar-xs rounded-circle customer-image-elem"
                                                                    alt=""
                                                                    src="backend/assets/images/users/32/avatar-2.jpg">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="fs-base mb-0"><a href="#"
                                                                    class="text-reset customer-name-elem">Javon
                                                                    Pouros</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="email">rashawn@dosix.com</td>
                                                <td class="contact">+(253) 12345 67890</td>
                                                <td class="date">28 Feb, 2023</td>
                                                <td class="status"><span
                                                        class="badge bg-secondary-subtle text-secondary">Unactive</span>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-subtle-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                    href="javascript:void(0);"><i
                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a>
                                                            </li>
                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal"
                                                                    data-bs-toggle="modal"><i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal" href="#deleteRecordModal"><i
                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="noresult" style="display: none">
                                    <div class="text-center py-4">
                                        <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ customers We did
                                            not find any customers for you search.</p>
                                    </div>
                                </div>
                                <div class="align-items-center mt-4 justify-content-between row text-center text-sm-start"
                                    id="pagination-element">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">10</span> of <span
                                                class="fw-semibold">13</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto  mt-3 mt-sm-0">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled"
                                                href="javascript:void(0)">Previous</a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="javascript:void(0)">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-4">
                        <div class="card" id="overview-card">
                            <div class="card-body">
                                <div class="d-flex gap-3 align-items-center flex-wrap">
                                    <div class="flex-shirnk-0">
                                        <img src="backend/assets/images/users/48/avatar-5.jpg" alt=""
                                            class="avatar-sm rounded overview-img">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="fs-lg overview-name">Verona Mosciski</h6>
                                        <p class="text-muted mb-0"><a href="#!"
                                                class="overview-nick-name">@mosciski</a></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-subtle-primary custom-toggle active"
                                            data-bs-toggle="button">
                                            <span class="icon-on"><i class="ri-add-line align-bottom me-1"></i>
                                                Follow</span>
                                            <span class="icon-off"><i class="ri-user-unfollow-line align-bottom me-1"></i>
                                                Unfollow</span>
                                        </button>
                                        <button class="btn btn-subtle-danger btn-icon"><i class="ph-trash"></i></button>
                                    </div>
                                </div>
                                <ul class="d-flex align-items-center gap-2 list-unstyled mt-4">
                                    <li>Social Media:</li>
                                    <li>
                                        <a href="#!" class="btn btn-subtle-success btn-icon btn-sm"><i
                                                class="bi bi-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="btn btn-subtle-primary btn-icon btn-sm"><i
                                                class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!" class="btn btn-subtle-secondary btn-icon btn-sm"><i
                                                class="bi bi-github"></i></a>
                                    </li>
                                </ul>
                                <div>
                                    <table class="table table-sm table-borderless">
                                        <tbody>
                                            <tr>
                                                <th>Email</th>
                                                <td class="overview-email">vmosciski@dosix.com</td>
                                            </tr>
                                            <tr>
                                                <th>Contact</th>
                                                <td class="overview-contact">+(253) 12345 67890</td>
                                            </tr>
                                            <tr>
                                                <th>Joining Date</th>
                                                <td class="overview-date">20 Feb, 2023</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td class="overview-status"><span
                                                        class="badge bg-danger-subtle text-danger">Block</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4">
                                    <label class="form-label fs-md">Private Notes</label>
                                    <div class="private-notes"></div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <h6 class="fs-md px-4 mb-3">Order History</h6>
                                <div data-simplebar class="px-4" style="max-height: 325px;">
                                    <div class="vstack gap-3">
                                        <div class="p-2 border border-dashed">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="backend/assets/images/products/32/img-1.png"
                                                            alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                    </a>
                                                    <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                        <li>
                                                            <i class="ph-star align-baseline"></i> 487
                                                        </li>
                                                        <li>
                                                            <i class="ph-shopping-cart align-baseline"></i> 936
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="fs-md text-primary mb-0">RS 15.99</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-secondary btn-icon btn-sm"><i
                                                            class="ph-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 border border-dashed">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="backend/assets/images/products/32/img-2.png"
                                                            alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md mb-2">Unique Men's Wrist Watch</h6>
                                                    </a>
                                                    <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                        <li>
                                                            <i class="ph-star align-baseline"></i> 452
                                                        </li>
                                                        <li>
                                                            <i class="ph-shopping-cart align-baseline"></i> 1420
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="fs-md text-primary mb-0">RS 84.99</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-secondary btn-icon btn-sm"><i
                                                            class="ph-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 border border-dashed">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="backend/assets/images/products/32/img-3.png"
                                                            alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md mb-2">Twiala Floral Dress</h6>
                                                    </a>
                                                    <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                        <li>
                                                            <i class="ph-star align-baseline"></i> 562
                                                        </li>
                                                        <li>
                                                            <i class="ph-shopping-cart align-baseline"></i> 1348
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="fs-md text-primary mb-0">RS 149.99</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-secondary btn-icon btn-sm"><i
                                                            class="ph-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 border border-dashed">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="backend/assets/images/products/32/img-4.png"
                                                            alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md mb-2">Tokyo Fancy Bomber Jacket</h6>
                                                    </a>
                                                    <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                        <li>
                                                            <i class="ph-star align-baseline"></i> 644
                                                        </li>
                                                        <li>
                                                            <i class="ph-shopping-cart align-baseline"></i> 1540
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="fs-md text-primary mb-0">RS 245.00</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-secondary btn-icon btn-sm"><i
                                                            class="ph-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 border border-dashed">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="backend/assets/images/products/32/img-5.png"
                                                            alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md mb-2">Aster Dress 2XL / Royal Blue</h6>
                                                    </a>
                                                    <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                        <li>
                                                            <i class="ph-star align-baseline"></i> 841
                                                        </li>
                                                        <li>
                                                            <i class="ph-shopping-cart align-baseline"></i> 985
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="fs-md text-primary mb-0">RS 74.63</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-secondary btn-icon btn-sm"><i
                                                            class="ph-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 border border-dashed">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-light rounded">
                                                        <img src="backend/assets/images/products/32/img-6.png"
                                                            alt="" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                    </a>
                                                    <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                        <li>
                                                            <i class="ph-star align-baseline"></i> 763
                                                        </li>
                                                        <li>
                                                            <i class="ph-shopping-cart align-baseline"></i> 763
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-end">
                                                    <h5 class="fs-md text-primary mb-0">RS 245.74</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button class="btn btn-secondary btn-icon btn-sm"><i
                                                            class="ph-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
