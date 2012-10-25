<?php

ini_set( 'allow_url_include', 1 );

$input = stripslashes( $input );

echo $input;

if( $input ){ echo include( $input ); }

