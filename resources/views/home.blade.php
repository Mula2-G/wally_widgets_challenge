@extends('default-layout')

@section('content')

    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title pt-4">
                Stickee Challenge
            </div>
            <form action="{{route('submit.amount')}}" method="POST">
                @csrf
                <div class="form-group row mt-0">
                    <div class="col-sm-4 col-md-6">
                        <label>
                            How many Widgets do you need?
                        </label>
                    </div>
                    <div class="col-sm-4 col-md-6">
                        <div class="input-group">
                            <input name="widgets" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="error-town alert-danger"></div>
                <div class="form-group row mt-0">
                    <div class="offset-sm-4 offset-md-6 col-sm-4 col-md-6 text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
