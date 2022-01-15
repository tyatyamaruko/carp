@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('search.name') }}" method="get">
                @csrf
                <div class="search-box">
                    <input type="text" placeholder="ユーザー名" name="name" value="{{$query}}" class="search-box__username-input" id="">
                    <input type="submit" class="search-box__search-btn" value="検索">
                </div>
            </form>
            @if(count($users) > 0)
                <ul class="userlist-box">
                    @foreach ($users as $user)
                        <li class="userlist-box__list">
                            <a href="{{ route('detail', ['id' => $user->id]) }}">
                                <div class="user-card">
                                    <div class="user-card__image-name">
                                        <div class="user-card__profile-image">
                                            <img src="{{ asset('storage/' . $user->profile_path)}}" alt="">
                                        </div><!-- /.profile-image -->
                                        <div class="user-card__name">
                                            <h3>{{ $user->name }}</h3>
                                        </div><!-- /.name -->
                                    </div><!-- /.image-name -->
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="no-result">
                    <h2>ユーザーが見つかりませんでした</h2>
                </div>
            @endif
        </div>
    </div>
@endsection
