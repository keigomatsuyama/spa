<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>post</title>
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
</head>
<body>
  
  <header class="header"><div class="logo">
    <a href="/home">
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
   <div class="post-area">

  <form class="post-form"
        action="{{ route('send') }}"
        method="POST"
        enctype="multipart/form-data">

    @csrf

    <div class="left-area">
@error('image')

  <p class="error-message">
    {{ $message }}
  </p>

@enderror
      <div class="upload-area">

        <label class="upload-label">

          <input class="post-file"
                 type="file"
                 name="image">

          <div class="upload-content">

            <div class="upload-icon">
              📷
            </div>

            <p class="upload-text">
              写真を選択
            </p>

            <p class="upload-sub">
              クリックしてアップロード
            </p>

          </div>
<img id="preview" class="preview-image">
        </label>

      </div>

    </div>

    <div class="right-area">
@error('title')

  <p class="error-message">
    {{ $message }}
  </p>

@enderror
      <input class="post-input"
             type="text"
             name="title"
             placeholder="タイトル">
@error('description')

  <p class="error-message">
    {{ $message }}
  </p>

@enderror
      <textarea class="post-textarea"
                name="description"
                placeholder="説明"></textarea>

      <button class="post-btn">
        投稿する
      </button>

    </div>

  </form>

</div>
<script>
const fileInput = document.querySelector('.post-file');
const preview = document.getElementById('preview');
const uploadContent = document.querySelector('.upload-content');

fileInput.addEventListener('change', function(){

  const file = this.files[0];

  if(file){

    preview.src = URL.createObjectURL(file);

    preview.style.display = 'block';

    uploadContent.style.display = 'none';
  }
});
</script>
</body>
</html>