@extends('layouts.app')

@section('title', 'Home')

@section('content')

<form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white w-1/3 px-4 border-gray-100 shadow-xl
rounded-lg">
@csrf

<h2 class="textl-2xl text-center py-4 mb-4 font-semibold">Edit Product {{$product->id}}</h2>
{{csrf_field()}}
    <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded
    placeholder-gray-900" placeholder="Title" name="title" value="{{$product->title}}">

    <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded
    placeholder-gray-900" placeholder="Country" name="country" value="{{$product->country}}">

    <input type="number" class="my-2 w-full bg-gray-200 p-2 text-lg rounded
    placeholder-gray-900" placeholder="Price" name="price" value="{{$product->price}}">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded
    text-white hover:bg-blue-700">Send</button>

</form>

@endsection
