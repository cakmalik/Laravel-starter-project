<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-1">

            @if (flash()->message)
                <x-bit.alert :level="flash()->level" :message="flash()->message" />
            @endif
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        {{-- <div class="flex space-x-3 items-center">
                            <label class="w-40 text-sm font-medium text-gray-900">User Type :</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">All</option>
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">name</th>
                                <th scope="col" class="px-4 py-3">email</th>
                                <th scope="col" class="px-4 py-3">Role</th>
                                <th scope="col" class="px-4 py-3">Joined</th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $i)
                                <tr wire:key="{{ $i->id }}" class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $i->name }}</th>
                                    <td class="px-4 py-3">{{ $i->username }}</td>
                                    <td class="px-4 py-3 text-green-500">
                                        @php
                                            $roleNames = $i->getRoleNames();
                                            $roleCount = count($roleNames);
                                        @endphp

                                        @foreach ($roleNames as $key => $rn)
                                            {{ $rn }}
                                            @if ($key < $roleCount - 1)
                                                ,
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="px-4 py-3">{{ $i->created_at }}</td>
                                    <td wire:click="delete({{ $i->id }})" class="">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <lottie-player
                                            src="https://lottie.host/e3ddeb19-0925-4ae8-879b-8a747239f0c5/Q0qAwisxmI.json"
                                            background="transparent" speed="1" style="width: 300px; height: 300px"
                                            loop autoplay direction="1" mode="normal"></lottie-player>
                                        {{ __('Not found') }}
                                    </th>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3">
                    <div class="flex justify-between">
                        <div class="flex items-center mb-3 gap-1">
                            <label class="text-sm font-medium text-gray-900">Per Page</label>
                            <select wire:model.live="perPage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-1 w-14">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
