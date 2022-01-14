@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="user-card">
                <div class="content">
                    <div class="user-card__image-name">
                        <div class="user-card__profile-image">
                            <img src="{{ asset('storage/' . Auth::user()->profile_path)}}" alt="">
                        </div><!-- /.profile-image -->
                        <div class="user-card__name">
                            <h3>{{ Auth::user()->name }}</h3>
                        </div><!-- /.name -->
                    </div><!-- /.image-name -->

                    <div class="user-card__infomation">
                        <table>
                            <tr>
                                <th>愛車</th>
                                <td>{{ Auth::user()->car_name }}</td>
                            </tr>
                            <tr>
                                <th>出身</th>
                                <td>{{ Auth::user()->hometown }}</td>
                            </tr>
                            <tr>
                                <th>誕生日</th>
                                <td>{{ Auth::user()->birthday }}</td>
                            </tr>
                            <tr>
                                <th>血液型</th>
                                <td>{{ Auth::user()->blood_type }}</td>
                            </tr>
                            <tr>
                                <th>こだわりポイント</th>
                                <td>{{ Auth::user()->point }}</td>
                            </tr>
                        </table>
                    </div><!-- /.infomation -->
                </div><!-- /.content -->
            </div><!-- /.user-card -->
        </div>
    </div>
@endsection
