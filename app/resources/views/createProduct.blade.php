@extends('page')

@section('title', 'Créer un produit')

@section('content')
<section class="table-hgt">
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <table>
            <tr>
                <h2 class="table-tle">@yield('title')</h2>
            </tr>
            <tr>
                <td><label for="name">{{ $name }}</label></td>
                <td><input type="text" name="name" id="name" required></td>
            </tr>
            <tr>
                <td><label for="price">{{ $price }}</label></td>
                <td><input type="text" name="price" id="price" required></td>
            </tr>
            <tr>
                <td><label for="description">{{ $description}}</label></td>
                <td><input type="text" name="description" id="description" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit">{{ $add }}</button>
                </td>
            </tr>
        </table>
    </form>
</section>
@endsection