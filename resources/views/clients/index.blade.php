<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative overflow-x-auto">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-4">
                            {{ __('Name') }}
                        </th>
                        <th class="px-6 py-4">
                            {{ __('Email') }}
                        </th>
                        <th class="px-6 py-4">
                            {{ __('City') }}
                        </th>
                        <th class="px-6 py-4">
                            {{ __('State') }}
                        </th>
                        <th class="px-6 py-4">
                            {{ __('Edit') }}
                        </th>
                        <th class="px-6 py-4">
                            {{ __('Delete') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $client->user->name }}
                            </th>
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $client->user->email }}
                            </th>
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $client->address->city }}
                            </th>
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $client->address->state }}
                            </th>
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('clients.edit', $client->id) }}" class="text-blue-600 font-bold">
                                    {{ __('Edit') }}
                                </a>
                            </th>
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="" class="text-red-600 font-bold">
                                    {{ __('Delete') }}
                                </a>
                            </th>
                        </tr>
                    @endforeach
            </table>
            <div class="py-2">
                {{$clients->links()}}
            </div>

        </div>
    </div>

    </x-app-layo>
