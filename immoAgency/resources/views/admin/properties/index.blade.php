@extends ('admin.admin')

@section('title', 'Tous les biens')


@section('content')
    <div class="flex justify-between align-center border-b-5">
      <h1> @yield('title')  </h1>
      <a href="{{ route('admin.property.create') }}" class="bg-blue-500 p-2 rounded-8"> AJouter un bien</a>
    </div>

    <table class="table-auto border-collapse border border-slate-50">
        <thead>
            <tr class="border-2 bg-blue-600">
                <th  class="border border-slate-600  py-4 px-6">Titre</th>
                <th  class="border border-slate-600 py-4 px-6">Surface</th>
                <th class="border border-slate-600 py-4 px-6">Prix</th>
                <th class="border border-slate-600 py-4 px-6">Ville</th>
                <th class="border border-slate-600 py-4 px-6">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($properties as $proprety)
            <tr>
                <td class="border border-slate-600 py-4 px-6">{{ $proprety->title }}</td>
                <td class="border border-slate-600 py-4 px-6">{{ $proprety->surface }} m2</td>
                <td>{{ number_format($proprety->price, thousands_separator: ' ') }}</td>
                <td>{{ $proprety->city}}</td>
                <td>
                    <div class="flex gap-2">
                        <a href="{{ route('admin.property.edit', $proprety) }}" class="bg-green-500 p-2 rounded-8 mr-2">Edit</a>
                        <!-- ce code permet d'éditeur un bien  href="mon code" ce code signifie que l'on va à la route admin.property.edit et on lui passe l'objet proprety -->
                        <form action="{{ route('admin.property.destroy', $proprety) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="bg-green-500-p-2-rounded-8">Supprimer</button>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection