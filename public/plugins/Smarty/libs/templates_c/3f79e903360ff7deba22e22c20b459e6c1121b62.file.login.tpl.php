<?php /* Smarty version Smarty-3.1.18, created on 2014-07-07 18:46:17
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/passport/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55701733753a7dab07553e5-63387955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f79e903360ff7deba22e22c20b459e6c1121b62' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/passport/login.tpl',
      1 => 1404729559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55701733753a7dab07553e5-63387955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a7dab07cc586_33461649',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7dab07cc586_33461649')) {function content_53a7dab07cc586_33461649($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富 - 登录</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/passport/login.953c0f7e.css">
</head>
<body>

<div id="onesite-header" style="display:none"></div>
<div class="header result-op">
    <div class="header-content container clearfix">
        <a class="logo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['center'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
    </div>
</div>
<div class="main">
    <div class="container clearfix">
        <img class="login-poster" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/passport/img/fn-center-login-poster.f70c5ea7.jpg" alt="">
        <div class="login-panel">
            <h4>登录百度账号</h4>
            
            <div id="pp_pass_login_form" class="tang-pass-login"></div>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-2/esl.source.js"></script>
<script src="http://s1.bdstatic.com/r/www/cache/static/jquery/jquery-1.10.2.min_f2fb5194.js"></script>

<script type='text/javascript' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['passport'], ENT_QUOTES, 'UTF-8', true);?>
/passApi/js/wrapper.js?cdnversion=<?php echo htmlspecialchars(time(), ENT_QUOTES, 'UTF-8', true);?>
'></script>
<script>
require.config({
        'baseUrl': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/',
        'paths': {
            'onesite': '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tplData']->value['headerPath'], 'none');?>
',
            'moye': '../dep/moye/asset/ui',
            'etpl': '../dep/etpl/2.1.0/asset/main',
            'when': '../dep/when',
            'underscore': '../dep/underscore/underscore'
        },
        'packages': [{
                'name': 'when',
                'main': 'when'
            }]
    });
require(['onesite'], function (onesite) {
    onesite.render({
        header: {
            'nav': 'onesite-header'
        },
        footer: {
            'nav': 'onesite-footer'
        }
    });
    $('#onesite-header').hide();
});
define('common/conf', {
    passport: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['passport'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    feRoot: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    baseUrl: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['baseUrl'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    ext: <?php echo smarty_modifier_escape(json_encode($_smarty_tpl->tpl_vars['extData']->value), 'none');?>

});
define('conf', {
    u: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['u'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
require(['conf', 'passport/login'], function (conf, index) {
    index.init(conf);
});
</script>
</body>
</html><?php }} ?>
