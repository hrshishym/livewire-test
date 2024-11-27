<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="p-5">
    @if($id != null)
        <h1>トグル</h1>
        <livewire:star-component :id="$id" />
        <hr>
        <a href="/">戻る</a>
    @else
    <h1>カウントアップサンプル</h1>
    <livewire:counter-sample />
    <hr>
    <!-- 全てのStar->idへのリンクを作成 -->
    @php
        $stars = App\Models\Star::all();

        foreach($stars as $star) {
            echo '<a href="/' . $star->id . '">ID=' . $star->id . '</a> <br>';
        }

    @endphp
    @endif
    @livewireScripts
</body>
</html>