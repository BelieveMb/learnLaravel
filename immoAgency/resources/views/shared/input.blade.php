<!-- ce formulaire nous permet d'avoir un formu type( par défaut) et on inclut ce form dans la page demandée-->
@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);

@endphp
<!-- on définit les variables par défauts, si il n'existe pas, on prend ça -->
<div @class(["flex flex-col  ", $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($type==='textarea')
        <textarea class="border-2 rounded-xl w-full" id=" {{$name}} "  name=" {{$name}} "> {{ old($name, $value) }} </textarea>
    @else
        <input class="border-2 rounded-xl w-full" type="{{ $type }}" id=" {{$name}} "  name=" {{$name}} " value=" {{ old($name, $value) }} ">    
    @endif
    
    <!-- la gestion d'erreur -->
    @error($name)
        <div class="bg-red-700 text-white p-2 rounded-2xl">
            {{$message}}
        </div>
    @enderror
</div>
