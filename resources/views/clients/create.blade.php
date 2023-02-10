<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="m-5">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-1/2" type="text" name="name" :value="old('name')"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="m-5">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-1/2" type="email" name="email" :value="old('email')" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="m-5">
                    <x-input-label for="address_id" :value="__('Selecione sua cidade')" />
                    <x-select name="address_id" />
                    <x-input-error :messages="$errors->get('address_id')" class="mt-2" />
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    </x-app-layo>
