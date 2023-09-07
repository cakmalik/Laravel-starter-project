<div>
    {{-- The Master doesn't talk, he acts. --}}
    <ul class="space-y-1.5">
        {{-- jomblo active --}}
        <x-bit.menu-item href="{{ route('home') }}" icon="house-simple" title="Dashboard" :active="request()->routeIs('home')" />
        <x-bit.menu-item href="{{ route('about') }}" icon="address-book" title="About" :active="request()->routeIs('about')" />
        <x-bit.menu-item type="sub" icon="users" title="Users" :active="request()->routeIs('users')" />
        <x-bit.menu-item type="sub" icon="nut" :title="'app.previous'" :active="request()->routeIs('users')" :submenu=[ ] />
    </ul>
</div>
