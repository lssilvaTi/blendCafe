<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/stocks') }}"><i class="nav-icon icon-ghost"></i> {{ trans('admin.stock.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/coffee-grains') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.coffee-grain.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/blend-details') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.blend-detail.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/getting-blends') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.getting-blend.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
