<?php

use App\Models\Period;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    #[Validate('required|string|max:255')]
    public string $year = '';

    #[Validate('required|string|max:255')]
    public string $semester = '';

    public function store(): void
    {
        $validated = $this->validate();

        Period::create($validated);

        $this->year = '';

        $this->semester = '';
    }
}; ?>

<div>
    <form wire:submit="store">
        <x-input-label for="year" :value="__('Year')" />
        <x-text-input wire:model="year" id="year" type="text" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
        <x-input-error :messages="$errors->get('year')" class="mt-2" />

        <x-input-label for="semester" :value="__('Semester')" />
        <x-text-input wire:model="semester" id="semester" type="text" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
        <x-input-error :messages="$errors->get('semester')" class="mt-2" />

        <x-primary-button class="mt-4">{{ __('Save') }}</x-primary-button>
    </form>
</div>
