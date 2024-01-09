<x-app-layout>
    <back-office-layout
        title="{{ __('Dashboard') }}"
        :sidebar-nav-items="{{ json_encode($sidebarNavItems) }}"
    >

    </back-office-layout>
</x-app-layout>
