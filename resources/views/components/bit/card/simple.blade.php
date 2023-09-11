@props(['title' => '', 'subtitle' => '', 'link' => null])
<div
    {{ $attributes->merge(['type' => 'button', 'class' => 'flex flex-col bg-white border shadow-sm rounded-xl p-4 md:p-5 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]']) }}>
    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
        {{ $title }}
    </h3>
    <p class="mt-1 text-xs font-medium uppercase text-gray-500 dark:text-gray-500">
        {{ $subtitle }}
    </p>
    <p class="mt-2 text-gray-800 dark:text-gray-400">
        {{ $slot }}
    </p>
    @isset($link)
        <a class="inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-700" href="#">
            asd
            <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    @endisset
</div>
