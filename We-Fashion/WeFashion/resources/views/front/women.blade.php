@extends('layouts.master')
@section('content')
    <h1 class="titleCenter">Articles femme</h1>

    <div class="itemsParent">
        <ul class="list-group ulItems" style="flex-direction: row;">
            @forelse($products as $product)
                @if($product->image_url == 'femmes\Wxl-_Port_Jackson-031.jpg' ||
                    $product->image_url == 'femmes\wxl-stella-guerande-02.jpg' ||
                    $product->image_url == 'femmes\Wxl-_19PE_juin18_3490.jpg' ||
                    $product->image_url == 'femmes\wxl-_Carpentie-011.jpg' ||
                    $product->image_url == 'femmes\wxl-_fideler_antic_blue5.jpg' ||
                    $product->image_url == 'femmes\wxl-_New_Coleen-006.jpg' ||
                    $product->image_url == 'femmes\wxl-cala_punta-whiblack-081.jpg' ||
                    $product->image_url == 'femmes\wxl-seaside-denim_blue-01.jpg' ||
                    $product->image_url == 'femmes\wxl-santo_amaro-whiblack-04.jpg' ||
                    $product->image_url == 'femmes\wxl-yagi-roseastripes-05.jpg' 
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