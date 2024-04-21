@props(['value'])

<div {{ $attributes->merge(['class' => 'relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in']) }}>
    <input type="checkbox" name="toggle" id="toggle" {{ $value ? 'checked' : '' }} class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>

<style>
.toggle-checkbox:checked {
  top: 0;
  right: 0;
  background-color: #4B5563;
}

.toggle-label {
  width: 34px;
  height: 14px;
}
</style>
