<?php $ua=$_SERVER['HTTP_USER_AGENT'];
if( (strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false) ): ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php else: ?>
<meta name="viewport" content="width=1200">
<?php endif; ?>

<link href="/css/layout.css" media="all" rel="stylesheet">
<link href="/css/common.css" media="print" rel="stylesheet">
<link href="/css/common.css" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/common.css" media="only screen and (max-width: 800px)" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
