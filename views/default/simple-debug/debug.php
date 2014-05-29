<!--

PAGE OWNER ENTITY
=================

<?= print_r(elgg_get_page_owner_entity(), true);?>

(Export: <?=elgg_get_site_url();?>export/default/<?=elgg_get_page_owner_guid();?>)

LOGGED IN USER ID
=================

<?= print_r(elgg_get_logged_in_user_entity(), true);?>

(Export: <?=elgg_get_site_url();?>export/default/<?=  elgg_get_logged_in_user_guid();?>)

SESSION
=======

<?= print_r($_SESSION, true); ?>

SERVER
======

<?= print_r($_SERVER, true); ?>

MISC
====

Page context: <?= elgg_get_context(); ?>

-->