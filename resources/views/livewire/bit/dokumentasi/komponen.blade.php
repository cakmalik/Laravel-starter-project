<div>
    <x-Bit.modal name="test" title="Modalll">
        @slot('body')
            Yakan
        @endslot
        @slot('footer')
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-md">
                Save
            </button>
        @endslot
    </x-Bit.modal>

    <button x-data x-on:click="$dispatch('open-modal',{name:'test'})"
        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        Buka Modal
    </button>
</div>
