<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device.width,initial-scale=1">
    <title>Product</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>

@include('partials.menu')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>
</div>
@include('partials.footer')

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection

</body>
</html>