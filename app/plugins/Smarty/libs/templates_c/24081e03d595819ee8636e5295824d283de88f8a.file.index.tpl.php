<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:20:24
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/order/confirm/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181336415353a7e0710e54c3-17407567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24081e03d595819ee8636e5295824d283de88f8a' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/order/confirm/index.tpl',
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
  'nocache_hash' => '181336415353a7e0710e54c3-17407567',
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
  'unifunc' => 'content_53a7e071206f89_26203828',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e071206f89_26203828')) {function content_53a7e071206f89_26203828($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/order/confirm/index.7b435cd7.css">

</head>
<body>

<?php /*  Call merged included template "../../common/tpl/side-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/side-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '181336415353a7e0710e54c3-17407567');
content_53bf903880f969_17347290($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/side-nav.tpl" */?>
<?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '181336415353a7e0710e54c3-17407567');
content_53bf9038840722_99705715($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><h2>确认订单信息</h2><div class="center-content"><div id="order-detail"><ul class="fund-head clearfix"><li class="fund-surface-cell">&nbsp;</li><li class="fund-name-cell">基金名称</li><li class="fund-type-cell">基金类型</li><li class="fund-risk-cell">风险等级</li></ul><ul class="fund-body clearfix"><li class="fund-surface-cell"><img class="surface" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['surface'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""></li><li class="fund-name-cell"><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['fundname'], ENT_QUOTES, 'UTF-8', true);?>
</h4><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['f_fname'], ENT_QUOTES, 'UTF-8', true);?>
</p></li><li class="fund-type-cell"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['fundtypename'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="fund-risk-cell"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['riskname'], ENT_QUOTES, 'UTF-8', true);?>
</li></ul><ul class="fund-foot clearfix"><li>合计：<b>¥<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
</b></li></ul></div><form class="clearfix" id="form" action="/center/order/pay"><ul id="licence"><input type="hidden" name="fundcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['fundcode'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="hidden" name="count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
"><?php if ($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['risk']<$_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['risk']) {?><li><input type="checkbox" name="risk" checked>我确认购买超出我风险偏好的产品或<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['riskCheckUrl'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">进行风险评测</a></li><?php }?><li><input type="checkbox" name="agree" checked>我同意<a target="_blank" href="/center/fund/agreement?page=personal">《基金公司用户协议》</a>和<a target="_blank" href="/center/fund/agreement?page=baidu">《百度理财销售平台服务协议》</a></li><li><label>支付金额：<b>¥<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
</b></label><button class="button-major" id="submiter" type="submit">提交订单</button></li></form></div></div></div>
<?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '181336415353a7e0710e54c3-17407567');
content_53bf90388c8e36_18875374($_smarty_tpl);
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
require(['order/confirm/index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:20:24
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53bf903880f969_17347290')) {function content_53bf903880f969_17347290($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sideNav')) {
    function smarty_template_function_sideNav($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sideNav']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="side-nav"><h4>个人中心</h4><ul><li><a href="/center/info" <?php if ($_smarty_tpl->tpl_vars['data']->value=='info') {?>class="active"<?php }?>><i class="iconfont">&#xf012d;</i>我的信息</a></li><li><a href="/center/property" <?php if ($_smarty_tpl->tpl_vars['data']->value=='property') {?>class="active"<?php }?>><i class="iconfont">&#xe605;</i>我的资产</a></li><li><a href="/center/order" <?php if ($_smarty_tpl->tpl_vars['data']->value=='order') {?>class="active"<?php }?>><i class="iconfont">&#x3437;</i>订单管理</a></li><li><a href="/center/funds" <?php if ($_smarty_tpl->tpl_vars['data']->value=='fund') {?>class="active"<?php }?>><i class="iconfont">&#xf0077;</i>基金账户管理</a></li></ul></div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:20:24
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53bf9038840722_99705715')) {function content_53bf9038840722_99705715($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:20:24
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53bf90388c8e36_18875374')) {function content_53bf90388c8e36_18875374($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
