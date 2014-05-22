<?php
function escape_data( $data ) {
	if ( ini_get( 'magic_quotes_gpc' ) ) {
		$data = stripslashes( $data );
	}
	if ( !is_numeric( $data ) ) {
		$data = mysql_real_escape_string( $data );
	}
	return $data;
}
?>