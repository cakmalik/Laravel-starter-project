@props(['title' => 'Modal Title', 'name' => 'modal'])
<div x-data="{ show: false, name: '{{ $name }}' }" x-show="show" x-on:open-modal.window="show=($event.detail.name===name)"
    x-on:close-modal.window="show=false" x-on:keydown.escape.window="show=false" style="display: none">
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md p-4 rounded-lg shadow-lg dark:bg-gray-800">
            <div class="flex justify-between items-center pb-3">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $title }}</h2>
                <button @click="show = false" class="text-gray-500 hover:text-gray-400 focus:outline-none">
                    <span class="sr-only">Close</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M14.293 5.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 11-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 11-1.414-1.414L8.586 10 4.293 5.293a1 1 0 111.414-1.414L10 8.586l4.293-4.293z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="px-4 py-2">
                {{ $slot }}
            </div>

            {{-- footer --}}
            <div class="flex justify-end items-center w-100  p-3">
                <button @click="show = false"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-600 font-semibold px-6 py-2 mr-2.5 rounded-md">
                    Cancel
                </button>
                {{ $footer ?? '' }}
            </div>
        </div>
    </div>


</div>
