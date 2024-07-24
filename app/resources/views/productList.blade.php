@extends('page')

@section('title', 'Liste des produits')

@section('content')
<h2>Liste des produits</h2>
<table>
    <thead>
        <tr class="table-cl">
            <td class="td-alg">Nom</td>
            <td class="td-alg">Prix</td>
            <td class="td-alg">Description</td>
            <td class="td-alg">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr >
                <td class="td-alg">{{ $product->name }}</td>
                <td class="td-alg">{{ $product->price }}  €uros</td>
                <td class="td-alg">{{ $product->description }}</td>
                <td class="td-alg">
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