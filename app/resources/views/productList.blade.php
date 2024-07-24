@extends('page')

@section('title', 'Liste des produits')

@section('content')
<h2>{{ $title }}</h2>
<div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
<table>
    <thead>
        <tr class="table-cl">
            <td class="td-alg">{{ $name }}</td>
            <td class="td-alg">{{ $price }}</td>
            <td class="td-alg">{{ $description }}</td>
            <td class="td-alg">{{ $actions }}</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr >
                <td class="td-alg">{{ $product->name }}</td>
                <td class="td-alg">{{ $product->price }}  €</td>
                <td class="td-alg">{{ $product->description }}</td>
                <td class="td-alg">
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><a href="{{ route('product.edit', $product->id) }}">{{ $modify }}</a></button>
                        <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">{{ $delete }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="margin-btn" type="submit"><a href="{{ route('product.create') }}">{{ $addproduct }}</a></button>
@endsection