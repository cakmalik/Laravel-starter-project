{{-- props: href, icon, title, active --}}
@props(['type' => 'single', 'href' => 'javascript:;', 'icon' => '', 'title' => 'Menu Item', 'active' => false, 'submenu' => false])
<div class="capitalize">
    @if ($type == 'single' || !$submenu)
        <li>
            <a wire:navigate
                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900  dark:text-gray-400 @if ($active) dark:bg-gray-900 bg-gray-100 dark:text-white @endif"
                href="{{ $href }}">
                <i class="ph ph-{{ $icon }} scale-125"></i>
                <span>{{ $title }}</span>
            </a>
        </li>
    @else
        {{-- NOTE:Single  --}}
        <li class="hs-accordion" id="account-accordion">
            <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white"
                href="{{ $href }}">
                <i class="ph ph-{{ $icon }} scale-125"></i>
                <span>{{ $title }}</span>

                <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                </svg>

                <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                </svg>
            </a>
            <div id="account-accordion-child"
                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                <ul class="pt-2 pl-2">
                    @foreach ($submenu as $sm)
                        @if (count($sm['child']) == 0)
                            <li>
                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300"
                                    href="{{ $sm['href'] }}">
                                    {{ __($sm['title']) }}
                                </a>
                            </li>
                        @else
                            <li class="hs-accordion" id="users-accordion-sub-1">
                                <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white"
                                    href="{{ $sm['href'] }}">
                                    {{ __($sm['title']) }}

                                    <svg class="hs-accordion-active:block ml-auto hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    </svg>

                                    <svg class="hs-accordion-active:hidden ml-auto block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400"
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    </svg>
                                </a>

                                <div id="users-accordion-sub-1-child"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                                    <ul class="pt-2 pl-2">
                                        @foreach ($sm['child'] as $ch)
                                            <li>
                                                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300"
                                                    href="{{ $ch['href'] }}">
                                                    {{ __($ch['title']) }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </li>
    @endif
</div>
