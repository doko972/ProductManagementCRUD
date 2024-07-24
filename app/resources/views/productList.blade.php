@extends('page')

@section('title', 'Liste des produits')

@section('content')
<h2>Liste des produits</h2>
<table>
    <thead>
        <tr class="table-cl">
            <td>Nom</td>
            <td>Prix</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} €uros</td>
                <td>{{ $product->description }}</td>
                <td>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><a href="{{ route('product.edit', $product->id) }}">Modifier</a></button>
                        <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="margin-btn" type="submit"><a href="{{ route('product.create') }}">Ajouter un produit</a></button>
@endsection