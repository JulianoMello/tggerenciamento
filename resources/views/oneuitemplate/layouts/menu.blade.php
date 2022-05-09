<!-- Side Navigation -->
<div class="content-side content-side-full">
    <ul class="nav-main">
        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ route('dashboard.index') }}">
                <i class="nav-main-link-icon si si-speedometer"></i>
                <span class="nav-main-link-name">Dashboard</span>
            </a>
        </li>
        <li class="nav-main-heading">Contas</li>
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" href="{{ route('account.index') }}">
                <i class="nav-main-link-icon far fa-money-bill-alt"></i>
                <span class="nav-main-link-name">Contas</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" href="{{ route('launch.index') }}">
                <i class="nav-main-link-icon fa fa-balance-scale fa"></i>
                <span class="nav-main-link-name">Lançamentos</span>
            </a>
        </li>
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" href="{{ route('report.index') }}">
                <i class="nav-main-link-icon fa fa-balance-scale fa"></i>
                <span class="nav-main-link-name">Relatórios</span>
            </a>
        </li>
    </ul>
</div>
<!-- END Side Navigation -->

