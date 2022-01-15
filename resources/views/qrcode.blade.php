@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="qr-box">
                <div class="qr-box__code">
                    {!! QrCode::size(300)->generate(route('detail', ['id' => Auth::user()->id])) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
