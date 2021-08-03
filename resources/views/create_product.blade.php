@extends('welcome')

@section('content')
<div class="d-flex justify-content-center" style="background-color: rgb(229,231,235)">
    <div class="w-25 border border-white rounded d-flex justify-content-center mb-4 mt-4 bg-white">
        <form action="{{route('CreateProduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4 mt-3">
                <label for="name" class="sr-only">Product brand</label>
                <input type="text" name="item_brand" id="item_brand" placeholder="Product Brand" class="px-5 py-3 rounded @error('item_brand') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">                
                
                @error('item_brand')
                <div class="">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="email" class="sr-only">Product name</label>
                <input type="text" name="item_name" id="item_name" placeholder="Product Name" class="px-5 py-3 rounded @error('item_name') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">                
                
                @error('item_name')
                <div class="">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Product price</label>
                <input type="number" name="item_price" id="item_price" placeholder="Product Price" class="px-5 py-3 rounded @error('item_price') border-red-500 @enderror" style="background-color: rgb(229,231,235);border-style: solid;" value="">
            
                @error('item_price')
                <div class="">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <input type="file" id="file" name="file">
            </div>
            <div>
                <button type="submit" class="btn btn-primary mb-3 rounded" style="padding: 13px 108px">Upload</button>
            </div>
        </form>
    </div>
</div>
@endsection