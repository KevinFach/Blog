<x-layouts.admin>

    <div class="flex justify-between items-center mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{route('admin.dashboard')}}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Categorías</flux:breadcrumbs.item>
        </flux:breadcrumbs>

    </div>

    <div class="bg-white px-6 py-8 rounded-lg shadow-lg">
        <flux:field>
            <flux:label>Username</flux:label>

            <flux:description>This will be publicly displayed.</flux:description>

            <flux:input />

            <flux:error name="username" />
        </flux:field>
    </div>

</x-layouts.admin>