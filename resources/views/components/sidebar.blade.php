<aside class="sidebar">
    <button type="button" class="sidebar-close-btn !mt-4">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>

    <!-- Logo -->
    <div>
        <a href="/" class="sidebar-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>

    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">

            {{-- ================= MENU ADMIN ================= --}}
            @role('admin')
                <li class="sidebar-menu-group-title">Menu Admin</li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>

                 <li class="sidebar-menu-group-title">Managemen Projects</li>

                <li>
                    <a href="{{ route('project.index') }}">
                        <iconify-icon icon="solar:document-add-outline" class="menu-icon"></iconify-icon>
                        <span>Proyek</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('webkantor.index') }}">
                        <iconify-icon icon="mdi:office-building-outline" class="menu-icon"></iconify-icon>
                        <span>Web Kantor</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('server.index') }}">
                        <iconify-icon icon="solar:server-outline" class="menu-icon"></iconify-icon>
                        <span>Server</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('domain.index') }}">
                        <iconify-icon icon="solar:global-outline" class="menu-icon"></iconify-icon>
                        <span>Domain</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('cdn.index') }}">
                        <iconify-icon icon="solar:cloud-outline" class="menu-icon"></iconify-icon>
                        <span>CDN</span>
                    </a>
                </li>
            @endrole


            {{-- ================= MENU MARKETING ================= --}}
            @role('marketing')
                <li class="sidebar-menu-group-title">Marketing</li>
                <li>
                    <a href="{{ route('marketing.dashboard') }}">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endrole

            {{-- ================= MENU CLIENT ================= --}}
            @role('client')
                <li class="sidebar-menu-group-title">Client</li>
                <li>
                    <a href="{{ route('client.dashboard') }}">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endrole

            {{-- ================= MENU INVESTOR ================= --}}
            @role('investor')
                <li class="sidebar-menu-group-title">Investor</li>
                <li>
                    <a href="{{ route('investor.dashboard') }}">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endrole

        </ul>
    </div>
</aside>
