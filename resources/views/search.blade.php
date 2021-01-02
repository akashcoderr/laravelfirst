@extends('master')
@section("content")
<div class="custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
        <div class="trending-wrapper">
            <h3>Result For Products</h3>
            @foreach($products as $item)
            <div class="searched-item">
                <a href="details/{{$item['id']}}">
                <img class="trend-img" src="{{$item['gallery']}}">
                    <div class="">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </a>
            </div>
            @endforeach   
        </div>
        </div>
        <div class="col-sm-4">
        <a href="/">Go Back</a>
        </div>
</div>
@endsection