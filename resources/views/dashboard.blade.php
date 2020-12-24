<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TopBar') }}
        </h2>
    </x-slot>

    <x-slot name="aside">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SideBar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                <x-aside-layout />
                <x-content-layout />
                <x-footer-layout />
                <x-header-layout />
            </div>
        </div>
    </div>
</x-app-layout>
