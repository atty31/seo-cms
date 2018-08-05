<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="#" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/{{ Configurations::getAdminUrl() }}/home"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.main-menu') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/{{ Configurations::getAdminUrl() }}/categories"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.categories') }}</span></a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/subcategories"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.subcategories') }}</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('admin/pages') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.pages') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/{{ Configurations::getAdminUrl() }}/pages">{{ trans('adminlte_lang::message.pages') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/static/pages">{{ trans('adminlte_lang::message.static-pages') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/posts/pages">{{ trans('adminlte_lang::message.posts') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/default">{{ trans('adminlte_lang::message.default') }}</a></li>
                </ul>
            </li>
            <li><a href="/{{ Configurations::getAdminUrl() }}/seo"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.seo') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.socials') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/{{ Configurations::getAdminUrl() }}/facebook">{{ trans('adminlte_lang::message.facebook') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/gplus">{{ trans('adminlte_lang::message.gplus') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/twitter">{{ trans('adminlte_lang::message.twitter') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/instagram">{{ trans('adminlte_lang::message.instagram') }}</a></li>
                </ul>
            </li>
            <li><a href="/{{ Configurations::getAdminUrl() }}/comments"><i class='fa fa-file-text-o'></i> <span>{{ trans('adminlte_lang::message.comments') }}</span></a></li>
            <li><a href="/{{ Configurations::getAdminUrl() }}/media"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.media') }}</span></a></li>
            <li>
                <a href="#"><i class="fa fa-link"></i><span>{{ trans('adminlte_lang::message.static-block') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/{{ Configurations::getAdminUrl() }}/blocks">{{ trans('adminlte_lang::message.all-blocks') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/blocks/type/footer">{{ trans('adminlte_lang::message.footer-block') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/blocks/type/header">{{ trans('adminlte_lang::message.header-block') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/blocks/type/burger-menu">{{ trans('adminlte_lang::message.burger-menu-block') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/blocks/type/sidebar">{{ trans('adminlte_lang::message.sidebar-block') }}</a></li>
                </ul>
            </li>
            <li><a href="/{{ Configurations::getAdminUrl() }}/tags"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.tags') }}</span></a></li>
            <li><a href="/{{ Configurations::getAdminUrl() }}/subscription"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.subscriptions') }}</span></a></li>
            <li><a href="/{{ Configurations::getAdminUrl() }}/amazon-integration"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.amazon-integration') }}</span></a></li>
            <li>
                <a href="/{{ Configurations::getAdminUrl() }}/tags"><i class="fa fa-link"></i> <span>{{ trans('adminlte_lang::message.settings') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/{{ Configurations::getAdminUrl() }}/homepage">{{ trans('adminlte_lang::message.homepage') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/footer">{{ trans('adminlte_lang::message.footer') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/menu-settings">{{ trans('adminlte_lang::message.menu-settings') }}</a></li>
                    <li><a href="/{{ Configurations::getAdminUrl() }}/sidebar-menu">{{ trans('adminlte_lang::message.logo') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>