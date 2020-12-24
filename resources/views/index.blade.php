<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('TopBar') }}
        </h2>
    </x-slot>

    <x-slot name="aside">
        <h2 class="">
            {{ __('SideBar') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="">
            <div class="">
                <x-aside-layout />
                <x-content-layout />
                <x-footer-layout />
                <x-header-layout />
            </div>
        </div>
    </div>
</x-app-layout>
