@extends('master')
@section("content")

<div class="container">
    <div class="row"> 
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}" alt=""/>
        </div>
        <div class="col-sm-6">
            <a href="/">GO Back</a>
            <h2>Name  :{{$products['name']}}</h2>
            <h3>Price :{{$products['price']}}</h3>
            <h4>Details  :{{$products['description']}}</h4>
            <h3> category :{{$products['category']}}</h3>

            <br><br>
            <form action="/add_to_cart" method="post">
            @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                <button class="btn btn-primary">Add To Cart</button>
                <br><br>

            </form>
           
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>

@endsection