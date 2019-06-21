@extends('layouts.master')
@section('content')
    <h1 class="titleCenter">Les derniers articles publiés sur notre site</h1>

    <div class="itemsParent">
        <ul class="list-group ulItems" style="flex-direction: row;">
            @forelse($products as $product)
                @if($product->status === "solde")
                    <li class="itemsChilds col-md-4 row">                         
                        <div class="col-md-12">
                            <img src="{{asset('images/'.$product->image_url)}}" alt="{{$product->image_url}}">
                        </div>

                        <div class="col-md-12 marginElement">
                            <h2><a href="{{url('product',$product->id)}}">{{$product->name}}</a></h2>
                        </div>

                        <div ><strong class="item-price">{{$product->price}} €</strong>
                            <del>1{{$product->price}} €</del>
                        </div>
                    </li>
                @endif
            @empty
                <h3>Aucun produit !</h3>
            @endforelse
        </ul>

        {{ $products->links() }}
    </div>

@endsection