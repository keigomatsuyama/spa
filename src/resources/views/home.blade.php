<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
  <header class="header"><div class="logo">
    犬猫お気に入り
  </div>

  <div class="header-buttons">

    <a href="/post" class="header-btn">
      写真投稿
    </a>

    <a href="/list" class="header-btn">
      写真一覧
    </a></header>
  <main>
    <div class="pets-area">
      @php
  $rank = 0;
  $prev = null;
@endphp

@foreach ($petloves as $petlove)

  @php

    if ($prev !== $petlove->favorites_count) {
        $rank++;
    }

    $prev = $petlove->favorites_count;

  @endphp
  <div class="pet-card">
<div class="rank-badge">

   @if($rank <= 10)
    {{ $rank }}位
  @else
    etc
  @endif

</div>
  <div class="left-area">

    <a href="{{ route('recommend', ['id' => $petlove->id]) }}">

      <img class="pet-image"
           src="{{ asset('images/' . $petlove->image) }}">

    </a>
<p class="vote-message">
  ※ 写真をクリックすると投票できるよ
</p>
  </div>

  <div class="info-area">

    <h2 class="pet-title">
      {{ $petlove->title }}
    </h2>

    <p class="pet-description">
      {{ $petlove->description }}
    </p>

    <div class="favorite-count">
      ❤ お気に入り {{ $petlove->favorites->count() }}
    </div>
<p>コメント一覧</p>
    <div class="comment-area">

      @foreach ($petlove->comments as $comment)

        <div class="comment-item">
          ・{{ $comment->comment }}
        </div>

      @endforeach

    </div>

  </div>

</div>
      @endforeach
    </div>
  </main>
</body>

</html>