@extends('layouts.master')
@section('content')
    <h1 class="titleCenter">Articles homme</h1>

    <div class="itemsParent">
        <ul class="list-group ulItems" style="flex-direction: row;">
            @forelse($products as $product)
                @if($product->image_url == 'hommes\0693445251_1_1_1.jpg' ||
                    $product->image_url == 'hommes\0706301811_1_1_1.jpg' ||
                    $product->image_url == 'hommes\1792455401_1_1_1.jpg' ||
                    $product->image_url == 'hommes\3859401732_1_1_1.jpg' ||
                    $product->image_url == 'hommes\3918402401_1_1_1.jpg' ||
                    $product->image_url == 'hommes\3918420710_1_1_1.jpg' ||
                    $product->image_url == 'hommes\4314509658_1_1_1.jpg' ||
                    $product->image_url == 'hommes\4398519400_1_1_1.jpg' ||
                    $product->image_url == 'hommes\7505410251_1_1_1.jpg' ||
                    $product->image_url == 'hommes\9065437707_2_1_1.jpg' 
                    )
                    <li class="itemsChilds col-md-4 row">                         
                        <div class="col-md-12">
                            <img src="{{asset('images/'.$product->image_url)}}" alt="{{$product->image_url}}">
                        </div>

                        <div class="col-md-12 marginElement">
                            <h2><a href="{{url('product',$product->id)}}">{{$product->name}}</a></h2>
                        </div>

                        @if($product->status === "solde")
                            <div class="item-solded"><strong >{{$product->price}} €</strong>
                                <del>1{{$product->price}} €</del>
                            </div>
                        @else
                            <div class="item-price">
                            <strong class="item-price">{{$product->price}} €</strong>
                            </div>
                        @endif
                    </li>
                @endif
            @empty
                <h3>Aucun produit !</h3>
            @endforelse
        </ul>

        {{ $products->links() }}
    </div>

@endsection