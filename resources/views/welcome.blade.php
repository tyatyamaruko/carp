<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CARP</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            height: 100vh;
        }

        body {
            margin: 0;
            height: 100%;
            background: #1a202c;
        }

        a {
            background-color: transparent
        }


        [hidden] {
            display: none;
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        svg,
        video {
            display: block;
            vertical-align: middle;
        }

        video {
            max-width: 100%;
            height: auto;
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity));
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity));
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity));
        }

        .border-t {
            border-top-width: 1px;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .font-semibold {
            font-weight: 600;
        }

        .h-5 {
            height: 1.25rem;
        }

        .h-8 {
            height: 2rem;
        }

        .h-16 {
            height: 4rem;
        }

        .text-sm {
            font-size: .875rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .leading-7 {
            line-height: 1.75rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .ml-1 {
            margin-left: .25rem;
        }

        .mt-2 {
            margin-top: .5rem;
        }

        .mr-2 {
            margin-right: .5rem;
        }

        .ml-2 {
            margin-left: .5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">

    <main style="display: flex; flex-direction: column; justify-content:center;">

        <div class="welcome-message">
            <h1 class="">CARP</h1>
            <h3 class="">車好きの名刺サイト</h3>
            <p class="">
                車好きの方の交流会でスムーズに相手のことを知ることができます。<br>
                プロフィール画像、名前、車、こだわりのカスタマイズなどを<br>
                名刺のようにWEB上で交換できます。
            </p>
        </div><!-- /.welcome-message -->

        <div class="user-card">
            <div class="content">
                <div class="user-card__image-name">
                    <div class="user-card__profile-image">
                        <img src="data:image/jpeg;base64,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"
                            alt="">
                    </div><!-- /.profile-image -->
                    <div class="user-card__name">
                        <h3>CARP DEV</h3>
                    </div><!-- /.name -->
                </div><!-- /.image-name -->

                <div class="user-card__infomation">
                    <table>
                        <tr>
                            <th>愛車</th>
                            <td>マツダ３</td>
                        </tr>
                        <tr>
                            <th>出身</th>
                            <td>広島</td>
                        </tr>
                        <tr>
                            <th>誕生日</th>
                            <td>12月22日</td>
                        </tr>
                        <tr>
                            <th>血液型</th>
                            <td>A型</td>
                        </tr>
                        <tr>
                            <th>こだわりポイント</th>
                            <td>足回りをこだわってます！！</td>
                        </tr>
                    </table>
                </div><!-- /.infomation -->
            </div><!-- /.content -->
        </div><!-- /.sample-card -->

        <div class="get-started">
            @if (Route::has('login'))
                <div class="px-6 mt-3 sm:block d-flex justify-content-around">
                    @auth
                        <a href="{{ url('/home') }}" class="h3 text-white bg-info px-4 py-2 rounded-pill">さっそくはじめる</a>
                    @else
                        <a href="{{ route('login') }}" class="h3 text-white bg-info px-4 py-2 rounded-pill">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 h3 text-white bg-info px-4 py-2 rounded-pill">
                                新規登録
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div><!-- /.get-started -->
    </main>

</body>

</html>
