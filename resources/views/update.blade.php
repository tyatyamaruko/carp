@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規登録</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('modify') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="profile_image" class="col-md-4 col-form-label text-md-end">プロフィール画像</label>
                            <div class="col-md-6">
                                <input type="file" name="profile_img" id="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">ニックネーム</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?: Auth::user()->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="car_name" class="col-md-4 col-form-label text-md-end">車名</label>

                            <div class="col-md-6">
                                <input id="car_name" type="text" class="form-control @error('car_name') is-invalid @enderror" name="car_name" value="{{ old('car_name') ?: Auth::user()->car_name }}" required autocomplete="car_name">

                                @error('car_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="hometown" class="col-md-4 col-form-label text-md-end">出身</label>

                            <div class="col-md-6">
                                <input id="hometown" type="text" class="form-control @error('hometown') is-invalid @enderror" name="hometown" value="{{ old('hometown') ?: Auth::user()->hometown }}" required autocomplete="hometown">

                                @error('hometown')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthday" class="col-md-4 col-form-label text-md-end">誕生日</label>

                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') ?: Auth::user()->birthday }}" required autocomplete="birthday">

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="blood_type" class="col-md-4 col-form-label text-md-end">血液型</label>

                            <div class="col-md-6">
                                <input id="blood_type" type="text" class="form-control @error('blood_type') is-invalid @enderror" name="blood_type" value="{{ old('blood_type') ?: Auth::user()->blood_type }}" required autocomplete="blood_type">

                                @error('blood_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="point" class="col-md-4 col-form-label text-md-end">こだわりポイント</label>

                            <div class="col-md-6">
                                <textarea id="point" type="text" class="form-control @error('point') is-invalid @enderror" name="point" autocomplete="point">{{ old('point') ?: Auth::user()->point }}</textarea>

                                @error('point')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    変更
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
