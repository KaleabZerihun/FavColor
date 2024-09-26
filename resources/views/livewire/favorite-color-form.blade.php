<!-- resources/views/livewire/favorite-color-form.blade.php -->
<div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    @if (session()->has('message'))
        <div style="padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 15px;">
            {{ session('message') }}
        </div>
    @endif

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Add Fav Color') }}
            </h2>
        </x-slot>

    <form wire:submit.prevent="submit" style="display: flex; flex-direction: column; gap: 15px;">
        <div style="display: flex; flex-direction: column;">
            <label for="name" style="margin-bottom: 5px; font-weight: bold;">Name</label>
            <input
                type="text"
                id="name"
                wire:model="name"
                style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"
            />
            @error('name')
            <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="favorite_color" style="margin-bottom: 5px; font-weight: bold;">Favorite Color</label>
            <input
                type="text"
                id="favorite_color"
                wire:model="favorite_color"
                style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;"
            />
            @error('favorite_color')
            <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
            @enderror
        </div>

        <button
            type="submit"
            style="padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; text-align: center; transition: background-color 0.3s;">
            Submit
        </button>
    </form>
</div>
