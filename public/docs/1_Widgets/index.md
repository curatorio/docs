
The Curator.io platform has a powerful embedding system that gives the Curator.io team functionality to help you 
customize your widgets without you have to touch the code after it's embedded.

If, however, you're the kind of person who likes to get their hands dirty or is looking for a more bespoke social media
  aggregator then you've come to the right place.
  
The Curator.io Widgets are built to be as extensible as possible and, hopefully, easy to understand. So you can  
use the code as a foundation on which you can build your own awesome social media widgets. We look forward to seeing 
your creations.

We're still working on the documentation but you can dive right into the code on our GitHub:

[Curator GitHub](https://github.com/curatorio/widgets)

The code in GitHub is the latest version of the code we use in our off the shelf widgets. 

### CDN

CDN hosted Curator.io Widgets are a great way to get up and running quickly:

In your `<head>` add:

```
<link rel="stylesheet" type="text/css" href="//cdn.curator.io/1.3/css/curator.css"/>
```
In your `<body>` where you want the feed to appear:

```
<div id="curator-feed">
    <a href="https://curator.io" target="_blank" class="crt-logo">Powered by Curator.io</a>
</div>
```
Then, before your closing `</body>` tag add:

```
<script type="text/javascript" src="//cdn.curator.io/1.3/js/curator.js"></script>
<script type="text/javascript">
    // While you're testing
    Curator.debug = true;

    // Change FEED_ID to your unique FEED_ID
    var widget = new Curator.Waterfall({
        container:'#curator-feed',
        feedId:FEED_ID
    });
</script>
```

FEED_ID can be found in the [Curator Admin](https://admin.curator.io) 


### jQuery / Zepto

Curator comes in too flavours: 
- curator.nodep.js - a stand alone widget which is not dependant on any libraries (it has Zepto pre-packaged in the js file)
- curator.js - which requires either jQuery (1.7 +) or Zepto included before the curator.js `<script>` tag