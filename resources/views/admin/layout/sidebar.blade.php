<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/posts') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.post.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/roles') }}"><i class="nav-icon icon-flag"></i> {{ trans('admin.role.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/bravo-bookings') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.bravo-booking.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/bravo-booking-payments') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.bravo-booking-payment.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
