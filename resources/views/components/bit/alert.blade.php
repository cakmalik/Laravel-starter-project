@props(['level' => 'info', 'message' => ''])
<div>
    @switch($level)
        @case('success')
            <div class="mb-3 bg-green-50 border border-green-200 text-sm text-green-600 rounded-md p-4 flex items-center gap-2"
                role="alert">
                <i class="scale-125 ph ph-check-circle"></i> {{ $message }}
            </div>
        @break

        @case('danger')
            <div class="mb-3 bg-red-50 border border-red-200 text-sm text-red-600 rounded-md p-4 flex items-center gap-2"
                role="alert">
                <i class="scale-125 ph ph-x-circle"></i> {{ $message }}
            </div>
        @break

        @case('warning')
            <div class="mb-3 bg-orange-50 border border-orange-200 text-sm text-orange-600 rounded-md p-4 flex items-center gap-2"
                role="alert">
                <i class="scale-125 ph ph-warning-circle"></i> {{ $message }}
            </div>
        @break

        @default
            <div class="mb-3 bg-blue-50 border border-blue-200 text-sm text-blue-600 rounded-md p-4 flex items-center gap-2"
                role="alert">
                <i class="scale-125 ph ph-info"></i> {{ $message }}
            </div>
    @endswitch
</div>
