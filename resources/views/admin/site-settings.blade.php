<div class="container-xxl">
    <x-slot:phead>Site Settings</x-slot>

    @livewire('admin.inc.setting-text')

    <livewire:admin.inc.setting-logo />

    <livewire:admin.inc.setting-logodark />

    @include('components.alerts')
</div>
