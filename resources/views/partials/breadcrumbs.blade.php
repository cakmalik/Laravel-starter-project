@if (count($breadcrumbs))
    <ol class="ml-3 flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li class="flex items-center text-sm text-gray-800 dark:text-gray-400"><a
                        href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-400" aria-current="page">
                    {{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>
@endif
