<?php

require 'nbbc.php';

$bb = new bbcode();
$bb->SetDetectURLs(true);
$output = '[b]HELLO[/b][br]';
$result = '[i][b]HELLO[/b][/i][br]';
$response = '[color=blue]HELLO[/color][br]';
$review = '[quote=NBBC]WELCOME [/quote][br]';
$link='http://www.google.in[br]';
$smily=':-)';
$bb->AddRule('php',array(
   'simple_start'=>'<pre class="php">',
    'simple_end'=>'</pre>',
    'class'=>'block',
    'allow_in'=>null
    
));
$bb->AddRule('youtube',array(
   'mode'=>BBCODE_MODE_ENHANCED,
    'template'=>'<iframe class="youtube-player" type="text/html" width="640" height="400" src="http://www.youtube.com/embed/{$_content}" frameborder="0"></iframe>',
    'class'=>'block',
    'allow_in'=>null
    
));
$video='[youtube]TamUy_PZzBM[/youtube]';
$escape='[php]<?php echo \'some text here\';?>[/php]';
echo $bb->parse($output);
echo $bb->parse($result);
echo $bb->parse($response);
echo $bb->parse($review);
echo $bb->parse($link);
echo $bb->parse($smily);
echo $bb->parse($escape);
echo $bb->parse($video);
?>