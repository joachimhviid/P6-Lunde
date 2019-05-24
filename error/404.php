<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Lunde by</title>
  <link rel="stylesheet" href="error/errorpage.css?v=<?php print filemtime("errorpage.css"); ?>">
</head>
<body>
  <main>
    <div class="textwrapper">
      <h1 class="errormsg">Hovsa! Noget gik galt...</h1>
      <p class="errormsg">Du ser ud til at være faret vild. Lad os hjælpe dig tilbage til byen.</p>
      <a class="button-outline-primary" href="index">Tilbage til Lunde</a>
    </div>
    <div class="itemwrapper">
      <img src="error/square-tree-dark.svg" alt="Gray and white tree with a square shaped crown" class="item" id="square">
      <img src="error/circle-tree-dark.svg" alt="Gray and white tree with a circle shaped crown" class="item" id="circle">
      <img src="error/cone-tree-dark.svg" alt="Gray and white tree with a cone shaped crown" class="item" id="cone">
      <img src="error/lunde-dark.svg" alt="Gray and white sign with Lunde on" class="item" id="sign">
    </div>
    <div class="floor"></div>
  </main>
  <script src="error/errorpage.js"></script>
</body>
</html>
