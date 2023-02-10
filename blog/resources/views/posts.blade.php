<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>

    <link rel="stylesheet" type="text/css" href="/app.css">
    <script type="text/javascript" src="app.js"></script>
</head>
<body>

    @foreach($posts as $post)
    <article>
      <h1>
        <a href="/posts/<?= $post->slug; ?>">
        <?= $post->title ?>      
        </a>
      </h1>

      <div>
          <?= $post->excerpt ?>
      </div>

    </article>
    @endforeach

</body>
</html>