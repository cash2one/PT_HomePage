<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 13:43:13
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/fund/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104251636053a9471d349240-38079990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10cd519e8bbbcb6438a31a0b4726d4440b6489a2' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/fund/index/index.tpl',
      1 => 1403669380,
      2 => 'file',
    ),
    '60443180fd93885bfe771b8344aea4f0adcd49d0' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/base.tpl',
      1 => 1403751399,
      2 => 'file',
    ),
    'ea8f93ed6a6f2ca994cd8a66cff921639709a4a7' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl',
      1 => 1402911476,
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
  'nocache_hash' => '104251636053a9471d349240-38079990',
  'function' => 
  array (
    'sideNav' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a9471d473a00_24777283',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a9471d473a00_24777283')) {function content_53a9471d473a00_24777283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/fund/index/index.7ca5d271.css">

</head>
<body>

<?php /*  Call merged included template "../../common/tpl/side-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/side-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '104251636053a9471d349240-38079990');
content_53abb2f1365b16_42085899($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/side-nav.tpl" */?>
<?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '104251636053a9471d349240-38079990');
content_53abb2f1382183_39222694($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><?php smarty_template_function_sideNav($_smarty_tpl,array('data'=>"fund"));?>
<div class="content"><div id="fund-header"><h3>基金账户绑定管理</h3><p>绑定后，您可以对该基金账号的资产进行管理，或直接购买该公司旗下基金。</p></div><?php if (empty($_smarty_tpl->tpl_vars['tplData']->value['funds'])) {?><p class="empty-fund-list">暂无绑定的基金账户</p><?php } else { ?><ul class="fund-list"><?php  $_smarty_tpl->tpl_vars['fund'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fund']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['funds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fund']->key => $_smarty_tpl->tpl_vars['fund']->value) {
$_smarty_tpl->tpl_vars['fund']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['fund']->key;
?><li class="fund <?php if ($_smarty_tpl->tpl_vars['index']->value%2==1) {?>fund-last<?php }?>"><h4><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fund']->value['logo'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""><span>绑定 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fund']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><a href="/center/unbind" fund-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fund']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" class="fund-unbind">解除绑定</a></h4><div class="fund-card"><?php if (empty($_smarty_tpl->tpl_vars['fund']->value['cards'])) {?><em class="empty-fund-card-list">暂无绑定的银行卡</em><?php } else { ?><p>已绑定银行卡</a></p><ul><?php  $_smarty_tpl->tpl_vars['card'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['card']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fund']->value['cards']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['card']->key => $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->_loop = true;
?><li><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['logo'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['number'], ENT_QUOTES, 'UTF-8', true);?>
</span></li><?php } ?></ul><?php }?></div></li><?php } ?></ul><?php }?></div></div></div>
<?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '104251636053a9471d349240-38079990');
content_53abb2f13e2811_53524882($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/footer.tpl" */?>

<script src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-2/esl.source.js"></script>
<script src="http://s1.bdstatic.com/r/www/cache/static/jquery/jquery-1.10.2.min_f2fb5194.js"></script>
<script>
require.config({
        'baseUrl': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/',
        'paths': {
            'onesite': '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tplData']->value['headerPath'], 'none');?>
',
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
require(['fund/index/index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 13:43:13
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53abb2f1365b16_42085899')) {function content_53abb2f1365b16_42085899($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sideNav')) {
    function smarty_template_function_sideNav($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sideNav']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="side-nav">
    <h4>个人中心</h4>
    <ul>
        <li><a href="/center/info" <?php if ($_smarty_tpl->tpl_vars['data']->value=='info') {?>class="active"<?php }?>><i class="iconfont">&#xf012d;</i>我的信息</a></li>
        <li><a href="/center/property" <?php if ($_smarty_tpl->tpl_vars['data']->value=='property') {?>class="active"<?php }?>><i class="iconfont">&#xe605;</i>我的资产</a></li>
        <li><a href="/center/order" <?php if ($_smarty_tpl->tpl_vars['data']->value=='order') {?>class="active"<?php }?>><i class="iconfont">&#x3437;</i>订单管理</a></li>
        <li><a href="/center/funds" <?php if ($_smarty_tpl->tpl_vars['data']->value=='fund') {?>class="active"<?php }?>><i class="iconfont">&#xf0077;</i>基金账户管理</a></li>
    </ul>
</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 13:43:13
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53abb2f1382183_39222694')) {function content_53abb2f1382183_39222694($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-26 13:43:13
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53abb2f13e2811_53524882')) {function content_53abb2f13e2811_53524882($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
