@extends ('admin.admin')

@section('title', $property->exists ? "Editer un bien" : "Créer un bien")
<!-- on vérifie si property exite  alors... -->

@section('content')
<div class="flex justify-between">
    <a href="{{ route('admin.property.index') }} ">Liste</a>
</div>
    <h1>@yield('title')</h1>

    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">


        @csrf
        @method($property->exists ? 'put' : 'post')

        <!-- on inclut l'input par défaut avec de new param pour générer des champs -->
        <div class="flex flex-col gap-2 justify-start my-6 mx-32">
            <div class="flex gap-4  align-center">
                @include('shared.input',['label'=> 'Titre', 'name' => 'title', 'value' =>$property->title ] )
            </div>
            <div class="flex gap-4  align-center">
                @include('shared.input',['name' => 'surface', 'value' =>$property->surface ] )
                @include('shared.input',['label'=> 'Prix', 'name' => 'price', 'value' =>$property->price ] )
            </div>

            <div class="flex gap-4 ">
                @include('shared.input',['type'=>'textarea','label'=> 'Description', 'name' => 'description', 'value' =>$property->description ] )
            </div>
            <div class="flex gap-4  align-center">
                @include('shared.input',['name' => 'rooms', 'value' =>$property->rooms ] )
                @include('shared.input',['label'=> 'Bedrooms', 'name' => 'bedrooms', 'value' =>$property->bedrooms ] )
                @include('shared.input',['label'=> 'Floor', 'name' => 'floor', 'value' =>$property->floor ] )
            </div>

            <div class="flex gap-4  align-center">
                @include('shared.input',['name' => 'adress', 'value' =>$property->adress ] )
                @include('shared.input',['label'=> 'City', 'name' => 'city', 'value' =>$property->city ] )
                @include('shared.input',['label'=> 'postal_code', 'name' => 'postal_code', 'value' =>$property->postal_code ] )
            </div>

            @include('shared.checkbox',['label'=> 'Vendu', 'name' => 'sold', 'value' =>$property->sold ] )


            <div class="w-1/2">
                <button class="bg-blue-700 py-1 px-2 text-white rounded-full">
                    @if($property->exists)
                        Modifier
                    @else
                        Créer
                    @endif
                </button>
            </div>
        </div>


    </form>
@endsection