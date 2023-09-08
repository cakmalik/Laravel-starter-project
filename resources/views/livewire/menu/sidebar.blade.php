<div>
    {{-- The Master doesn't talk, he acts. --}}
    <ul class="space-y-1.5">
        {{-- jomblo active --}}
        <x-bit.menu-item href="{{ route('home') }}" icon="house-simple" :title="__('app.dashboard')" :active="request()->routeIs('home')" />
        <x-bit.menu-item href="{{ route('about') }}" icon="address-book" :title="__('app.about')" :active="request()->routeIs('about')" />
        <x-bit.menu-item type="sub" icon="users" :title="__('app.users')" :active="request()->routeIs('users')" />
        <x-bit.menu-item type="sub" icon="nut" :title="__('app.settings')" :active="request()->routeIs('users')" :submenu="[
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
    </ul>
</div>
