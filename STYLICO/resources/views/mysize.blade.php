<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Size</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mysize.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Update My Size</h2>
<div class="container">
    <h3 class="now">-現在の登録情報-</h3>
        <div class="section1">
            <div class="section-title"></div>
            <div class="info-item">
                <span>身長：</span>
                <span>{{ session('user_data.height') ?? '---' }}cm</span>
            </div>
            <div class="info-item">
                <span>体重：</span>
                <span>{{ session('user_data.weight') ?? '---' }}kg</span>
            </div>
            <div class="info-item">
                <span>靴のサイズ：</span>
                <span>{{ session('user_data.weight') ?? '---' }}cm</span>
            </div>
            <div class="info-item">
                <span>普段の洋服のサイズ：</span>
                <span>{{ session('user_dataclothing_size') ?? '---' }}</span>
            </div>
        </div>
    <h3 class="update">-登録情報変更-</h3>
        <div class="section2">
            <div class="section-title"></div>
            <form action="{{ route('mysize.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="height">身長：</label>
                    <input type="number" id="height" name="height" value="{{ old('height', $user->height ?? '') }}" placeholder="例: 180">
                </div>
                <div class="form-group">
                    <label for="weight">体重：</label>
                    <input type="number" id="weight" name="weight" value="{{ old('weight', $user->weight ?? '') }}" placeholder="例: 70">
                </div>
                <div class="form-group">
                    <label for="shoe_size">靴のサイズ：</label>
                    <input type="number" id="shoe_size" name="shoe_size" value="{{ old('shoe_size', $user->shoe_size ?? '') }}" placeholder="例: 28">
                </div>
                <div class="form-group">
                    <label for="clothing_size">普段の洋服のサイズ：</label>
                    <input type="text" id="clothing_size" name="clothing_size" value="{{ old('clothing_size', $user->clothing_size ?? '') }}" placeholder="例: L">
                </div>
                <h3 class="mess">上記の情報でマイサイズを変更します</h3>
                <input type="submit" value="確定" class="btn"><br><br>
            </form>
            
        </div>
</body>