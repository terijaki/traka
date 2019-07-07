---
title: Beitragsarchiv
permalink: /blog/
layout: archive
---
  <div class="container">
    <div class="row newsposts">
      {% for post in site.posts %}
      <div class="post">
        <div class="box" onclick="location.href='{{ post.url }}';">
        <h4 class="post-title"><a href="{{ post.url }}">{{ post.title }}</a></h4>
          {% if post.thumbnail %}
          <a class="thumbnail" href="{{ post.url }}"><div style="background-image:url({{ post.thumbnail }}), linear-gradient(rgba(54,59,64,0.9), rgba(54,98,115,0.9));"></div></a>
          {% endif %}
          <div class="post-excerpt">{{ post.excerpt }}</div>
        </div>
      </div>
      {% endfor %}
    </div>
    </div>
