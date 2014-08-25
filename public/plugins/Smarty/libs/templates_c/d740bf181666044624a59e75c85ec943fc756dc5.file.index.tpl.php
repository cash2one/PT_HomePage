<?php /* Smarty version Smarty-3.1.18, created on 2014-06-23 16:09:16
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/passport/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147361496753a7e0acdbf477-00127541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd740bf181666044624a59e75c85ec943fc756dc5' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/passport/index.tpl',
      1 => 1403062400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147361496753a7e0acdbf477-00127541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a7e0acdfc006_43972469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e0acdfc006_43972469')) {function content_53a7e0acdfc006_43972469($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<script type="text/javascript">
(function(){
    var options = <?php echo smarty_modifier_escape(json_encode($_smarty_tpl->tpl_vars['tplData']->value['passportOptions']), 'none');?>
;
    var cb = options.callback.split('.');
    if(cb[0] == "parent") {
        parent[cb[1]](options);
    }
})();
</script>
</body>
</html><?php }} ?>
