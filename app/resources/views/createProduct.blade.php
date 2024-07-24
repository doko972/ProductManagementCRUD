@extends('page')

@section('title', 'Créer un produit')

@section('content')
<h2>@yield('title')</h2>
<form action="{{ route('product.store') }}" method="post">
    @csrf
    <table>
        <tr>
            <td><label for="name">Nom:</label></td>
            <td><input type="text" name="name" id="name" required></td>
        </tr>
        <tr>
            <td><label for="price">Prix :</label></td>
            <td><input type="text" name="price" id="price" required></td>
        </tr>
        <tr>
            <td><label for="description">Description :</label></td>
            <td><input type="text" name="description" id="description" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Ajouter</button>
            </td>
        </tr>
    </table>
</form>
@endsection