<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- resources/views/dashboard.blade.php -->
                    <div style="padding: 20px;">
                        <nav style="margin-top: 20px;">
                            <ul style="list-style: none; padding: 0;">
                                <li style="margin-bottom: 10px;">
                                    <a href="{{ route('favorite.form') }}" style="text-decoration: none; padding: 10px 15px; background-color: #007bff; color: white; border-radius: 4px; display: inline-block; transition: background-color 0.3s;">
                                        Add Favorite Color
                                    </a>
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <a href="{{ route('favorites.list') }}" style="text-decoration: none; padding: 10px 15px; background-color: #28a745; color: white; border-radius: 4px; display: inline-block; transition: background-color 0.3s;">
                                        View Favorite Colors
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
