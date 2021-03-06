<?php
  include_once 'system/lib/bootstrapHAX.php';
  include_once $HAXCMS->configDirectory . '/config.php';
  $appSettings = $HAXCMS->appJWTConnectionSettings();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HAXCMS site list</title>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,user-scalable=yes">
  <meta name="generator" content="HAXCMS">
  <meta name="description" content="My HAXCMS site listing">
  <link rel="icon" href="assets/favicon.ico">
  <link rel="manifest" href="manifest.json">
  <link rel="prefetch" href="site.json">
  <meta name="theme-color" content="#3f51b5">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="My site">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="My App">
  <link rel="apple-touch-icon" href="assets/icon-48x48.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon-72x72.png">
  <link rel="apple-touch-icon" sizes="96x96" href="assets/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon-144x144.png">
  <link rel="apple-touch-icon" sizes="192x192" href="assets/icon-192x192.png">
  <meta name="msapplication-TileImage" content="assets/icon-144x144.png">
  <meta name="msapplication-TileColor" content="#3f51b5">
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="stylesheet" href="build/es6/node_modules/@lrnwebcomponents/haxcms-elements/lib/base.css">
  <script src="build/es6/node_modules/@webcomponents/webcomponentsjs/webcomponents-loader.js"></script>
  <script src="build/es6/node_modules/web-animations-js/web-animations-next-lite.min.js"></script>
  <script src="babel/babel-top.js"></script>
  <script src="babel/babel-bottom.js"></script>
  <script>function supportsImports() { try { new Function('import("")'); return true; } catch (err) { return false; }}</script>
  <script nomodule>window.nomodule = true;</script>
  <script>if (!window.customElements) { document.write("<!--") }</script>
  <script type="text/javascript" src="build/es6/node_modules/@webcomponents/webcomponentsjs/custom-elements-es5-adapter.js"></script>
  <!--! do not remove -->
  <script>
    if (window.nomodule || !supportsImports()) {
      define(["build/es5-amd/dist/build-home.js"], function () { "use strict" });
      document.write("<!--")
    }
  </script>
  <script type="module" src="build/es6/dist/build-home.js"></script>
  <!--! do not remove -->
  </head>
  <body>
    <haxcms-site-listing create-params='{"token":"<?php print $HAXCMS->getRequestToken();?>"}' base-path="<?php print $HAXCMS->basePath;?>" data-source="<?php print $HAXCMS->sitesJSON;?>"></haxcms-site-listing>
    <script>window.appSettings = <?php print json_encode($appSettings); ?>; </script>
    <noscript>Please enable JavaScript to view this website.</noscript>
  </body>
</html>