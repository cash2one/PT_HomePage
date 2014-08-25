<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:17
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/order/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103188089053a8e6e5070930-74173105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280f22e6e5066d89d57e0a8e24e9edfa0f29bb1c' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/order/index/index.tpl',
      1 => 1404729559,
      2 => 'file',
    ),
    '60443180fd93885bfe771b8344aea4f0adcd49d0' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/base.tpl',
      1 => 1404898239,
      2 => 'file',
    ),
    'ea8f93ed6a6f2ca994cd8a66cff921639709a4a7' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl',
      1 => 1404729559,
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
  'nocache_hash' => '103188089053a8e6e5070930-74173105',
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
  'unifunc' => 'content_53a8e6e51ce9e7_35546377',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8e6e51ce9e7_35546377')) {function content_53a8e6e51ce9e7_35546377($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/order/index/index.6acf36b4.css">

</head>
<body>

<?php /*  Call merged included template "../../common/tpl/side-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/side-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '103188089053a8e6e5070930-74173105');
content_53c3a7d9db8fe7_86827415($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/side-nav.tpl" */?>
<?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '103188089053a8e6e5070930-74173105');
content_53c3a7d9dd7112_98208740($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><?php smarty_template_function_sideNav($_smarty_tpl,array('data'=>"order"));?>
<div class="content"><h3>订单管理</h3><div class="ui-tabs" id="tabs"><ul class="ui-tabs-labels"><li <?php if ($_smarty_tpl->tpl_vars['tplData']->value['type']==0) {?>class="ui-tabs-selected"<?php }?> data-type="0"><a href="/center/order?type=0">全部</a></li><li <?php if ($_smarty_tpl->tpl_vars['tplData']->value['type']==1) {?>class="ui-tabs-selected"<?php }?> data-type="1"><a href="/center/order?type=1">未支付</a></li><li <?php if ($_smarty_tpl->tpl_vars['tplData']->value['type']==3) {?>class="ui-tabs-selected"<?php }?> data-type="3"><a href="/center/order?type=3">已完成</a></li><li <?php if ($_smarty_tpl->tpl_vars['tplData']->value['type']==4) {?>class="ui-tabs-selected"<?php }?> data-type="4"><a href="/center/order?type=4">已关闭</a></li></ul></div><div class="order-list"><ul class="order-list-header clearfix"><li class="order-time">创建时间</li><li class="order-name">名称</li><li class="order-no">订单号</li><li class="order-manager">基金公司</li><li class="order-act">类型</li><li class="order-count">金额</li><li class="order-status">状态</li><li class="order-operation">操作</li></ul><div class="order-list-body"><?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['order']->key;
?><ul class="order-list-item clearfix"><li class="order-time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['add_time'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-name" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['order']->value['name'],9,'...'), ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-no" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_no'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_no'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-manager" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['order']->value['company'],9,'...'), ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-act"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['act'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-count">￥<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['amount'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['status_name'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="order-operation"><?php if ($_smarty_tpl->tpl_vars['order']->value['status']==1) {?><a class="button-major button-size-small pay" target="_blank" href="/center/fund/buyPage?orderno=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_no'], ENT_QUOTES, 'UTF-8', true);?>
">支付</a><?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']==2) {?><a class="property" target="_blank" href="/center/property">查看资产</a><?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']==3) {?><a class="property" target="_blank" href="/center/property">查看资产</a><br><a class="remove" href="#" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_no'], ENT_QUOTES, 'UTF-8', true);?>
">删除</a><?php } elseif ($_smarty_tpl->tpl_vars['order']->value['status']==4) {?><a class="remove" href="#" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_no'], ENT_QUOTES, 'UTF-8', true);?>
">删除</a><?php }?></li></ul><?php } ?></div><div class="order-list-footer"><div class="order-pager"></div></div></div></div></div></div>
<?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '103188089053a8e6e5070930-74173105');
content_53c3a7d9e69ce9_21316011($_smarty_tpl);
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
    total: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['total'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    type: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['type'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    pageSize: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['pageSize'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    pageNum: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['pageNum'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
require(['order/index/index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:17
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a7d9db8fe7_86827415')) {function content_53c3a7d9db8fe7_86827415($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sideNav')) {
    function smarty_template_function_sideNav($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sideNav']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="side-nav"><h4>个人中心</h4><ul><li><a href="/center/info" <?php if ($_smarty_tpl->tpl_vars['data']->value=='info') {?>class="active"<?php }?>><i class="iconfont">&#xf012d;</i>我的信息</a></li><li><a href="/center/property" <?php if ($_smarty_tpl->tpl_vars['data']->value=='property') {?>class="active"<?php }?>><i class="iconfont">&#xe605;</i>我的资产</a></li><li><a href="/center/order" <?php if ($_smarty_tpl->tpl_vars['data']->value=='order') {?>class="active"<?php }?>><i class="iconfont">&#x3437;</i>订单管理</a></li><li><a href="/center/funds" <?php if ($_smarty_tpl->tpl_vars['data']->value=='fund') {?>class="active"<?php }?>><i class="iconfont">&#xf0077;</i>基金账户管理</a></li></ul></div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:17
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a7d9dd7112_98208740')) {function content_53c3a7d9dd7112_98208740($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:17
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a7d9e69ce9_21316011')) {function content_53c3a7d9e69ce9_21316011($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
