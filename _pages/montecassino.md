---
title: 'Monte Cassino &#8211; Was war damals geschehen?'
permalink: '/montecassino/'
layout: page
---
Im Juli 1943 hatten alliierte Streitkräfte mit der Landung in Sizilien erstmals europäischen Boden betreten und drangen nun auf das italienische Festland vor. Die Deutschen Truppen, vor allem die 1. Fallschirmjägerdivision zogen sich hinhaltend kämpfend auf eine 120 km südlich von Rom vorbereitete Hauptwiderstandslinie zurück. Eckpfeiler dieser sogenannten "Gustav-Linie" waren der Monte Cassino und der Monte Maio, die das Tal des Liri-Flusses beherrschten. Hier sollte das Vordringen der Alliierten gestoppt werden. Auf dem Monte Cassino befand sich das gleichnamige Kloster aus dem 6. Jahrhundert, die Wiege des Benediktiner-Ordens und damit ein Symbol der abendländischen Christenheit. Die deutschen Truppen hatten dieses Kloster als neutrale Zone respektiert und unbesetzt gelassen. Als auf alliierter Seite der neuseeländische General Freyberg den Befehl bekam, mit seinem Korps den Klosterberg zu stürmen und hohe Verluste erlitt, nahm er irrtümlich an, dass sich im Kloster deutsche Beobachtungsstellen befinden und forderte amerikanische Luftunterstützung an. Am 15. Februar 1944 warfen 225 alliierte Bomber 567 Tonnen Bomben auf das Kloster und legten es in Schutt und Asche; 427 Zivilisten fanden den Tod und eine unersetzbare Kulturstätte war vernichtet. Ein militärischer Erfolg ist trotzdem nicht erzielt worden: Die Trümmer erbittert verteidigenden Fallschirmjäger bekamen hier von den Amerikanern die Bezeichnung "Grüne Teufel" und nach insgesamt 4 blutigen Schlachten zogen sich die Truppen zurück, weil die Alliierten inzwischen in ihrem Rücken bei Nettuno gelandet waren.

Heute zieht das neu errichtete Kloster schon von weitem die Blicke der Besucher auf sich und zu seinen Füßen reihen sich die Soldatenfriedhöfe. 107.000 Gefallene aus 32 Nationen ruhen hier, künden von der Sinnlosigkeit des Krieges und mahnen zum Frieden. Hier treffen sich wenig Überlebende, die Angehörigen der Gefallenen und Jugendgruppen aus damaligen beteiligten Ländern.
Aus Deutschland kümmert sich die Deutsche Monte Cassino Vereinigung ( DMCV) um die Wahrung des Andenkens und den Erhalt der Gedenkstätten. Sie wurde bereits kurz nach dem Krieg von Oberst Bäumler gegründet, der an alles 4 Schlachten teilgenommen hatte und wird seit 1975 von Joseph Klein geleitet, der als Leutnant an den Kämpfen um Monte Cassino teilgenommen hatte. Vor 3 Jahren, also 2005 gründete Joseph Klein zusammen mit Richard Hartinger, dessen Vater in Monte Cassino ruht, noch die Monte Cassino Stiftung, die vor allem finanzielle Unterstützung leistet und so u.a. die Treffen von Jugendgruppen aus Ländern der ehemaligen Kriegsgegner fördert.

<hr>

<section id="news">
  <div class="container">
    <div class="row newsposts">
      {% for post in site.posts %}
      {% if post.categories contains "Monte Cassino" %}
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
