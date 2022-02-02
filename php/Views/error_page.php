<?php

namespace ongameuk\php\Views;

use ongameuk\php\Config\config;

header( 'HTTP/1.1 404 Not Found' );

?>

<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="noindex,nofollow" />
<META NAME="keywords" CONTENT="ошибка 404">
<title>Ошибка 404</title>
<link href="<? print config::https_host(); ?>/re-favicon_32x32.png" rel="shortcut icon" type="image/png" />

</head>

<body>
<div align="center" style="font-size:20px;">
 Запрашиваемая страница не найдена<br>
 <a href="<? print config::full_host_name(); ?>" title="главная" onFocus="this.blur();" rel="nofollow" target="_self" id="lws_but">Перейти на <? print config::host_name(); ?></a>
</div>

<script type="text/javascript">
 setTimeout(function(){ location.href = '<? print config::full_host_name(); ?>'; },1000);
</script>

</body>
</html>
