@extends('layouts.master')
@section('content')
    
    
<!-- component -->
<div class=" p-6 bg-gray-100">
    <div class="container w-1/2 mx-auto">
      <div>
        <h2 class="font-bold text-center">Product Create</h2>
  
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
            <div class="lg:col-span-2">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
               
                <form class="md:col-span-5" action="{{route('product.update', $products->id)}}" method="post">
                  @csrf
                <div class="md:col-span-5">
                  <label for="full_name">Product Name</label>
                  <input type="text" name="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$products->name}}" />
                </div>
                <div class="md:col-span-5">
                    <label for="full_name">QTY</label>
                    <input type="text" name="qty" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$products->qty}}" />
                </div>
                <div class="md:col-span-5">
                  <label for="full_name">Price</label>
                  <input type="text" name="price" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$products->price}}" />
                </div>
                <div class="md:col-span-5">
                  <label for="full_name">Description</label>
                  <input type="text" name="description" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$products->description}}" />
                </div>
                <div class="md:col-span-5 mt-3">
                  <div class="w-full">
                    <input type="text">
                    <input type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Product Update" />
                  </div>
                </div>
            </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  
@endsection