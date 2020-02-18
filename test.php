<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Full page editing with Document Properties plugin</title>
    <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>
</head>

<body>
  <textarea cols="80" id="editor1" name="editor1" rows="10">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Apollo 11&lt;/title&gt;
&lt;meta content=&quot;text/html; charset=utf-8&quot; http-equiv=&quot;content-type&quot; /&gt;
&lt;meta content=&quot;fullpage,docprops,meta,html,head&quot; name=&quot;keywords&quot; /&gt;
&lt;meta content=&quot;CKEditor full page editing with Document Properties plugin sample&quot; name=&quot;description&quot; /&gt;
&lt;meta content=&quot;CKEditor&quot; name=&quot;author&quot; /&gt;
&lt;meta content=&quot;CKSource - Frederico Knabben&quot; name=&quot;copyright&quot; /&gt;
&lt;/head&gt;
&lt;body style=&quot;margin-left: 40px; margin-right: 40px; background-color: rgb(237, 237, 237);&quot;&gt;
&lt;h1&gt;&lt;img alt=&quot;Saturn V carrying Apollo 11&quot; align=&quot;right&quot; src=&quot;assets/sample.jpg&quot; /&gt; Apollo 11&lt;/h1&gt;

&lt;p&gt;&lt;strong&gt;Apollo 11&lt;/strong&gt; was the spaceflight that landed the first humans, Americans &lt;a href=&quot;http://en.wikipedia.org/wiki/Neil_Armstrong&quot;&gt;Neil Armstrong&lt;/a&gt; and &lt;a href=&quot;http://en.wikipedia.org/wiki/Buzz_Aldrin&quot;&gt;Buzz Aldrin&lt;/a&gt;, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.&lt;/p&gt;

&lt;p&gt;Armstrong spent about &lt;s&gt;three and a half&lt;/s&gt; two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&amp;nbsp;kg) of lunar material for return to Earth. A third member of the mission, &lt;a href=&quot;http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)&quot;&gt;Michael Collins&lt;/a&gt;, piloted the &lt;a href=&quot;http://en.wikipedia.org/wiki/Apollo_Command/Service_Module&quot;&gt;command&lt;/a&gt; spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.&lt;/p&gt;

&lt;h2&gt;Broadcasting and &lt;em&gt;quotes&lt;/em&gt; &lt;a id=&quot;quotes&quot; name=&quot;quotes&quot;&gt;&lt;/a&gt;&lt;/h2&gt;

&lt;p&gt;Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:&lt;/p&gt;

&lt;blockquote&gt;
&lt;p&gt;One small step for [a] man, one giant leap for mankind.&lt;/p&gt;
&lt;/blockquote&gt;

&lt;p&gt;Apollo 11 effectively ended the &lt;a href=&quot;http://en.wikipedia.org/wiki/Space_Race&quot;&gt;Space Race&lt;/a&gt; and fulfilled a national goal proposed in 1961 by the late U.S. President &lt;a href=&quot;http://en.wikipedia.org/wiki/John_F._Kennedy&quot;&gt;John F. Kennedy&lt;/a&gt; in a speech before the United States Congress:&lt;/p&gt;

&lt;blockquote&gt;
&lt;p&gt;[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.&lt;/p&gt;
&lt;/blockquote&gt;

&lt;hr /&gt;
&lt;p&gt;&lt;small&gt;Source: &lt;a href=&quot;http://en.wikipedia.org/wiki/Apollo_11&quot;&gt;Wikipedia.org&lt;/a&gt;&lt;/small&gt;&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;

</textarea>
  <script>
      CKEDITOR.replace('editor1', {
          fullPage: true,
          extraPlugins: 'docprops',
          // Disable content filtering because if you use full page mode, you probably
          // want to  freely enter any HTML content in source mode without any limitations.
          allowedContent: true,
          height: 320
      });
  </script>
</body>

</html>