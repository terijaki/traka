---
title: Presseartikel
permalink: /presseartikel/
layout: default
---
<!--===== News (Presseartikel) =====-->
<section id="news">
  <div class="container">
    <div class="row newsposts">
      {% for post in site.posts %}
      {% if post.categories contains "Presseartikel" %}
      <div class="post">
        <div class="box" onclick="location.href='{{ post.url }}';">
        <h4 class="post-title"><a href="{{ post.url }}">{{ post.title }}</a></h4>
        {% if post.thumbnail %}
        <a class="thumbnail" href="{{ post.url }}"><div style="background-image:url({{ post.thumbnail }})"></div></a>
        {% endif %}
        <div class="post-excerpt">{{ post.excerpt | strip_html | strip | truncate: 1200 }}</div>
        </div>
      </div>
      {% endif %}
      {% endfor %}
    </div>
    </div>
</section>
