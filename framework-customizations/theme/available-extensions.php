<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$extension = new SLZ_Available_Extension();
$extension->set_name('seo');
$register->register($extension);