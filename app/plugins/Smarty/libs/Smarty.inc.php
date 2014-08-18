<?php
include_once("Smarty.class.php");
$smarty = new Smarty();

$smarty->template_dir="./templates";
$smarty->compile_dir ="./smarty_templates_c";
$smarty->cache_dir ="./smarty_cache";

$smarty->left_delimiter ="{";
$smarty->right_delimiter ="}";

?>
