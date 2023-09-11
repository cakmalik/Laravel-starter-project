<!-- Start coding here -->
<div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
    <div class="flex items-center justify-between d p-4">
        {{ $header }}
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 dark:text-white uppercase bg-gray-50 dark:bg-gray-600">
                {{ $thead }}
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
        </table>
    </div>

    <div class="py-4 px-3">
        <div class="flex justify-between">
            {{ $footer }}
        </div>
    </div>
</div>
