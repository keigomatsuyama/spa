<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お気に入り投票</title>

  <link rel="stylesheet"
        href="{{ asset('css/recommend.css') }}">
</head>

<body>

  <header class="header"><div class="logo"><a href="/home">
    犬猫お気に入り</a>
  </div>

  <div class="header-buttons">

    <a href="/post" class="header-btn">
      写真投稿
    </a>

    <a href="/list" class="header-btn">
      写真一覧
    </a></header>

<div class="recommend-area">

  <div class="left-area">

    <img class="pet-image"
         src="{{ asset('images/' . $petlove->image) }}">

  </div>

  <div class="right-area">

    <h2 class="pet-title">
  {{ $petlove->title }}
</h2>

<p class="pet-comment">
  {{ $petlove->description }}
</p>

   <form action="{{ route('favorite.store', $petlove->id) }}"
      method="POST">
      @csrf
<a >ユーザーのコメント</a>

  @error('comment')

    <p class="error-message">
      {{ $message }}
    </p>

  @enderror
      <textarea
      name="comment"
        class="comment-box"
        placeholder="コメントを書く">
      </textarea>

      <button class="favorite-btn">
        お気に入りにする
      </button>

    </form>

  </div>

</div>

</body>
</html>