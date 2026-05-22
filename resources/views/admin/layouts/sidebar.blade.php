<!-- Sidebar -->
<div class="sidebar">
    <h2 class="text-center mb-4">
        @php
            $logo = \App\Models\Setting::where('key', 'logo')->value('value');

            $imagePath =
                !empty($logo) && file_exists(public_path($logo)) ? asset($logo) : asset('backend/images/kamala.webp');
        @endphp

        <img src="{{ $imagePath }}" alt="Kamala" height="65">

    </h2>

    <a href="{{ route('admin.index') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <i class="fa-solid fa-gauge"></i> Dashboard
    </a>

    <a href="{{ route('pages.index') }}" class="{{ request()->is('admin/pages*') ? 'active' : '' }}">
        <i class="fa-solid fa-pen-nib"></i> Landing Pages
    </a>

    <a href="{{ route('sitemap.sitemap-robots.index') }}" class="{{ request()->is('admin/sitemap*') ? 'active' : '' }}">
        <i class="fa-solid fa-sitemap"></i> Sitemap & Robots
    </a>

    <a href="{{ route('enquiry.index') }}" class="{{ request()->is('admin/enquiry*') ? 'active' : '' }}">
        <i class="fa-solid fa-envelope-open-text"></i> Enquiries List
    </a>

    <a href="{{ route('service.index') }}" class="{{ request()->is('admin/service*') ? 'active' : '' }}">
        <i class="fa-solid fa-users"></i> Services
    </a>


    <style>
        .menu-item {
            width: 100%;
        }

        .menu-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .submenu {
            display: none;
            padding-left: 22px;
        }

        .menu-item.active .submenu {
            display: block;
        }

        .submenu a {
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }

        .submenu a.active {
            font-weight: 600;
        }

        .arrow {
            transition: transform 0.3s ease;
        }

        .menu-item.active .arrow {
            transform: rotate(180deg);
        }
    </style>
    {{-- EXPAND MENU --}}
    @php
        $manageActive =
            request()->is('admin/blog*') ||
            request()->is('admin/portfocategory*') ||
            request()->is('admin/portfolio*') ||
            request()->is('admin/faq*');
    @endphp

    <div class="menu-item {{ $manageActive ? 'active' : '' }}">
        <a href="javascript:void(0)" class="menu-toggle" onclick="toggleMenu(this)">
            <div>
                <i class="fa-solid fa-globe"></i> Web Setup
            </div>
            <i class="fa-solid fa-angle-down arrow"></i>
        </a>

        <div class="submenu">
            <a href="{{ route('blog.index') }}" class="{{ request()->is('admin/blog*') ? 'active' : '' }}">
                - Blog
            </a>

            <a href="{{ route('portfolio-category.index') }}"
                class="{{ request()->is('admin/portfocategory*') ? 'active' : '' }}">
                - Portfolio Categories
            </a>

            <a href="{{ route('portfolio.index') }}" class="{{ request()->is('admin/portfolio*') ? 'active' : '' }}">
                - Portfolio
            </a>

            <a href="{{ route('faq.index') }}" class="{{ request()->is('admin/faq*') ? 'active' : '' }}">
                - Faq List
            </a>

        </div>
    </div>

    <a href="{{ route('setting.index') }}" class="{{ request()->is('admin/setting*') ? 'active' : '' }}">
        <i class="fa-solid fa-gear"></i> Settings
    </a>

    <a href="{{ route('notification.index') }}" class="{{ request()->is('admin/notification*') ? 'active' : '' }}">
        <i class="fa-solid fa-bell"></i> Notifications
        @if ($notifications->count() > 0)
            <span class="badge bg-danger">{{ $notifications->count() }}</span>
        @endif
    </a>
    <script>
        function toggleMenu(element) {
            element.parentElement.classList.toggle('active');
        }
    </script>

</div>
