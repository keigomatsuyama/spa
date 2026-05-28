<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>list</title>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</head>
<body>
  
  <header class="header"><div class="logo"><a href="/home">
    犬猫お気に入り
</a>
  </div>

  <div class="header-buttons">

    <a href="/post" class="header-btn">
      写真投稿
    </a>

    <a href="/list" class="header-btn">
      写真一覧
    </a></header>
    <main>

  <div class="list-area">

    @foreach ($petloves as $petlove)

      <div class="list-card">
 <a href="{{ route('recommend', ['id' => $petlove->id]) }}">

        <img class="list-image"
             src="{{ asset('images/' . $petlove->image) }}">
</a>
<p class="vote-message">
  ※ 写真をクリックすると投票できるよ
</p>
        <h2 class="list-title">
          {{ $petlove->title }}
        </h2>

        <p class="list-description">
          {{ $petlove->description }}
        </p>

      </div>

    @endforeach

  </div>

</main>
</body>
</html>