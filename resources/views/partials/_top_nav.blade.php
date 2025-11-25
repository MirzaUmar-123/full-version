<nav class="navbar navbar-light">
    <div class="navbar-left">
        <div class="logo-area">
            <a class="navbar-brand" href="{{ route('dashboard.demo_one') }}">
                <img class="dark" src="{{ asset('assets/img/logo-dark.svg') }}" alt="svg">
                <img class="light" src="{{ asset('assets/img/logo-white.svg') }}" alt="img">
            </a>
            <a href="#" class="sidebar-toggle">
                <img class="svg" src="{{ asset('assets/img/svg/align-center-alt.svg') }}" alt="img"></a>
        </div>

        <div class="top-menu">
            <div class="hexadash-top-menu position-relative">
                <ul>
                    <li class="has-subMenu">
                        <a href="#" class="{{ Request::is('dashboards/*') ? 'active' : '' }}">Dashboard</a>
                        <ul class="subMenu">
                            <li><a class="{{ Request::is('dashboards/demo-one') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_one') }}">{{ trans('menu.dashboard-demo-one') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-two') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_two') }}">{{ trans('menu.dashboard-demo-two') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-three') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_three') }}">{{ trans('menu.dashboard-demo-three') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-four') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_four') }}">{{ trans('menu.dashboard-demo-four') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-five') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_five') }}">{{ trans('menu.dashboard-demo-five') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-six') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_six') }}">{{ trans('menu.dashboard-demo-six') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-seven') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_seven') }}">{{ trans('menu.dashboard-demo-seven') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-eight') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_eight') }}">{{ trans('menu.dashboard-demo-eight') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-nine') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_nine') }}">{{ trans('menu.dashboard-demo-nine') }}</a>
                            </li>
                            <li><a class="{{ Request::is('dashboards/demo-ten') ? 'active' : '' }}"
                                    href="{{ route('dashboard.demo_ten') }}">{{ trans('menu.dashboard-demo-ten') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#" class="">{{ trans('menu.layout-menu-title') }}</a>
                        <ul class="subMenu">
                            <li class="l_sidebar">
                                <a href="#" data-layout="light">{{ trans('menu.layout-light-mode') }}</a>
                            </li>
                            <li class="l_sidebar">
                                <a href="#" data-layout="dark">{{ trans('menu.layout-dark-mode') }}</a>
                            </li>
                            <li class="l_navbar">
                                <a href="#" data-layout="top">{{ trans('menu.layout-top-menu') }}</a>
                            </li>
                            <li class="layout">
                                <a href="{{ Helper::get_translation_url('ar') }}">{{ trans('menu.layout-rtl') }}</a>
                            </li>
                            <li class="layout">
                                <a href="{{ Helper::get_translation_url('en') }}">{{ trans('menu.layout-ltr') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#"
                            class="{{ Request::is('table/*') || Request::is('pages/dynamic-table') || Request::is('applications/job/*') || Request::is('applications/support/*') || Request::is('applications/social/profile-settings') || Request::is('applications/bookmark') || Request::is('applications/task') || Request::is('applications/filemanager') || Request::is('applications/import_export/*') || Request::is('applications/kanban') || Request::is('applications/todo') || Request::is('applications/note') || Request::is('applications/contact/*') || Request::is('applications/user/*') || Request::is('applications/calendar') || Request::is('applications/project/*') || Request::is('applications/ecommerce/*') || Request::is('applications/email/*') || Request::is('applications/chat') ? 'active' : '' }}">Apps</a>
                        <ul class="megaMenu-wrapper megaMenu-dropdown">
                            <li>
                                <ul>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/email/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-envelope"></span>
                                            <span class="menu-text">{{ trans('menu.email-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is('applications/email/inbox') ? 'active' : '' }}"
                                                    href="{{ route('email.inbox') }}">{{ trans('menu.email-inbox') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/email/read') ? 'active' : '' }}"
                                                    href="{{ route('email.read') }}">{{ trans('menu.email-read') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('chat') }}"
                                            class="{{ Request::is('applications/chat') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-chat"></span>
                                            <span class="menu-text">{{ trans('menu.chat-menu-title') }}</span>
                                            <span class="badge badge-success menuItem rounded-circle">3</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/ecommerce/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-bag"></span>
                                            <span
                                                class="menu-text text-initial">{{ trans('menu.ecommerce-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="{{ route('ecommerce.products') }}"
                                                    class="{{ Request::is('applications/ecommerce/products') ? 'active' : '' }}">{{ trans('menu.ecommerce-products') }}</a>
                                            </li>
                                            <li><a href="{{ route('ecommerce.product_detail') }}"
                                                    class="{{ Request::is('applications/ecommerce/product-detail') ? 'active' : '' }}">{{ trans('menu.ecommerce-product-details') }}</a>
                                            </li>
                                            <li><a href="{{ route('ecommerce.add_product') }}"
                                                    class="{{ Request::is('applications/ecommerce/add-product') ? 'active' : '' }}">{{ trans('menu.ecommerce-product-add') }}</a>
                                            </li>
                                            <li><a href="{{ route('ecommerce.cart') }}"
                                                    class="{{ Request::is('applications/ecommerce/cart') ? 'active' : '' }}">{{ trans('menu.ecommerce-cart') }}</a>
                                            </li>
                                            <li><a href="{{ route('ecommerce.orders') }}"
                                                    class="{{ Request::is('applications/ecommerce/orders') ? 'active' : '' }}">{{ trans('menu.ecommerce-orders') }}</a>
                                            </li>
                                            <li><a href="{{ route('ecommerce.sellers') }}"
                                                    class="{{ Request::is('applications/ecommerce/sellers') ? 'active' : '' }}">{{ trans('menu.ecommerce-sellers') }}</a>
                                            </li>
                                            <li><a href="{{ route('ecommerce.invoice') }}"
                                                    class="{{ Request::is('applications/ecommerce/invoice') ? 'active' : '' }}">{{ trans('menu.ecommerce-invoices') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/project/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-folder"></span>
                                            <span class="menu-text">{{ trans('menu.project-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="{{ route('project.project_list') }}"
                                                    class="{{ Request::is('applications/project/list') ? 'active' : '' }}">{{ trans('menu.project-title') }}</a>
                                            </li>
                                            <li><a href="{{ route('project.project_detail') }}"
                                                    class="{{ Request::is('applications/project/project-detail') ? 'active' : '' }}">{{ trans('menu.project-detail') }}</a>
                                            </li>
                                            <li><a href="{{ route('project.create_project') }}"
                                                    class="{{ Request::is('applications/project/create') ? 'active' : '' }}">{{ trans('menu.create-project') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('calendar') }}"
                                            class="{{ Request::is('applications/calendar') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-calendar-alt"></span>
                                            <span class="menu-text">{{ trans('menu.calendar-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/user/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-users-alt"></span>
                                            <span class="menu-text">{{ trans('menu.user-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="{{ route('user.member') }}"
                                                    class="{{ Request::is('applications/user/member') ? 'active' : '' }}">{{ trans('menu.user-team') }}</a>
                                            </li>
                                            <li><a href="{{ route('user.grid') }}"
                                                    class="{{ Request::is('applications/user/grid') ? 'active' : '' }}">{{ trans('menu.user-grid') }}</a>
                                            </li>
                                            <li><a href="{{ route('user.list') }}"
                                                    class="{{ Request::is('applications/user/list') ? 'active' : '' }}">{{ trans('menu.user-list') }}</a>
                                            </li>
                                            <li><a href="{{ route('user.grid_style') }}"
                                                    class="{{ Request::is('applications/user/grid-style') ? 'active' : '' }}">{{ trans('menu.user-grid-style') }}</a>
                                            </li>
                                            <li><a href="{{ route('user.group') }}"
                                                    class="{{ Request::is('applications/user/group') ? 'active' : '' }}">{{ trans('menu.user-group') }}</a>
                                            </li>
                                            <li><a href="{{ route('user.add') }}"
                                                    class="{{ Request::is('applications/user/add') ? 'active' : '' }}">{{ trans('menu.user-add') }}</a>
                                            </li>
                                            <li><a href="{{ route('user.table') }}"
                                                    class="{{ Request::is('applications/user/table') ? 'active' : '' }}">{{ trans('menu.user-table') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/contact/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-at"></span>
                                            <span class="menu-text">{{ trans('menu.contact-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is('applications/contact/grid') ? 'active' : '' }}"
                                                    href="{{ route('contact.grid') }}">{{ trans('menu.contact-grid') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/contact/list') ? 'active' : '' }}"
                                                    href="{{ route('contact.list') }}">{{ trans('menu.contact-list') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/contact/create') ? 'active' : '' }}"
                                                    href="{{ route('contact.create') }}">{{ trans('menu.contact-list') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('note') }}"
                                            class="{{ Request::is('applications/note') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-clipboard-notes"></span>
                                            <span class="menu-text">{{ trans('menu.note-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('todo') }}"
                                            class="{{ Request::is('applications/todo') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-check-square"></span>
                                            <span class="menu-text">{{ trans('menu.todo-menu-title') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('kanban') }}"
                                            class="{{ Request::is('applications/kanban') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-expand-arrows"></span>
                                            <span class="menu-text">{{ trans('menu.kanban-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/import_export/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-exchange"></span>
                                            <span class="menu-text">{{ trans('menu.ie-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is('applications/import_export/import') ? 'active' : '' }}"
                                                    href="{{ route('import_export.import') }}">{{ trans('menu.ie-import') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/import_export/export') ? 'active' : '' }}"
                                                    href="{{ route('import_export.export') }}">{{ trans('menu.ie-export') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/import_export/export-selected') ? 'active' : '' }}"
                                                    href="{{ route('import_export.export_selected') }}">{{ trans('menu.ie-export-selected') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('filemanager') }}"
                                            class="{{ Request::is('applications/filemanager') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-repeat"></span>
                                            <span class="menu-text">{{ trans('menu.filemanager-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('task') }}"
                                            class="{{ Request::is('applications/task') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-lightbulb-alt"></span>
                                            <span class="menu-text">{{ trans('menu.task-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('bookmark') }}"
                                            class="{{ Request::is('applications/bookmark') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-bookmark"></span>
                                            <span class="menu-text">{{ trans('menu.bookmark-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/social/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-apps"></span>
                                            <span class="menu-text">{{ trans('menu.social-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li class="nav-item"><a href="{{ route('social.profile') }}"
                                                    class="{{ Request::is('applications/social/profile') ? 'active' : '' }}">{{ trans('menu.social-profile') }}</a>
                                            </li>
                                            <li><a href="{{ route('social.profile_settings') }}"
                                                    class="{{ Request::is('applications/social/profile-settings') ? 'active' : '' }}">{{ trans('menu.social-profile-setting') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/support/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-user"></span>
                                            <span class="menu-text">{{ trans('menu.support-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is('applications/support/support-ticket') ? 'active' : '' }}"
                                                    href="{{ route('support.support_ticket') }}">{{ trans('menu.support-ticket') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/support/support-details') ? 'active' : '' }}"
                                                    href="{{ route('support.support_detail') }}">{{ trans('menu.support-ticket-detail') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/support/new-ticket') ? 'active' : '' }}"
                                                    href="{{ route('support.new_ticket') }}">{{ trans('menu.support-new-ticket') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('applications/job/*') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-search"></span>
                                            <span class="menu-text">{{ trans('menu.job-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is('applications/job/job-search') ? 'active' : '' }}"
                                                    href="{{ route('job.job_search') }}">{{ trans('menu.job-search') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/job/job-search-list') ? 'active' : '' }}"
                                                    href="{{ route('job.job_search_list') }}">{{ trans('menu.job-search-list') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/job/job-detail') ? 'active' : '' }}"
                                                    href="{{ route('job.job_detail') }}">{{ trans('menu.job-detail') }}</a>
                                            </li>
                                            <li><a class="{{ Request::is('applications/job/job-apply') ? 'active' : '' }}"
                                                    href="{{ route('job.job_apply') }}">{{ trans('menu.job-apply') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#"
                                            class="{{ Request::is('table/*') || Request::is('pages/dynamic-table') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-table"></span>
                                            <span class="menu-text">{{ trans('menu.table-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="{{ route('table.basic') }}"
                                                    class="{{ Request::is('table/basic') ? 'active' : '' }}">{{ trans('menu.table-basic') }}</a>
                                            </li>
                                            <li><a href="{{ route('table.data') }}"
                                                    class="{{ Request::is('table/data') ? 'active' : '' }}">{{ trans('menu.table-data') }}</a>
                                            </li>
                                            <li><a href="{{ route('pages.dynamic_table') }}"
                                                    class="{{ Request::is('pages/dynamic-table') ? 'active' : '' }}">{{ trans('menu.dynamic-table-menu-title') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#" class="{{ Request::is('customer/*') ? 'active' : '' }}">Crud</a>
                        <ul class="subMenu">
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('customer/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-database"></span>
                                    <span class="menu-text">{{ trans('menu.customer-crud-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is('customer/list') ? 'active' : '' }}"
                                            href="{{ route('customer.list') }}">{{ trans('menu.customer-view-all') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('customer/create') ? 'active' : '' }}"
                                            href="{{ route('customer.create') }}">{{ trans('menu.customer-add-new') }}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#"
                            class="{{ Request::is('wizard/*') || Request::is('widget/*') || Request::is('map/*') || Request::is('form/*') || Request::is('chart/*') || Request::is('editor') || Request::is('icon/*') ? 'active' : '' }}">Features</a>
                        <ul class="subMenu">
                            <li>
                                <a href="{{ route('editor') }}"
                                    class="{{ Request::is('editor') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-edit"></span>
                                    <span class="menu-text">{{ trans('menu.editor-menu-title') }}</span>
                                </a>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('icon/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-grid"></span>
                                    <span class="menu-text">{{ trans('menu.icon-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a href="{{ route('icon.unicon') }}"
                                            class="{{ Request::is('icon/unicon') ? 'active' : '' }}">{{ trans('menu.icon-unicon') }}</a>
                                    </li>
                                    <li><a href="{{ route('icon.awesome') }}"
                                            class="{{ Request::is('icon/awesome') ? 'active' : '' }}">{{ trans('menu.icon-awesome') }}</a>
                                    </li>
                                    <li><a href="{{ route('icon.lineawesome') }}"
                                            class="{{ Request::is('icon/lineawesome') ? 'active' : '' }}">{{ trans('menu.icon-line') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('chart/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-chart"></span>
                                    <span class="menu-text">{{ trans('menu.chart-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is('chart/chartjs') ? 'active' : '' }}"
                                            href="{{ route('chart.chartjs') }}">{{ trans('menu.chart-js') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('chart/google') ? 'active' : '' }}"
                                            href="{{ route('chart.google') }}">{{ trans('menu.chart-google') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('chart/peity') ? 'active' : '' }}"
                                            href="{{ route('chart.peity') }}">{{ trans('menu.chart-peity') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('form/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-keyhole-circle"></span>
                                    <span class="menu-text">{{ trans('menu.form-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is('form/basic') ? 'active' : '' }}"
                                            href="{{ route('form.basic') }}">{{ trans('menu.form-basic') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('form/layout') ? 'active' : '' }}"
                                            href="{{ route('form.layout') }}">{{ trans('menu.form-layout') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('form/element') ? 'active' : '' }}"
                                            href="{{ route('form.element') }}">{{ trans('menu.form-element') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('form/component') ? 'active' : '' }}"
                                            href="{{ route('form.component') }}">{{ trans('menu.form-component') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('form/validation') ? 'active' : '' }}"
                                            href="{{ route('form.validation') }}">{{ trans('menu.form-validation') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('map/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-map"></span>
                                    <span class="menu-text">{{ trans('menu.map-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a href="{{ route('map.google') }}"
                                            class="{{ Request::is('map/google') ? 'active' : '' }}">{{ trans('menu.map-google') }}</a>
                                    </li>
                                    <li><a href="{{ route('map.leaflet') }}"
                                            class="{{ Request::is('map/leaflet') ? 'active' : '' }}">{{ trans('menu.map-leaflet') }}</a>
                                    </li>
                                    <li><a href="{{ route('map.vector') }}"
                                            class="{{ Request::is('map/vector') ? 'active' : '' }}">{{ trans('menu.map-vector') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('widget/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-server"></span>
                                    <span class="menu-text">{{ trans('menu.widget-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is('widget/chart') ? 'active' : '' }}"
                                            href="{{ route('widget.chart') }}">{{ trans('menu.widget-chart') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('widget/mixed') ? 'active' : '' }}"
                                            href="{{ route('widget.mixed') }}">{{ trans('menu.widget-mixed') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('widget/card') ? 'active' : '' }}"
                                            href="{{ route('widget.card') }}">{{ trans('menu.widget-card') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is('wizard/*') ? 'active' : '' }}">
                                    <span class="nav-icon uil uil-square"></span>
                                    <span class="menu-text">{{ trans('menu.wizard-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a href="{{ route('wizard.one') }}"
                                            class="{{ Request::is('wizard/one') ? 'active' : '' }}">{{ trans('menu.wizard-one') }}</a>
                                    </li>
                                    <li><a href="{{ route('wizard.two') }}"
                                            class="{{ Request::is('wizard/two') ? 'active' : '' }}">{{ trans('menu.wizard-two') }}</a>
                                    </li>
                                    <li><a href="{{ route('wizard.three') }}"
                                            class="{{ Request::is('wizard/three') ? 'active' : '' }}">{{ trans('menu.wizard-three') }}</a>
                                    </li>
                                    <li><a href="{{ route('wizard.four') }}"
                                            class="{{ Request::is('wizard/four') ? 'active' : '' }}">{{ trans('menu.wizard-four') }}</a>
                                    </li>
                                    <li><a href="{{ route('wizard.five') }}"
                                            class="{{ Request::is('wizard/five') ? 'active' : '' }}">{{ trans('menu.wizard-five') }}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-item has-subMenu">
                        <a href="#"
                            class="{{ Request::is(app()->getLocale() . '/pages/pricing') || Request::is(app()->getLocale() . '/pages/gallery/*') || Request::is(app()->getLocale() . '/changelog') ? 'active' : '' }}">Pages</a>
                        <ul class="megaMenu-wrapper megaMenu-small">
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('changelog') }}"
                                            class="{{ Request::is('changelog') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-arrow-growth"></span>
                                            <span class="menu-text">{{ trans('menu.changelog-menu-title') }}</span>
                                            <span class="badge badge-info-10 menuItem rounded-pill">1.0.1</span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('pages.gallery1') }}"
                                            class="{{ Request::is('pages/gallery/gallery1') ? 'active' : '' }}">{{ trans('menu.gallery-one') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.gallery2') }}"
                                            class="{{ Request::is('pages/gallery/gallery2') ? 'active' : '' }}">{{ trans('menu.gallery-two') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.pricing') }}"
                                            class="{{ Request::is('pages/pricing') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-bill"></span>
                                            <span class="menu-text">{{ trans('menu.pricing-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.banner') }}"
                                            class="{{ Request::is('pages/banner') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-thumbs-up"></span>
                                            <span class="menu-text">{{ trans('menu.banner-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.testimonial') }}"
                                            class="{{ Request::is('pages/testimonial') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-book-open"></span>
                                            <span class="menu-text">{{ trans('menu.testimonial-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.faq') }}"
                                            class="{{ Request::is('pages/faq') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-question-circle"></span>
                                            <span class="menu-text">{{ trans('menu.faq-menu-title') }}</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('pages.search_result') }}"
                                            class="{{ Request::is('pages/search/result') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-credit-card-search"></span>
                                            <span class="menu-text">{{ trans('menu.search-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.blank') }}"
                                            class="{{ Request::is('pages/blank') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-circle"></span>
                                            <span class="menu-text">{{ trans('menu.blank-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li><a class="{{ Request::is('pages/knowledge/base') ? 'active' : '' }}"
                                            href="{{ route('pages.knowledge_base') }}">{{ trans('menu.knowledge-base') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('pages/knowledge/all-articles') ? 'active' : '' }}"
                                            href="{{ route('pages.all_articles') }}">{{ trans('menu.knowledge-all-article') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('pages/knowledge/article') ? 'active' : '' }}"
                                            href="{{ route('pages.article') }}">{{ trans('menu.knowledge-single-article') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="{{ route('pages.support') }}"
                                            class="{{ Request::is('pages/support/center') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-headphones"></span>
                                            <span class="menu-text">{{ trans('menu.support-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('pages.blog.one') }}"
                                            class="{{ Request::is('pages/blog/one') ? 'active' : '' }}">{{ trans('menu.blog-style-one') }}</a>
                                    </li>
                                    <li><a href="{{ route('pages.blog.two') }}"
                                            class="{{ Request::is('pages/blog/two') ? 'active' : '' }}">{{ trans('menu.blog-style-two') }}</a>
                                    </li>
                                    <li><a href="{{ route('pages.blog.three') }}"
                                            class="{{ Request::is('pages/blog/three') ? 'active' : '' }}">{{ trans('menu.blog-style-three') }}</a>
                                    </li>
                                    <li><a href="{{ route('pages.blog.detail') }}"
                                            class="{{ Request::is('pages/blog/detail') ? 'active' : '' }}">{{ trans('menu.blog-detail') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.terms') }}"
                                            class="{{ Request::is('pages/terms-and-condition') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-question-circle"></span>
                                            <span class="menu-text">{{ trans('menu.terms-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.maintenance') }}"
                                            class="{{ Request::is('pages/maintenance') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-airplay"></span>
                                            <span class="menu-text">{{ trans('menu.maintenance-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.404') }}"
                                            class="{{ Request::is('pages/404') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-exclamation-triangle"></span>
                                            <span class="menu-text">{{ trans('menu.not-found-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.coming_soon') }}"
                                            class="{{ Request::is('pages/coming-soon') ? 'active' : '' }}">
                                            <span class="nav-icon uil uil-sync"></span>
                                            <span class="menu-text">{{ trans('menu.coming-soon-menu-title') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-item has-subMenu">
                        <a href="#" class="{{ Request::is('ui/*') ? 'active' : '' }}">Components</a>
                        <ul class="megaMenu-wrapper megaMenu-wide">
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                    <li><a class="{{ Request::is('ui/alert') ? 'active' : '' }}"
                                            href="{{ route('ui.alert') }}">{{ trans('menu.ui-alert') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/avatar') ? 'active' : '' }}"
                                            href="{{ route('ui.avatar') }}">{{ trans('menu.ui-avatar') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/badge') ? 'active' : '' }}"
                                            href="{{ route('ui.badge') }}">{{ trans('menu.ui-badge') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/breadcrumps') ? 'active' : '' }}"
                                            href="{{ route('ui.breadcrumps') }}">{{ trans('menu.ui-breadcrumb') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/button') ? 'active' : '' }}"
                                            href="{{ route('ui.button') }}">{{ trans('menu.ui-button') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/card') ? 'active' : '' }}"
                                            href="{{ route('ui.card') }}">{{ trans('menu.ui-card') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/carousel') ? 'active' : '' }}"
                                            href="{{ route('ui.carousel') }}">{{ trans('menu.ui-carousel') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/checkbox') ? 'active' : '' }}"
                                            href="{{ route('ui.checkbox') }}">{{ trans('menu.ui-checkbox') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/collapse') ? 'active' : '' }}"
                                            href="{{ route('ui.collapse') }}">{{ trans('menu.ui-collapse') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/comments') ? 'active' : '' }}"
                                            href="{{ route('ui.comments') }}">{{ trans('menu.ui-comment') }}</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                    <li><a class="{{ Request::is('ui/dashboard-base') ? 'active' : '' }}"
                                            href="{{ route('ui.dashboard_base') }}">{{ trans('menu.ui-dashboard-base') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/datepicker') ? 'active' : '' }}"
                                            href="{{ route('ui.datepicker') }}">{{ trans('menu.ui-date-picker') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/drawer') ? 'active' : '' }}"
                                            href="{{ route('ui.drawer') }}">{{ trans('menu.ui-drawer') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/drag-drop') ? 'active' : '' }}"
                                            href="{{ route('ui.drag_drop') }}">{{ trans('menu.ui-drag-drop') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/dropdown') ? 'active' : '' }}"
                                            href="{{ route('ui.dropdown') }}">{{ trans('menu.ui-dropdown') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/empty') ? 'active' : '' }}"
                                            href="{{ route('ui.empty') }}">{{ trans('menu.ui-empty') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/grid') ? 'active' : '' }}"
                                            href="{{ route('ui.grid') }}">{{ trans('menu.ui-grid') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/input') ? 'active' : '' }}"
                                            href="{{ route('ui.input') }}">{{ trans('menu.ui-input') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/list') ? 'active' : '' }}"
                                            href="{{ route('ui.list') }}">{{ trans('menu.ui-list') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/menu') ? 'active' : '' }}"
                                            href="{{ route('ui.menu') }}">{{ trans('menu.ui-menu') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/message') ? 'active' : '' }}"
                                            href="{{ route('ui.message') }}">{{ trans('menu.ui-message') }}</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                    <li><a class="{{ Request::is('ui/modals') ? 'active' : '' }}"
                                            href="{{ route('ui.modals') }}">{{ trans('menu.ui-modal') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/notification') ? 'active' : '' }}"
                                            href="{{ route('ui.notification') }}">{{ trans('menu.ui-notification') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/page-header') ? 'active' : '' }}"
                                            href="{{ route('ui.page_header') }}">{{ trans('menu.ui-page-header') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/pagination') ? 'active' : '' }}"
                                            href="{{ route('ui.pagination') }}">{{ trans('menu.ui-pagination') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/progress') ? 'active' : '' }}"
                                            href="{{ route('ui.progress') }}">{{ trans('menu.ui-progress') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/radio') ? 'active' : '' }}"
                                            href="{{ route('ui.radio') }}">{{ trans('menu.ui-radio') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/rate') ? 'active' : '' }}"
                                            href="{{ route('ui.rate') }}">{{ trans('menu.ui-rate') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/result') ? 'active' : '' }}"
                                            href="{{ route('ui.result') }}">{{ trans('menu.ui-result') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/select') ? 'active' : '' }}"
                                            href="{{ route('ui.select') }}">{{ trans('menu.ui-select') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/skeleton') ? 'active' : '' }}"
                                            href="{{ route('ui.skeleton') }}">{{ trans('menu.ui-skeleton') }}</a>
                                    </li>

                                    <li><a class="{{ Request::is('ui/timepicker') ? 'active' : '' }}"
                                            href="{{ route('ui.timepicker') }}">{{ trans('menu.ui-time-picker') }}</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                    <li><a class="{{ Request::is('ui/slider') ? 'active' : '' }}"
                                            href="{{ route('ui.slider') }}">{{ trans('menu.ui-slider') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/spinner') ? 'active' : '' }}"
                                            href="{{ route('ui.spinner') }}">{{ trans('menu.ui-spinner') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/statistic') ? 'active' : '' }}"
                                            href="{{ route('ui.statistic') }}">{{ trans('menu.ui-statistic') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/steps') ? 'active' : '' }}"
                                            href="{{ route('ui.steps') }}">{{ trans('menu.ui-step') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/switch') ? 'active' : '' }}"
                                            href="{{ route('ui.switch') }}">{{ trans('menu.ui-switch') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/tab') ? 'active' : '' }}"
                                            href="{{ route('ui.tab') }}">{{ trans('menu.ui-tab') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/tags') ? 'active' : '' }}"
                                            href="{{ route('ui.tags') }}">{{ trans('menu.ui-tag') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/timeline') ? 'active' : '' }}"
                                            href="{{ route('ui.timeline') }}">{{ trans('menu.ui-timeline') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/timeline2') ? 'active' : '' }}"
                                            href="{{ route('ui.timeline2') }}">{{ trans('menu.ui-timeline2') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/timeline3') ? 'active' : '' }}"
                                            href="{{ route('ui.timeline3') }}">{{ trans('menu.ui-timeline3') }}</a>
                                    </li>
                                    <li><a class="{{ Request::is('ui/uploads') ? 'active' : '' }}"
                                            href="{{ route('ui.uploads') }}">{{ trans('menu.ui-upload') }}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-right">
        <ul class="navbar-right__menu">
            <li class="nav-search">
                <a href="#" class="search-toggle">
                    <i class="uil uil-search"></i>
                    <i class="uil uil-times"></i>
                </a>
                <form action="/" class="search-form-topMenu">
                    <span class="search-icon uil uil-search"></span>
                    <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..."
                        aria-label="Search">
                </form>
            </li>
            <li class="nav-message">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="{{ asset('assets/img/svg/message.svg') }}" alt="img">
                    </a>
                    <div class="dropdown-wrapper">
                        <h2 class="dropdown-wrapper__title">Messages <span
                                class="badge-circle badge-success ms-1">2</span></h2>
                        <ul>
                            <li class="author-online has-new-message">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-offline has-new-message">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-online has-new-message">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-offline">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-offline">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="" class="dropdown-wrapper__more">See All Message</a>
                    </div>
                </div>
            </li>
            <li class="nav-notification">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="{{ asset('assets/img/svg/alarm.svg') }}" alt="img">
                    </a>
                    <div class="dropdown-wrapper">
                        <h2 class="dropdown-wrapper__title">Notifications <span
                                class="badge-circle badge-warning ms-1">4</span></h2>
                        <ul>
                            <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--primary">
                                    <img src="{{ asset('assets/img/svg/inbox.svg') }}" alt="inbox"
                                        class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--secondary">
                                    <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload"
                                        class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--success">
                                    <img src="{{ asset('assets/img/svg/log-in.svg') }}" alt="log-in"
                                        class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--info">
                                    <img src="{{ asset('assets/img/svg/at-sign.svg') }}" alt="at-sign"
                                        class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--danger">
                                    <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart"
                                        class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate"
                                            style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                    </div>
                </div>
            </li>
            <li class="nav-settings">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle">
                        <img src="{{ asset('assets/img/setting.png') }}" alt="img">
                    </a>
                    <div class="dropdown-wrapper dropdown-wrapper--large">
                        <ul class="list-settings">
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/mail.png') }}" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">All Features</a>
                                    </h6>
                                    <p>Introducing Increment subscriptions </p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/color-palette.png') }}"
                                        alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Themes</a>
                                    </h6>
                                    <p>Third party themes that are compatible</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/home.png') }}" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Payments</a>
                                    </h6>
                                    <p>We handle billions of dollars</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/video-camera.png') }}"
                                        alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Design Mockups</a>
                                    </h6>
                                    <p>Share planning visuals with clients</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/document.png') }}"
                                        alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Content Planner</a>
                                    </h6>
                                    <p>Centralize content gethering and editing</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/microphone.png') }}"
                                        alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Diagram Maker</a>
                                    </h6>
                                    <p>Plan user flows & test scenarios</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-flag-select">
                <div class="dropdown-custom">
                    @switch(app()->getLocale())
                        @case('en')
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/eng.png') }}"
                                    alt="" class="rounded-circle"></a>
                        @break

                        @case('ar')
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/iraq.png') }}"
                                    alt="" class="rounded-circle"></a>
                        @break

                        @case('gr')
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/ger.png') }}"
                                    alt="" class="rounded-circle"></a>
                        @break

                        @default
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/eng.png') }}"
                                    alt="" class="rounded-circle"></a>
                        @break
                    @endswitch
                    @if (isset($find_customer))
                        @foreach ($find_customer as $customer)
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href="{{ route(Route::currentRouteName(), ['en', $customer->id]) }}"><img
                                        src="{{ asset('assets/img/eng.png') }}" alt=""> English</a>
                                <a href="{{ route(Route::currentRouteName(), ['ar', $customer->id]) }}"><img
                                        src="{{ asset('assets/img/iraq.png') }}" alt=""> Arabic</a>
                                <a href="{{ route(Route::currentRouteName(), ['gr', $customer->id]) }}"><img
                                        src="{{ asset('assets/img/ger.png') }}" alt=""> German</a>
                            </div>
                        @endforeach
                    @else
                        <div class="dropdown-wrapper dropdown-wrapper--small">
                            <a href="{{ route(Route::currentRouteName(), 'en') }}"><img
                                    src="{{ asset('assets/img/eng.png') }}" alt=""> English</a>
                            <a href="{{ route(Route::currentRouteName(), 'ar') }}"><img
                                    src="{{ asset('assets/img/iraq.png') }}" alt=""> Arabic</a>
                            <a href="{{ route(Route::currentRouteName(), 'gr') }}"><img
                                    src="{{ asset('assets/img/ger.png') }}" alt=""> German</a>
                        </div>
                    @endif
                </div>
            </li>
            <li class="nav-author">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle"><img
                            src="{{ asset('assets/img/author-nav.jpg') }}" alt="" class="rounded-circle">
                        @if (Auth::check())
                            <span class="nav-item__title">{{ Auth::user()->name }}<i
                                    class="las la-angle-down nav-item__arrow"></i></span>
                        @endif
                    </a>
                    <div class="dropdown-wrapper">
                        <div class="nav-author__info">
                            <div class="author-img">
                                <img src="{{ asset('assets/img/author-nav.jpg') }}" alt=""
                                    class="rounded-circle">
                            </div>
                            <div>
                                @if (Auth::check())
                                    <h6 class="text-capitalize">{{ Auth::user()->name }}</h6>
                                @endif
                                <span>UI Designer</span>
                            </div>
                        </div>
                        <div class="nav-author__options">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user"
                                            class="svg"> Profile</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/settings.svg') }}" alt="settings"
                                            class="svg"> Settings</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/key.svg') }}" alt="key"
                                            class="svg"> Billing</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/users.svg') }}" alt="users"
                                            class="svg"> Activity</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/bell.svg') }}" alt="bell"
                                            class="svg"> Help</a>
                                </li>
                            </ul>
                            <a href="" class="nav-author__signout"
                                onclick="event.preventDefault();document.getElementById('logout').submit();">
                                <img src="{{ asset('assets/img/svg/log-out.svg') }}" alt="log-out" class="svg">
                                Sign Out</a>
                            <form style="display:none;" id="logout" action="{{ route('logout') }}"
                                method="POST">
                                @csrf
                                @method('post')
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="navbar-right__mobileAction d-md-none">
            <a href="#" class="btn-search">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg feather-search">
                <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg feather-x">
            </a>
            <a href="#" class="btn-author-action">
                <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg"></a>
        </div>
    </div>
</nav>
