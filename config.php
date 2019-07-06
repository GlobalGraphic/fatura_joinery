<?php
	/* config.php */
	session_start();
	

    $qvar='lang';
	$svar='language';
	
    $default='sk';
    $languages=array('en','sk','de');

	
	
    if( !isset( $_SESSION[ $svar ] ) )$_SESSION[ $svar ]=$default;
    if( isset( $_GET[ $qvar ] ) && in_array( strtolower( $_GET[ $qvar ] ), $languages ) ) $_SESSION[ $svar ]=strtolower( $_GET[ $qvar ] );

	
	
	$languagefile = sprintf( '%s/languages/%s.php', $_SERVER['DOCUMENT_ROOT'], $_SESSION[ $svar ] );
	require realpath( $languagefile );
	
?>