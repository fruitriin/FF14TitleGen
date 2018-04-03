<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>FF14タイトルジェネレーター</title>
</head>
<body>
<div id="app">
    <!-- デフォルトだとこの中ではvue.jsが有効 -->
    <!-- example-component はLaravelに入っているサンプルのコンポーネント -->
    <title-gen></title-gen>
</div>
<!-- body タグの最後に足す-->
<script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>
