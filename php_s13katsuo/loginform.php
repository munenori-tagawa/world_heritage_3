<?php

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css/loginform.css" />
</head>

<div class="columns container my-2">
<div class="column is-half is-offset-one-quarter">
<h1 class="title">Contribute to Serverless Resources</h1>

<div class="field" text-aline="center">
  <label class="label" for="title">Title</label>
  <div class="control">
    <input id="title" name="title" class="input" type="text">
  </div>
</div>

 <div class="field">
  <label class="label" for="url">URL</label>
  <div class="control">
    <input id="url" name="url" class="input" type="url">
  </div>
</div>
  
 <div class="field">
  <label class="label" for="author">Author</label>
  <div class="control">
    <input id="author" class="input" type="text" name="author">
  </div>
</div>

 <div class="field">
  <label class="label" for="tags">Tags (comma separated)</label>
  <div class="control">
    <input id="tags" class="input" type="text" name="tags">
  </div>
</div>
  
 <div class="field">
  <label class="label" for="description">Description</label>
  <div class="control">
    <textarea id="description" class="textarea" name="description"></textarea>
  </div>
</div>

 <!-- We'll prepare our javascript's function for later -->
<div class="control">
  <button onclick="validateSubmission();" class="button is-link is-fullwidth">Submit</button>
</div>
  
</div>
</div>
</html>