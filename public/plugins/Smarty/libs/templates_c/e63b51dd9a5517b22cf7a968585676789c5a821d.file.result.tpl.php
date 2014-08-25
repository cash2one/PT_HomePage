<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:51:26
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/pay/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69481925353a7e258ac9ea1-82907328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63b51dd9a5517b22cf7a968585676789c5a821d' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/pay/result.tpl',
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
  'nocache_hash' => '69481925353a7e258ac9ea1-82907328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a7e258bd7ae3_00220417',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e258bd7ae3_00220417')) {function content_53a7e258bd7ae3_00220417($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/pay/result.745b297e.css">

</head>
<body>

<?php /*  Call merged included template "../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '69481925353a7e258ac9ea1-82907328');
content_53c3a81f063e94_47220997($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><div id="content" class="<?php if ($_smarty_tpl->tpl_vars['tplData']->value['status']==0) {?>content-success<?php } else { ?>content-fail<?php }?>"><?php if ($_smarty_tpl->tpl_vars['tplData']->value['status']==0) {?><i class="iconfont main-icon">&#xe600;</i><h3><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tplData']->value['data']['title'], 'none');?>
</h3><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['data']['message'], ENT_QUOTES, 'UTF-8', true);?>
</p><label>现在您可以： <?php  $_smarty_tpl->tpl_vars['next'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['next']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['next']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['next']->key => $_smarty_tpl->tpl_vars['next']->value) {
$_smarty_tpl->tpl_vars['next']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['next']->key;
?><?php if ($_smarty_tpl->tpl_vars['index']->value>0) {?>|<?php }?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php } ?></label><?php } else { ?><i class="iconfont main-icon">&#xe60d;</i><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['statusInfo']['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['statusInfo']['message'], ENT_QUOTES, 'UTF-8', true);?>
</p><label>您可能需要： <?php  $_smarty_tpl->tpl_vars['next'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['next']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['next']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['next']->key => $_smarty_tpl->tpl_vars['next']->value) {
$_smarty_tpl->tpl_vars['next']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['next']->key;
?><?php if ($_smarty_tpl->tpl_vars['index']->value>0) {?>|<?php }?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php } ?></label><div class="custom-service"><p>您也可以联系客服：</p><span><i class="iconfont">&#xe611;</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['statusInfo']['phone'], ENT_QUOTES, 'UTF-8', true);?>
</span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['statusInfo']['bridge'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">在线客服</a></div><?php }?></div></div></div>
<?php /*  Call merged included template "../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '69481925353a7e258ac9ea1-82907328');
content_53c3a81f0e5f60_48244500($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/footer.tpl" */?>

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

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:51:27
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a81f063e94_47220997')) {function content_53c3a81f063e94_47220997($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:51:27
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a81f0e5f60_48244500')) {function content_53c3a81f0e5f60_48244500($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
