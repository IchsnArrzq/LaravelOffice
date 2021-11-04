<!--App Sidebar-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="user-pro-body">
            <div class="sideuser-img">
                <img src="{{ asset('storage/'.$pegawai->foto) }}" alt="user-img" class="">
                <span class="sidebar-icon"></span>
            </div>
            <div class="user-info">
                <h2 class="app-sidebar__user-name">{{ $pegawai->nama }}</h2>
                <span class="app-sidebar__title">{{ $pegawai->jabatan->nama }}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
        <li>
            <h3>Main</h3>
        </li>
        <li>
            <a class="side-menu__item" href="index.html"><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li>
            <h3>Kenaikan</h3>
        </li>
        <li>
            <a class="side-menu__item" href="#"><i class="side-menu__icon" data-eva="cube-outline"></i><span class="side-menu__label">Kenaikan Berkala</span></a>
        </li>
        <li>
            <a class="side-menu__item" href="#"><i class="side-menu__icon" data-eva="email-outline"></i><span class="side-menu__label">Kenaikan Pangkat</span></a>
        </li>
        <li>
            <h3>Forms & Charts</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="file-text-outline"></i><span class="side-menu__label">Form Elements</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="form-elements.html">Form Elements</a></li>
                <li><a class="slide-item" href="form-advanced.html">Advanced Forms</a></li>
                <li><a class="slide-item" href="form-layouts.html">Form Layouts</a></li>
                <li><a class="slide-item" href="form-validation.html">Form Validation</a></li>
                <li><a class="slide-item" href="form-wizards.html">Form Wizards</a></li>
                <li><a class="slide-item" href="form-editor.html">WYSIWYG Editor</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="bar-chart-2-outline"></i><span class="side-menu__label">Charts</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="chart-morris.html">Morris Charts</a></li>
                <li><a class="slide-item" href="chart-flot.html">Flot Charts</a></li>
                <li><a class="slide-item" href="chart-chartjs.html">ChartJS</a></li>
                <li><a class="slide-item" href="chart-sparkline.html">Sparkline</a></li>
                <li><a class="slide-item" href="chart-echart.html">Echarts</a></li>
                <li><a class="slide-item" href="chart-peity.html">Peity</a></li>
            </ul>
        </li>
        <li>
            <h3>Maps & Tables</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="pin-outline"></i><span class="side-menu__label">Maps</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="map-leaflet.html">Leaflet</a></li>
                <li><a class="slide-item" href="map-vector.html">Vector Maps</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="layout-outline"></i><span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="table-basic.html">Basic Tables</a></li>
                <li><a class="slide-item" href="table-data.html">Data Tables</a></li>
            </ul>
        </li>
        <li>
            <h3>Componets</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="grid-outline"></i><span class="side-menu__label">UI Elements</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="ui-accordion.html">Accordion</a></li>
                <li><a class="slide-item" href="ui-alerts.html">Alerts</a></li>
                <li><a class="slide-item" href="ui-avatar.html">Avatar</a></li>
                <li><a class="slide-item" href="ui-badge.html">Badge</a></li>
                <li><a class="slide-item" href="ui-breadcrumbs.html">Breadcrumbs</a></li>
                <li><a class="slide-item" href="ui-buttons.html">Buttons</a></li>
                <li><a class="slide-item" href="ui-cards.html">Cards</a></li>
                <li><a class="slide-item" href="ui-carousel.html">Carousel</a></li>
                <li><a class="slide-item" href="ui-collapse.html">Collapse</a></li>
                <li><a class="slide-item" href="ui-dropdown.html">Dropdown</a></li>
                <li><a class="slide-item" href="ui-images.html">Images</a></li>
                <li><a class="slide-item" href="ui-list-group.html">List Group</a></li>
                <li><a class="slide-item" href="ui-loaders.html">Loaders</a></li>
                <li><a class="slide-item" href="ui-media-object.html">Media Object</a></li>
                <li><a class="slide-item" href="ui-modals.html">Modals</a></li>
                <li><a class="slide-item" href="ui-navigation.html">Navigation</a></li>
                <li><a class="slide-item" href="ui-pagination.html">Pagination</a></li>
                <li><a class="slide-item" href="ui-panels.html">Panels</a></li>
                <li><a class="slide-item" href="ui-popover.html">Popover</a></li>
                <li><a class="slide-item" href="ui-progress.html">Progress</a></li>
                <li><a class="slide-item" href="ui-tabs.html">Tabs</a></li>
                <li><a class="slide-item" href="ui-tags.html">Tags</a></li>
                <li><a class="slide-item" href="ui-spinners.html">Spinners</a></li>
                <li><a class="slide-item" href="ui-tooltip.html">Tooltip</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="briefcase-outline"></i><span class="side-menu__label">Basic Elements</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="basic-background.html">Background</a></li>
                <li><a class="slide-item" href="basic-border.html">Border</a></li>
                <li><a class="slide-item" href="basic-display.html">Display</a></li>
                <li><a class="slide-item" href="basic-flex.html">Flex</a></li>
                <li><a class="slide-item" href="basic-height.html">Height</a></li>
                <li><a class="slide-item" href="basic-margin.html">Margin</a></li>
                <li><a class="slide-item" href="basic-padding.html">Padding</a></li>
                <li><a class="slide-item" href="basic-position.html">Position</a></li>
                <li><a class="slide-item" href="basic-typography.html">Typography</a></li>
                <li><a class="slide-item" href="basic-width.html">Width</a></li>
                <li><a class="slide-item" href="basic-extras.html">Extras</a></li>
            </ul>
        </li>
        <li>
            <h3>Icons</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="stop-circle-outline"></i><span class="side-menu__label">Icons</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="ui-icons-one.html">Font Aswesome Icons</a></li>
                <li><a class="slide-item" href="ui-icons-two.html">Simple Line Icons</a></li>
                <li><a class="slide-item" href="ui-icons-three.html">Feather Icons</a></li>
                <li><a class="slide-item" href="ui-icons-four.html">Weather Icons</a></li>
                <li><a class="slide-item" href="ui-icons-five.html">Line Awesome</a></li>
                <li><a class="slide-item" href="ui-icons-six.html">Themify Icons</a></li>
                <li><a class="slide-item" href="ui-icons-seven.html">Pe7 Icons</a></li>
                <li><a class="slide-item" href="ui-icons-eight.html">Typicon Icons</a></li>
            </ul>
        </li>
        <li>
            <h3>Ecommerce</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="shopping-cart-outline"></i><span class="side-menu__label">Ecommerce</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="page-ecommerce.html">Ecommerce Shop</a></li>
                <li><a class="slide-item" href="page-ecommerce-description.html">Shop Description</a></li>
                <li><a class="slide-item" href="page-ecommerce-cart.html">Cart</a></li>
            </ul>
        </li>
        <li>
            <h3>Other Pages</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="book-outline"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="page-profile.html">Profile</a></li>
                <li><a class="slide-item" href="page-editprofile.html">Edit Profile</a></li>
                <li><a class="slide-item" href="page-invoice.html">Invoice</a></li>
                <li><a class="slide-item" href="blog.html">Blog</a></li>
                <li><a class="slide-item" href="page-timeline.html">Timeline</a></li>
                <li><a class="slide-item" href="page-pricing.html">Page Pricing</a></li>
                <li><a class="slide-item" href="page-todotask.html">Todo Task</a></li>
                <li><a class="slide-item" href="page-widget-notification.html">Notification Widgets </a></li>
                <li><a class="slide-item" href="page-sessionout.html">Session Timeout</a></li>
                <li><a class="slide-item" href="page-faqs.html">FAQS</a></li>
                <li><a class="slide-item" href="page-termsconditions.html">Terms & Conditions</a></li>
                <li><a class="slide-item" href="page-create.html">Page Create</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="compass-outline"></i><span class="side-menu__label">Custom</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="page-construction.html">Page Construction</a></li>
                <li><a class="slide-item" href="page-signin.html">Page Sign In</a></li>
                <li><a class="slide-item" href="page-signup.html">Page Sign Up</a></li>
                <li><a class="slide-item" href="page-forgotpassword.html">Forgot Password</a></li>
                <li><a class="slide-item" href="page-createpassword.html">Create password</a></li>
                <li><a class="slide-item" href="page-lockscreen.html">Lockscreen</a></li>
                <li><a class="slide-item" href="page-error.html">Page Data Error</a></li>
                <li><a class="slide-item" href="page-404.html">Page 404</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="browser-outline"></i><span class="side-menu__label">Subheaders</span><i class="angle fe fe-chevron-down"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="page-subheader.html">Sub Header 01</a></li>
                <li><a class="slide-item" href="page-subheader2.html">Sub Header 02</a></li>
                <li><a class="slide-item" href="page-subheader3.html">Sub Header 03</a></li>
                <li><a class="slide-item" href="page-subheader4.html">Sub Header 04</a></li>
            </ul>
        </li>
    </ul>
</aside>
<!--/App Sidebar-->