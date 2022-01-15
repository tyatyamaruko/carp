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
                                <input type="file" name="profile_img" value="{{ asset('storage/'.Auth::user()->profile_path) }}" id="">
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
                                <select name="hometown" class="form-control @error('hometown') is-invalid @enderror" id="hometown">
                                    @foreach(config('const.Prefs') as $pref)
                                        @if ($pref == Auth::user()->hometown) 
                                            <option value="{{$pref}}" selected>{{$pref}}</option>
                                        @else
                                            <option value="{{$pref}}">{{$pref}}</option>
                                        @endif
                                        <option value="{{$pref}}">{{$pref}}</option>
                                    @endforeach
                                </select>

                                @error('hometown')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="year" class="col-md-4 col-form-label text-md-end">誕生年</label>

                            <div class="col-md-6">
                                <select name="year" class="form-control @error('year') is-invalid @enderror" id="year">
                                    @foreach(range(1900, date("Y")) as $year)
                                    @if($year == Auth::user()->year)
                                        <option value="{{$year}}" selected>{{$year}}年</option>
                                    @else
                                        <option value="{{$year}}">{{$year}}年</option>
                                    @endif
                                    @endforeach
                                </select>
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="month" class="col-md-4 col-form-label text-md-end">誕生月</label>

                            <div class="col-md-6">
                                <select name="month" class="form-control @error('month') is-invalid @enderror" id="month">
                                    @foreach(range(1, 12) as $month)
                                        @if ($month == Auth::user()->month) 
                                            <option value="{{$month}}" selected>{{$month}}</option>
                                        @else
                                            <option value="{{$month}}">{{$month}}</option>
                                        @endif
                                        <option value="{{$month}}">{{$month}}月</option>
                                    @endforeach
                                </select>
                                @error('month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="blood_type" class="col-md-4 col-form-label text-md-end">血液型</label>

                            <div class="col-md-6">
                                <select name="blood_type" class="form-control @error('blood_type') is-invalid @enderror" id="blood_type">
                                    <option value="A">A型</option>
                                    <option value="B">B型</option>
                                    <option value="AB">AB型</option>
                                    <option value="O">O型</option>
                                </select>

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
