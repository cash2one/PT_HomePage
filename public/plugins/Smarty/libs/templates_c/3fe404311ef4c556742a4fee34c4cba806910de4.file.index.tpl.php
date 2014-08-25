<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:11
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/info/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89216897653a7e07c13dc83-65747412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe404311ef4c556742a4fee34c4cba806910de4' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/info/index.tpl',
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
  'nocache_hash' => '89216897653a7e07c13dc83-65747412',
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
  'unifunc' => 'content_53a7e07c2d5af3_07323398',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e07c2d5af3_07323398')) {function content_53a7e07c2d5af3_07323398($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富-我的信息</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/info/index.8e488926.css">

</head>
<body>

    <?php /*  Call merged included template "../common/tpl/side-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/side-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '89216897653a7e07c13dc83-65747412');
content_53c3a7d3dbe063_77347978($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/side-nav.tpl" */?>
    <?php /*  Call merged included template "../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '89216897653a7e07c13dc83-65747412');
content_53c3a7d3ddc117_29464020($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/header.tpl" */?>
    <div class="main"><div class="container clearfix"><?php smarty_template_function_sideNav($_smarty_tpl,array('data'=>"info"));?>
<div class="content"><ul id="user" class="clearfix"><li id="avatar"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['avatar'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""></li><li id="basic"><h4>你好，<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4><p><i class="info-icon-account"></i><label>账户名：</label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['loginName'], ENT_QUOTES, 'UTF-8', true);?>
</p><p><i class="info-icon-secure"></i><label>账户安全等级：</label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['secureLevel'], ENT_QUOTES, 'UTF-8', true);?>
</p><p><i class="info-icon-style"></i><label>投资风格：</label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['investStyle'], ENT_QUOTES, 'UTF-8', true);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['riskCheckUrl'], ENT_QUOTES, 'UTF-8', true);?>
">评估</a></p></li><li id="asset"><h4>资产总额</h4><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['property'], ENT_QUOTES, 'UTF-8', true);?>
</label><a class="view_property" href="/center/property">查看我的资产</a></li></ul><ul id="secure" class="clearfix"><li id="email" <?php if (!empty($_smarty_tpl->tpl_vars['tplData']->value['email'])) {?>class="verified"<?php }?>><h4><span><i class="iconfont">&#xf0138;</i><b></b></span><strong>邮箱</strong></h4><?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_caifu']) {?><?php if (empty($_smarty_tpl->tpl_vars['tplData']->value['email'])) {?><p>尚未绑定邮箱<!--&nbsp;&nbsp;<strong>绑定</strong>--></p><?php } else { ?><p>已绑邮箱：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
<!--&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['tplData']->value['email_vertified']) {?><strong>验证</strong> | <?php }?><strong>更换</strong>--></p><?php }?><?php }?></li><li id="mobile" <?php if (!empty($_smarty_tpl->tpl_vars['tplData']->value['phone'])) {?>class="verified"<?php }?>><h4><span><i class="iconfont">&#xf00a2;</i><b></b></span><strong>手机</strong></h4><?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_caifu']) {?><?php if (empty($_smarty_tpl->tpl_vars['tplData']->value['phone'])) {?><p>尚未绑定手机<!--&nbsp;&nbsp;<strong>绑定</strong>--></p><?php } else { ?><p>已绑手机：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;&nbsp;<strong class="change-mobile">更换</strong></p><?php }?><?php }?></li><li id="real-id" class="real-id <?php if (!empty($_smarty_tpl->tpl_vars['tplData']->value['id_no'])) {?>verified<?php }?>"><h4><span><i class="real-id-icon"></i><b></b></span><strong>实名认证</strong></h4><?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_caifu']) {?><?php if (empty($_smarty_tpl->tpl_vars['tplData']->value['id_no'])) {?><p>尚未实名认证</p><?php } else { ?><p>已完成实名认证&nbsp;&nbsp;<strong class="change-identity"><?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_vertify_other']) {?>修改<?php } else { ?>完善个人信息<?php }?></strong></p><?php }?><?php }?></li></ul><ul id="identity"><li><span>登录密码：</span><em>登录百度账号时需要输入的密码</em><b><a href="http://passport.baidu.com/v2/account/password" target="_blank">修改</a></b></li><?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_vertify']) {?><li><span>交易密码：</span><em>在账户资金变动、修改账户信息时需要输入的密码</em><?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_password']) {?><b><strong class="find-password">忘记密码</strong> | <strong class="change-password">修改</strong></b><?php } else { ?><b><strong>设置密码</strong></b><?php }?></li><li class="last"><span>身份验证：</span><?php if (isset($_smarty_tpl->tpl_vars['tplData']->value['id_no'])) {?><em>身份证号 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['id_no'], ENT_QUOTES, 'UTF-8', true);?>
</em><b><ins>已验证</ins></b><?php }?></li><?php }?></ul><?php if (isset($_smarty_tpl->tpl_vars['tplData']->value['binding']['fundVendor'])) {?><div id="binding"><h4><a href="/center/funds">绑定管理</a>已绑定的基金账号<span>您已经绑定了<em><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['tplData']->value['binding']['fundVendor']), ENT_QUOTES, 'UTF-8', true);?>
</em>个账户</span></h4><ul class="clearfix"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['binding']['fundVendor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?><li class="<?php if ($_smarty_tpl->tpl_vars['index']->value%4===3) {?>endline<?php }?>"><a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""></a></li><?php } ?></ul></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['tplData']->value['binding']['stockVendor'])) {?><div id="binding"><h4>已绑定的证券账号<span>您已经绑定了<em><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['tplData']->value['binding']['stockVendor']), ENT_QUOTES, 'UTF-8', true);?>
</em>个账户</span></h4><ul class="clearfix"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['binding']['stockVendor']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?><li class="<?php if ($_smarty_tpl->tpl_vars['index']->value%4===3) {?>endline<?php }?>"><a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""></a></li><?php } ?></ul></div><?php }?></div></div></div>
    <?php /*  Call merged included template "../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '89216897653a7e07c13dc83-65747412');
content_53c3a7d3eca1c3_93029615($_smarty_tpl);
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

<script>
require(['info/index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:11
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a7d3dbe063_77347978')) {function content_53c3a7d3dbe063_77347978($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sideNav')) {
    function smarty_template_function_sideNav($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sideNav']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="side-nav"><h4>个人中心</h4><ul><li><a href="/center/info" <?php if ($_smarty_tpl->tpl_vars['data']->value=='info') {?>class="active"<?php }?>><i class="iconfont">&#xf012d;</i>我的信息</a></li><li><a href="/center/property" <?php if ($_smarty_tpl->tpl_vars['data']->value=='property') {?>class="active"<?php }?>><i class="iconfont">&#xe605;</i>我的资产</a></li><li><a href="/center/order" <?php if ($_smarty_tpl->tpl_vars['data']->value=='order') {?>class="active"<?php }?>><i class="iconfont">&#x3437;</i>订单管理</a></li><li><a href="/center/funds" <?php if ($_smarty_tpl->tpl_vars['data']->value=='fund') {?>class="active"<?php }?>><i class="iconfont">&#xf0077;</i>基金账户管理</a></li></ul></div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:11
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a7d3ddc117_29464020')) {function content_53c3a7d3ddc117_29464020($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 17:50:11
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c3a7d3eca1c3_93029615')) {function content_53c3a7d3eca1c3_93029615($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
