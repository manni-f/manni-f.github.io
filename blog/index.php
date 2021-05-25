---
layout: default
title: Blog Post
description: An interesting story...
---
<script type="text/javascript">
  alert(`These are random placeholder blogs.`);
</script>

<div class="page blog-index">
  <h1>Blog Page</h1>

  <div class="col-two blog-cols">

    <div class="col col-side blog-recent">
      {% include recentlist.html %}
    </div>

    <div class="col col-content blog-previews">

    {% for post in site.posts %}
      <div class="blog-posts">
        <header class="post-header">
          <h2><a href="{{ post.url }}">{{ post.title }}</a></h2>
          <div class="post-byline">
            <img src="{{ post.gravatar }}" />
            <a href="{{ post.authorTwitter }} " class="tweet">@</a>
            by: {{ post.author }}

            <span> - {{ post.date | date: '%d %B, %Y' }} </span>
          </div>
        </header>
      <div class="posts-image" style="background-image:url({{ post.postHero }})">
      </div>
      {{ post.excerpt }}
      <a href="{{ post.url }}">Read more...</a>
      </div>
    {% endfor %}
    </div>

  </div>
  <form action="blogPost.php" method="get">
    Name:
    <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo nameErr; ?></span>
    <br>
    <br>
    Email:
    <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo emailErr; ?></span>
    <br>
    <br>
    <textarea name="text" rows="8" cols="80"><?php echo $text;?></textarea>
    <br>
    <input type="submit">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"></form>
  </form>
</div>
