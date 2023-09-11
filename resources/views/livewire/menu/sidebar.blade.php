<div>
    {{-- The Master doesn't talk, he acts. --}}
    <ul class="space-y-1.5">
        {{-- jomblo active --}}
        <x-bit.menu-item href="{{ route('dashboard') }}" icon="house-simple" :title="__('dashboard')" :active="request()->routeIs('dashboard')" />
        <x-bit.menu-item href="{{ route('about') }}" icon="address-book" :title="__('about')" :active="request()->routeIs('about')" />
        <x-bit.menu-item type="sub" icon="users" :title="__('users')" :active="request()->routeIs('users')"
            href="{{ route('user.table') }}" />
        <x-bit.menu-item type="sub" icon="nut" :title="__('settings')" :active="request()->routeIs('users')" :submenu="[
            [
                'title' => 'Profile',
                'href' => route('about'),
                'active' => request()->routeIs('about'),
                'child' => [],
            ],
        
            [
                'title' => 'submenu',
                'href' => '#',
                'active' => false,
                'child' => [
                    [
                        'title' => 'Submenu 1',
                        'href' => route('about'),
                        'active' => request()->routeIs('about'),
                    ],
                    [
                        'title' => 'Submenu 2',
                        'href' => route('about'),
                        'active' => request()->routeIs('about'),
                    ],
                    [
                        'title' => 'Submenu 3',
                        'href' => route('about'),
                        'active' => request()->routeIs('about'),
                    ],
                ],
            ],
            [
                'title' => 'Password',
                'href' => route('about'),
                'active' => request()->routeIs('about'),
                'child' => [],
            ],
        ]" />
        <x-bit.menu-item type="sub" icon="nut" :title="__('documentation')" :active="request()->routeIs('bit.doc.component')" :submenu="[
            [
                'title' => 'Contoh Komponen',
                'href' => route('bit.doc.component'),
                'active' => request()->routeIs('bit.doc.component'),
                'child' => [],
            ],
        ]" />
    </ul>
</div>
