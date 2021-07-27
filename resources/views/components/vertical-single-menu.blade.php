
<li class="{{ active_menu($href) }} nav-item">
    <a class="d-flex align-items-center" href="{{ $href }}">
        <i data-feather="{{ $icon }}"></i><span class="menu-title text-truncate">
            {{ $slot }}
        </span>
    </a>
</li>