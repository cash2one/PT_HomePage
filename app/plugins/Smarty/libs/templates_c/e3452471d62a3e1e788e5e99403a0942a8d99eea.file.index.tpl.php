<?php /* Smarty version Smarty-3.1.18, created on 2014-06-27 11:47:46
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/msg/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77641094253a92ed5b74135-46284998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3452471d62a3e1e788e5e99403a0942a8d99eea' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/msg/index.tpl',
      1 => 1403838762,
      2 => 'file',
    ),
    '60443180fd93885bfe771b8344aea4f0adcd49d0' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/base.tpl',
      1 => 1403751399,
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
  'nocache_hash' => '77641094253a92ed5b74135-46284998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a92ed5c568b4_01701743',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a92ed5c568b4_01701743')) {function content_53a92ed5c568b4_01701743($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/msg/index.0304a963.css">

</head>
<body>

    <?php /*  Call merged included template "../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '77641094253a92ed5b74135-46284998');
content_53ace96236a474_05459735($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/header.tpl" */?>
    <div class="main"><div class="container"><div class="header-title"><i></i><span>完善个人信息</span></div><div class="spliter"></div><div class="item-header"><i class="iconfont">&#xf012d;</i>身份信息</div><div class="item"><div class="item-title"><i>*</i>真实姓名：</div><div class="item-content"><?php if (isset($_smarty_tpl->tpl_vars['tplData']->value['userInfo'])&&$_smarty_tpl->tpl_vars['tplData']->value['userInfo']['name']!='') {?><span class="normal-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php } else { ?><div class="moye-ui" data-name="userName"></div><?php }?></div></div><div class="item"><div class="item-title"><i>*</i>身份证号：</div><div class="item-content"><?php if (isset($_smarty_tpl->tpl_vars['tplData']->value['userInfo'])&&$_smarty_tpl->tpl_vars['tplData']->value['userInfo']['id_no']!='') {?><span class="normal-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['id_no'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php } else { ?><div class="moye-ui" data-name="idNo"></div><?php }?></div></div><div class="item-header"><i class="iconfont">&#xf00c9;</i>设置交易密码</div><div class="item"><div class="item-title"><i>*</i>交易密码：</div><div class="item-content"><div class="moye-ui"  data-name="password"></div></div></div><div class="item"><div class="item-title"><i>*</i>再输入一次：</div><div class="item-content"><div class="moye-ui" data-name="password-again"></div></div></div><div class="item-header"><i class="iconfont">&#xf0138;</i>设置邮箱</div><div class="item"><div class="item-title">邮箱：</div><div class="item-content"><div class="moye-ui" data-name="email"></div></div></div><div class="item-header"><i class="iconfont">&#xf00a2;</i>验证密保手机<span>密保手机可用于找回交易密码等操作</span></div><div class="item"><div class="item-title"><i>*</i>手机号码：</div><div class="item-content"><div class="moye-ui" data-name="mobile"></div></div></div><div class="item"><div class="item-title"><i>*</i>手机验证码：</div><div class="item-content"><div class="moye-ui" data-name="auth-code"></div></div></div><div class="item"><div class="item-title"></div><div class="item-content"><div class="btn btn-submit">提交</div></div></div></div></div>
    <?php /*  Call merged included template "../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '77641094253a92ed5b74135-46284998');
content_53ace9623be938_20119475($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/footer.tpl" */?>

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
require(['msg/index'], function (index) {
    index.init({
        userName: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['name'], ENT_QUOTES, 'UTF-8', true);?>
',
        idNo: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['id_no'], ENT_QUOTES, 'UTF-8', true);?>
',
        'goto': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['goto'], ENT_QUOTES, 'UTF-8', true);?>
'
    });
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-27 11:47:46
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ace96236a474_05459735')) {function content_53ace96236a474_05459735($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-27 11:47:46
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53ace9623be938_20119475')) {function content_53ace9623be938_20119475($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
