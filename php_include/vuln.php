<?php

ini_set( 'allow_url_include', 1 );

$input = stripslashes( $input );

$rand  = rand( 0, 999 );
$rand2 = rand( 0, 999 );

echo <<<EOT
<html>
    <head>
        <title>My title...</title>
    </head>
    <body>
        <h1>Stuff...</h1>
        <h2>This is random: $rand</h2>
        <pre>
EOT;

if( $input ){ include( $input ); }
    
echo "This is random too -- $rand2
</pre>
    </body>
</html>
";
