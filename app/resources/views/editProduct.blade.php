@extends('page')

@section('title', 'Modifier le produit')

@section('content')
<h2>Modifier le produit</h2>
<form action="{{ route('product.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <td><label for="name">Nom:</label></td>
            <td><input type="text" name="name" id="name" value="{{ $product->name }}" required></td>
        </tr>
        <tr>
            <td><label for="price">Prix :</label></td>
            <td><input type="text" name="price" id="price" value="{{ $product->price }}" required></td>
        </tr>
        <tr>
            <td><label for="description">Description :</label></td>
            <td><input type="text" name="description" id="description" value="{{ $product->description }}" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Mettre à jour</button>
            </td>
        </tr>
    </table>
</form>
@endsection