@extends('layouts.master')
@section('content')

    <div class="itemsParent productView row">
                      
        <div class="col-md-6">
            <img src="{{asset('images/'.$product->image_url)}}" alt="{{$product->image_url}}">
        </div>

        <div class="col-md-6">
            <div class="col-md-12 marginElement">
                <h2><a href="{{url('product',$product->id)}}">{{$product->name}}</a></h2>
            </div>

            <div class="col-md-12 justify-content-center marginElement">
                <p>{{$product->description}}</p>
            </div>

            <div class="col-md-12 marginElement">
                <h3>{{$product->price}} €</h3>
            </div>

            <div class="dropdown marginElement">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tailles
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="col-md-12 marginElement">
                <button type="button" class="btn btn-primary">
                    Acheter
                </button>
            </div>

        </div>     
    </div>
@endsection