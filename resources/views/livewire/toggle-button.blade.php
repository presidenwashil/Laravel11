<div>
    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
        <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" checked="{{$model->{$field} ? 'true' : 'false'}}" wire:click="toggle"/>
        <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
    </div>
    <style>
    .toggle-checkbox {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .toggle-label {
        position: relative;
        width: 40px;
        height: 20px;
        background-color: #ccc;
        border-radius: 100px;
    }

    .toggle-label::after {
        content: "";
        position: absolute;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: white;
        top: 1px;
        left: 1px;
        transition: all 0.3s;
    }

    .toggle-checkbox:checked + .toggle-label {
        background-color: #4B5563;
    }

    .toggle-checkbox:checked + .toggle-label::after {
        transform: translateX(20px);
    }
    </style>
</div>
