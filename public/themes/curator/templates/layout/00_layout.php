<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>          <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>          <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title><?= $page['title']; ?> <?php if ($page['title'] != $params['title']) {
    echo '- ' . $params['title'];
} ?></title>
    <meta name="description" content="<?= $params['tagline']; ?>" />
    <meta name="author" content="<?= $params['author']; ?>">
    <meta charset="UTF-8">
    <link rel="icon" href="<?= $params['theme']['favicon']; ?>" type="image/x-icon">
    <!-- Mobile -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <?php foreach ($params['theme']['fonts'] as $font) {
    echo "<link href='$font' rel='stylesheet' type='text/css'>";
} ?>

    <!-- CSS -->
    <?php foreach ($params['theme']['css'] as $css) {
    echo "<link href='$css' rel='stylesheet' type='text/css'>";
} ?>

    <?php if ($params['html']['search']) {
    ?>
        <!-- Tipue Search -->
        <link href="<?= $base_url; ?>tipuesearch/tipuesearch.css" rel="stylesheet">
    <?php

} ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php if($_SERVER["SERVER_NAME"] == 'curator.io') {?>
        <!-- Start of Woopra Code -->
        <script>
            (function(){
                var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
            })("woopra");

            woopra.config({
                domain: 'curator.io'
            });
            woopra.track();
        </script>
        <!-- End of Woopra Code -->

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-43032617-1', 'auto', {'allowLinker': true});
            ga('require', 'linker');
            ga('linker:autoLink', ['admin.curator.io'] );
            ga('send', 'pageview');
        </script>
    <?php }    ?>
</head>
<body class="<?= $params['html']['float'] ? 'with-float' : ''; ?>">


    <?= $this->section('content'); ?>

    <?php
    if ($params['html']['google_analytics']) {
        $this->insert('theme::partials/google_analytics', ['analytics' => $params['html']['google_analytics'], 'host' => array_key_exists('host', $params) ? $params['host'] : '']);
    }
    if ($params['html']['piwik_analytics']) {
        $this->insert('theme::partials/piwik_analytics', ['url' => $params['html']['piwik_analytics'], 'id' => $params['html']['piwik_analytics_id']]);
    }
    ?>

    <!-- jQuery -->
    <script src="<?= $base_url; ?>themes/curator/js/jquery-1.11.3.min.js"></script>

    <!-- hightlight.js -->
    <script src="<?= $base_url; ?>themes/curator/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- JS -->
    <?php foreach ($params['theme']['js'] as $js) {
        echo '<script src="' . $js . '"></script>';
    } ?>

    <script src="<?= $base_url; ?>themes/curator/js/daux.js"></script>

    <?php if ($params['html']['search']) {
        ?>
        <!-- Tipue Search -->
        <script type="text/javascript" src="<?php echo $base_url; ?>tipuesearch/tipuesearch.js"></script>

        <script>
            window.onunload = function(){}; // force $(document).ready to be called on back/forward navigation in firefox
            $(function() {
                tipuesearch({
                    'base_url': '<?php echo $base_url?>'
                });
            });
        </script>
    <?php

    } ?>


<div class="footer-spacer"></div>
<div class="footer-container">
    <footer class="content-info container" role="contentinfo">
        <div class="row">
            <div class="col-sm-4 footer-nav">
               <nav>
                    <ul id="menu-footer-menu" class=""><li class="active menu-home"><a href="<?php echo MAIN_URL ?>/">Home</a></li>
                    <li class="menu-about"><a href="<?php echo MAIN_URL ?>/about/">About</a></li>
                    <li class="menu-showcase"><a href="<?php echo MAIN_URL ?>/showcase/">Showcase</a></li>
                    <li class="menu-pricing"><a href="<?php echo MAIN_URL ?>/pricing/">Pricing</a></li>
                    <li class="menu-contact"><a href="<?php echo MAIN_URL ?>/contact/">Contact</a></li>
                    </ul>
               </nav>
            </div>
            <div class="col-sm-4 footer-social">
                <nav>
                    <ul>
                        <li><a href="https://twitter.com/curator_io" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.facebook.com/curatorappio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://instagram.com/curator_io" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-4 footer-nav">
                <nav>
                    <ul>
                        <li><a href="<?php echo MAIN_URL ?>/privacy">Privacy Policy</a></li>
                        <li><a href="<?php echo MAIN_URL ?>/terms">Terms</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 footer-copy">
                    <span class="copy">© 2016 <a href="http://sandboxdigital.com.au" target="_blank">Sandbox Digital</a></span></li>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
