<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name"> Welcome Back! </p>
            <p class="app-sidebar__user-designation"> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </p>
        </div>
    </div>
    <ul class="app-menu">

        @if(Auth::user()->admin == 0)

        <li>
            <a class="app-menu__item" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('admin.projects') }}"><i class="app-menu__icon fa fa-object-group"></i>
                <span class="app-menu__label">Projects Overview</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('admin.tasks') }}"><i class="app-menu__icon fa fa-eye"></i>
                <span class="app-menu__label">Tasks</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-calendar"></i>
                <span class="app-menu__label">Projects / Task Calendar</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-folder-open-o"></i>
                <span class="app-menu__label">Google Docs</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-rss"></i>
                <span class="app-menu__label">RSS Feeds</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Staff</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-group"></i>
                <span class="app-menu__label">Customers</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i>
                <span class="app-menu__label">Sales</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Estimates</a>
                </li>
                <li>
                    <a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Items</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-fax"></i>
                <span class="app-menu__label">Leads</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-wrench"></i>
                <span class="app-menu__label">Support</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-folder"></i>
                <span class="app-menu__label">Knowledge Base</span>
            </a>
        </li>
        

        @else

        <li>
            <a class="app-menu__item" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('admin.projects') }}"><i class="app-menu__icon fa fa-object-group"></i>
                <span class="app-menu__label">Projects Overview</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('admin.tasks') }}"><i class="app-menu__icon fa fa-eye"></i>
                <span class="app-menu__label">Tasks</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-calendar"></i>
                <span class="app-menu__label">Projects / Task Calendar</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-folder-open-o"></i>
                <span class="app-menu__label">Google Docs</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-rss"></i>
                <span class="app-menu__label">RSS Feeds</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-folder"></i>
                <span class="app-menu__label">Knowledge Base</span>
            </a>
        </li>
        

        @endif

    </ul>
</aside>