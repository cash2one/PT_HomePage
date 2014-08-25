<?php /* Smarty version Smarty-3.1.18, created on 2014-07-24 11:12:38
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/fund/bind/verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83126930353ab9100183e49-49107952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5445c6527d8573fcb13808b6ecbc57877dc4b3c8' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/fund/bind/verify.tpl',
      1 => 1404729559,
      2 => 'file',
    ),
    '60443180fd93885bfe771b8344aea4f0adcd49d0' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/base.tpl',
      1 => 1404898239,
      2 => 'file',
    ),
    '6cc687cb5c2f4c182704e1c1eb9490d8d78acbde' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl',
      1 => 1402911476,
      2 => 'file',
    ),
    'bb8289c136dfbf6ff871406c5e182550d3de83f1' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl',
      1 => 1402911476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83126930353ab9100183e49-49107952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ab9100259142_39190155',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ab9100259142_39190155')) {function content_53ab9100259142_39190155($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/fund/bind/verify.d1b4966d.css">

</head>
<body>

<?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '83126930353ab9100183e49-49107952');
content_53d079a6785c34_04556782($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><iframe class="verifty-frame" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" frameborder="0"></iframe></div></div>
<?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '83126930353ab9100183e49-49107952');
content_53d079a67bd006_78774464($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/footer.tpl" */?>

<script src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/dep/esl/1.8.2/esl.js"></script>
<script src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/dep/jquery/1.10.2/jquery.js"></script>
<script>
require.config({
        'baseUrl': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset',
        'paths': {
            'onesite': '../dep/onesite/site',
            'moye': '../dep/moye/asset/ui',
            'etpl': '../dep/etpl/2.1.0/asset/main',
            'Q': '../dep/q/q',
            'underscore': '../dep/underscore/1.6.0/asset/underscore',
            'common': './common/'
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
</script>

<script>
define('conf', {
    baseUrl: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['baseUrl'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    next: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['next'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
require(['fund/bind/verify'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-24 11:12:38
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53d079a6785c34_04556782')) {function content_53d079a6785c34_04556782($_smarty_tpl) {?>
<div id="onesite-header"></div>

<div class="header result-op">
    <div class="header-content container clearfix">
        <a class="logo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['center'], ENT_QUOTES, 'UTF-8', true);?>
"></a>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['active']) {?>active<?php }?>">
                <a data-click="{mod: 'nav', act:'a_nav_category'}" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nav']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nav']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            <?php } ?>
        </ul>
        <a class="center-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['center'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="iconfont">&#xf012d;</i>我的财富</a>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-24 11:12:38
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53d079a67bd006_78774464')) {function content_53d079a67bd006_78774464($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
