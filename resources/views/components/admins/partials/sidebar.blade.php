<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                    <span data-feather="home"></span>
                    {{ __('Dashboard') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product.index') }}">
                    <span data-feather="layers"></span>
                    {{ __('Products') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stock.index') }}">
                    <span data-feather="layers"></span>
                    {{ __('Stocks') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('buyer.index') }}">
                    <span data-feather="shopping-bag"></span>
                    {{ __('Buyers') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('sales.index') }}">
                    <span data-feather="list"></span>
                    {{ __('Invoice') }}
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ route('payment.index') }}">
                    <span data-feather="users"></span>
                    {{ __('Payments') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
