@extends('welcome')


@section('content')


<div class="container">
    
    <div id="products" class="row list-group">
    @foreach($products as $product)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                <div class="caption">
                    <div class="row">
                        <div class="col-xs-12 col-md-9">
                            <b><h4 style="font-size: 20px; font-weight: 700;">{{$product['name']}}</h4></b>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <p style="color:orange; margin-top: 10px; margin-bottom: 10px;">{{$product['price']}}</p>
                        </div>
                    </div>
                    <p class="group inner list-group-item-text" style="display:block;text-overflow: ellipsis;width: 327px;overflow: hidden; white-space: nowrap;">{{$product['description']}}</p>
                    <div class="row">
                        @foreach($product['furniture_style'] as $fur)
                        <div class="col-xs-12 col-md-3">
                            <a>{{$fur}}</a>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                        </div>
                        <div class="col-xs-12 col-md-2">
                            <u><a>{{$product['delivery_time']}}</a></u>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
