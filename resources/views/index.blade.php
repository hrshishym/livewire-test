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
  <h1>カウントアップ</h1>
  <livewire:counter-sample />
  @if($id != null)
  <hr>
  <h1>トグル</h1>
  <livewire:star-component :id="$id" />
@endif
@livewireScripts
</body>
</html>