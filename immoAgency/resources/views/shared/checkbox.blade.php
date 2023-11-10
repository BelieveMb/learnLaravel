@php
    $class ??= null;
@endphp

<div>
    <input type="hidden" name="{{ $name }}" value="0">
    <input @checked(old ($value ?? false)) type="hidden" name="{{ $name }}" value="1" class="bg-blue-700 @error($name)
        bg-red-700 @enderror" role="switch">
    <label for="{{ $name }}">{{ $label }}</label>


    <!-- la gestion d'erreur -->
    @error($name)
        <div class="bg-red-700 text-white p-2 rounded-2xl">
            {{$message}}
        </div>
    @enderror
</div>