---
title: Beitragsarchiv
permalink: /archiv/
layout: default
---
<!--===== News (Blog Posts) =====-->
<section id="news">
  <div class="container">
    <div class="row newsposts">
      {% for post in site.posts %}
      <div class="post">
        <div class="box" onclick="location.href='{{ post.url }}';">
        <h4 class="post-title"><a href="{{ post.url }}">{{ post.title }}</a></h4>
        <div class="post-excerpt">{{ post.excerpt }}</div>
        {% if post.thumbnail %}
        <a class="thumbnail" href="{{ post.url }}"><div style="background-image:url({{ post.thumbnail }})"></div></a>
        {% endif %}
        </div>
      </div>
      {% endfor %}
    </div>
    </div>
</section>
