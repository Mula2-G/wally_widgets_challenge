@extends('default-layout')

@section('content')
    <section>
        <div class="container">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Please send the following order</h1>
                    <ul class="list-group">
                        @foreach($pack_sizes as $key => $value)
                            <li class="list-group-item">{{$pack_number[$key]}} packs of {{$value}} items</li>
                        @endforeach
                    </ul>
                    <div class="row">
                        <div class="col-12 col-md-3 float-right pt-4">
                            <a href="{{route('home')}}" type="button" class="btn text-uppercase btn-block btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
