<div class="topbar-wrapper shadow">
    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="{{ route('dashboard') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="backend/assets/images/logo-dark.png" alt="" height="22">
                            </span>
                        </a>
                        <a href="{{ route('dashboard') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="backend/assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="backend/assets/images/logo-light.png" alt="" height="22">
                            </span>
                        </a>
                    </div>
                    <div class="header-item flex-shrink-0 me-3 vertical-btn-wrapper">
                        <button type="button" class="btn btn-sm px-0 fs-xl vertical-menu-btn topnav-hamburger border hamburger-icon" id="topnav-hamburger-icon">
                            <i class='bx bx-chevrons-right arrow-right'></i>
                            <i class='bx bx-chevrons-left arrow-left'></i>
                        </button>
                    </div>
                    <h4 class="mb-sm-0 header-item page-title lh-base">Customers</h4>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown d-none d-md-flex topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search fs-3xl"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown ms-1 topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="backend/assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                <img src="backend/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">English</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                <img src="backend/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">Española</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                <img src="backend/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                <img src="backend/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">Italiana</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                <img src="backend/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">русский</span>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                <img src="backend/assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">中国人</span>
                            </a>
    
                            
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                <img src="backend/assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">français</span>
                            </a>
    
                            
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                                <img src="backend/assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">عربي</span>
                            </a>
                        </div>
                    </div>
    
                    {{-- <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-shopping-bag fs-3xl'></i>
                            <span class="position-absolute topbar-badge cartitem-badge fs-3xs translate-middle badge rounded-pill bg-info">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 product-list" aria-labelledby="page-header-cart-dropdown">
                            <div class="p-3 border-bottom">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-lg fw-semibold"> My Cart <span class="badge bg-secondary fs-sm cartitem-badge ms-1">7</span></h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!">View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 300px;">
                                <div class="p-3">
                                    <div class="text-center empty-cart" id="empty-cart">
                                        <div class="avatar-md mx-auto my-3">
                                            <div class="avatar-title bg-info-subtle text-info fs-2 rounded-circle">
                                                <i class='bx bx-cart'></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Your Cart is Empty!</h5>
                                        <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                    </div>
    
                                    <div class="d-block dropdown-item product text-wrap p-2">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3 flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="backend/assets/images/products/32/img-1.png" class="avatar-xs" alt="user-pic">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                <h6 class="mt-0 mb-3 fs-md">
                                                    <a href="#!" class="text-reset">Blive Printed Men Round Neck</a>
                                                </h6>
                                                <div class="text-muted fw-medium d-none">$<span class="product-price">327.49</span></div>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                <h5 class="mb-0">$ <span class="product-line-price">654.98</span></h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="d-block dropdown-item product text-wrap p-2">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3 flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="backend/assets/images/products/32/img-5.png" class="avatar-xs" alt="user-pic">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-1 fs-sm text-muted">Sportwear</p>
                                                <h6 class="mt-0 mb-3 fs-md">
                                                    <a href="#!" class="text-reset">Willage Volleyball Ball</a>
                                                </h6>
                                                <div class="text-muted fw-medium d-none">$<span class="product-price">49.06</span></div>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                <h5 class="mb-0">$ <span class="product-line-price">147.18</span></h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="d-block dropdown-item product text-wrap p-2">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3 flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="backend/assets/images/products/32/img-10.png" class="avatar-xs" alt="user-pic">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                <h6 class="mt-0 mb-3 fs-md">
                                                    <a href="#!" class="text-reset">Cotton collar tshirts for men</a>
                                                </h6>
                                                <div class="text-muted fw-medium d-none">$<span class="product-price">53.33</span></div>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                <h5 class="mb-0">$ <span class="product-line-price">159.99</span></h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="d-block dropdown-item product text-wrap p-2">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3 flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="backend/assets/images/products/32/img-11.png" class="avatar-xs" alt="user-pic">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                <h6 class="mt-0 mb-3 fs-md">
                                                    <a href="#!" class="text-reset">Jeans blue men boxer</a>
                                                </h6>
                                                <div class="text-muted fw-medium d-none">$<span class="product-price">164.37</span></div>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                <h5 class="mb-0">$ <span class="product-line-price">164.37</span></h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="d-block dropdown-item product text-wrap p-2">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3 flex-shrink-0">
                                                <div class="avatar-title bg-light rounded">
                                                    <img src="backend/assets/images/products/32/img-8.png" class="avatar-xs" alt="user-pic">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                <h6 class="mt-0 mb-3 fs-md">
                                                    <a href="#!" class="text-reset">Full Sleeve Solid Men Sweatshirt</a>
                                                </h6>
                                                <div class="text-muted fw-medium d-none">$<span class="product-price">180.00</span></div>
                                                <div class="input-step">
                                                    <button type="button" class="minus">–</button>
                                                    <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                            <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                <h5 class="mb-0">$ <span class="product-line-price">180.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div id="count-table">
                                        <table class="table table-borderless mb-0  fw-semibold">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total :</td>
                                                    <td class="text-end cart-subtotal">$1306.52</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount <span class="text-muted">(DOSIX15)</span>:</td>
                                                    <td class="text-end cart-discount">- $195.98</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge :</td>
                                                    <td class="text-end cart-shipping">$65.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax (12.5%) : </td>
                                                    <td class="text-end cart-tax">$163.31</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
    
                                </div>
                            </div>
                            <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                <div class="d-flex justify-content-between align-items-center pb-3">
                                    <h5 class="m-0 text-muted">Total:</h5>
                                    <div class="px-2">
                                        <h5 class="m-0 cart-total">$1338.86</h5>
                                    </div>
                                </div>
    
                                <a href="apps-ecommerce-checkout.html" class="btn btn-info text-center w-100">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div> --}}
    
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                            <i class='bx bx-fullscreen fs-3xl'></i>
                        </button>
                    </div>
    
                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-sun align-middle fs-3xl"></i>
                        </button>
                        <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                            <a href="#!" class="dropdown-item" data-mode="light"><i class="bx bx-sun align-middle me-2"></i> Default (light mode)</a>
                            <a href="#!" class="dropdown-item" data-mode="dark"><i class="bx bx-moon align-middle me-2"></i> Dark</a>
                            <a href="#!" class="dropdown-item" data-mode="auto"><i class="bx bx-desktop align-middle me-2"></i> Auto (system default)</a>
                        </div>
                    </div>
    
                    <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-notification fs-3xl'></i>
                            <span class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span class="notification-badge">3</span><span class="visually-hidden">unread messages</span></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
    
                            <div class="dropdown-head rounded-top">
                                <div class="px-3 py-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger fs-sm notification-badge"> 3</span></h6>
                                        </div>
                                        <div class="col-auto dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                <li><a class="dropdown-item" href="#">Archive All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="pb-2 ps-0" id="notificationItemsTabContent">
                                <div data-simplebar style="max-height: 300px;" class="pe-0">
                                    <h6 class="text-overflow text-muted fs-sm my-2 notification-title px-3">Today</h6>
    
                                    <div class="text-reset notification-item d-block dropdown-item position-relative border-dashed border-bottom">
                                        <div class="d-flex">
                                            <div class="position-relative me-3 flex-shrink-0">
                                                <img src="backend/assets/images/users/32/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                <span class="active-badge position-absolute start-100 translate-middle p-1 bg-danger rounded-circle">
                                                    <span class="visually-hidden">Un Active</span>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fs-md text-muted">
                                                    <p class="mb-1 text-muted"><b>Angela Bernier</b> mentioned you in <a href="#!">This Project</a></p>
                                                </div>
                                                <p class="mb-0 fs-xs fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-base">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="text-reset notification-item d-block dropdown-item position-relative border-dashed border-bottom">
                                        <div class="d-flex">
                                            <div class="position-relative me-3 flex-shrink-0">
                                                <img src="backend/assets/images/users/32/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="fs-md text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-xs fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 1 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-base">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <h6 class="text-overflow text-muted fs-sm my-3 px-3 notification-title">Read Before</h6>
    
                                    <div class="text-reset notification-item d-block dropdown-item position-relative border-dashed border-bottom">
                                        <div class="d-flex">
    
                                            <div class="position-relative me-3 flex-shrink-0">
                                                <img src="backend/assets/images/users/32/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                    <span class="visually-hidden">New alerts</span>
                                                </span>
                                            </div>
    
                                            <div class="flex-grow-1">
                                                <div class="fs-md text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-xs fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-base">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                    <label class="form-check-label" for="all-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="notification-actions" id="notification-actions">
                                    <div class="d-flex text-muted justify-content-center align-items-center">
                                        Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <img class="rounded-circle header-profile-user" src="backend/assets/images/users/32/avatar-1.jpg" alt="Header Avatar">
                                <span class="text-start ms-xl-2">
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Richard Marshall</span>
                                    <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Founder</span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            
                            <h6 class="dropdown-header">Welcome Richard!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                            <a class="dropdown-item" href="apps-tickets-overview.html"><i class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Help</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                            <a class="dropdown-item" href="auth-lockscreen.html"><i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                            <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4 fs-base">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-cartmodal"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-5"></i>
                        </div>
                        <div class="mt-4">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete It!</button>
                    </div>
                </div>
    
            </div>
        </div>
    </div>           
    <ul class="nav nav-underline menu-tabs flex-nowrap overflow-x-auto" id="menu-tabs">
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" aria-current="page" href="dashboard-ecommerce.html">Overview</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="apps-ecommerce-product-details.html">Product Overview</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="apps-ecommerce-cart.html">Shopping Cart</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="apps-ecommerce-checkout.html">Checkout</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="apps-ecommerce-orders.html">Orders</a>
        </li>
        <li class="nav-item flex-shrink-0">
            <a class="nav-link" href="apps-ecommerce-customers.html">Customers</a>
        </li>
    </ul>
</div>