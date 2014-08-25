<?php /* Smarty version Smarty-3.1.18, created on 2014-06-25 02:54:42
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/guotai/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45835835953a9c9722cca87-63428781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd41a73d4e2c25eb237633bd6718a9b381b585408' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/guotai/index.tpl',
      1 => 1403601233,
      2 => 'file',
    ),
    '8bd0f214ba497acbae97aa847fdaf367a5536fa0' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/common/base.tpl',
      1 => 1402911398,
      2 => 'file',
    ),
    'f49ce69e90d399eb3c70be3941eeaa42ce5785b3' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/common/header.tpl',
      1 => 1402911398,
      2 => 'file',
    ),
    'cb03fbf9b27b166083428c9e0296cf3b48b848ca' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/common/nav.tpl',
      1 => 1402911398,
      2 => 'file',
    ),
    '2af5b951dc5eadb6a316a07f343512ef452d2b07' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/common/footer.tpl',
      1 => 1402911398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45835835953a9c9722cca87-63428781',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a9c972416521_34384356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a9c972416521_34384356')) {function content_53a9c972416521_34384356($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tplData']->value['feRoot'];?>
/asset/guotai/css/index.css">

</head>
<body>
    
    <?php /*  Call merged included template "../common/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '45835835953a9c9722cca87-63428781');
content_53a9c97238d667_83055933($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/header.tpl" */?>
    <?php /*  Call merged included template "../common/nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '45835835953a9c9722cca87-63428781');
content_53a9c9723d4aa0_36531956($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/nav.tpl" */?>
    <div id="main">
        <div id="help-toggler"><a href="#">开户帮助&nbsp;&gt;</a></div><div id="banner"><a id="start" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['baseUrl'], ENT_QUOTES, 'UTF-8', true);?>
/guotai/start"></a></div><div id="help" class="container" style="display:none"><h2>免费在线开户帮助</h3><p>下面的内容描述了免费在线开户环节中的必要信息，如果您对免费在线开户流程不够了解，请耐心阅读。</p><h3><i>1</i><label>身份验证</label><hr width="100%" noshade size="1" color="#d9d9d9"></h3><p>（1）用户填写手机号。</p><p>（2）上传身份证影印文件正反双面或使用摄像头进行拍摄，在有效期内的本人二代居民身份证原件即可。</p><p>（3）使用高清摄像头和麦克风、耳机进行视频见证，可能出现排队情况请等待。</p><h3><i>2</i><label>开设账户</label><hr width="100%" noshade size="1" color="#d9d9d9"></h3><p>（1）投资者可在线选择开立证券账户、沪深基金TA账户、现金理财管理功能，如果在其他券商已开立证券账户，也可以选择转户到国泰君安。</p><p class="level2">如何办理转户：请您本人持身份证、证券账户卡至原券商营业部申请销户，如持有深市股票，您还需办理转托管（转入券商：国泰君安xxxx证券营业部,席位号：388000）。</p><p>（2）投资者需要设置国泰君安交易密码、资金密码和支付密码，也可将以上3个密码统一设置为国泰君安账户密码。</p><h3><i>3</i><label>完成账户设置</label><hr width="100%" noshade size="1" color="#d9d9d9"></h3><p>（1）风险测评：根据用户参与风险测评结果，判断投资人是否具备相应的风险承受能力，审慎参与市场投资，合理配置金融资产。</p><p>（2）完成账户：展示用户已经成功完成了基本流程。</p><p>（3）电话回访激活：</p><p class="level2">网上开户后，在等待一段时间通过电话进行回访激活。需要回答部分问题，例如：1. 客户姓名；2.  提供一下您的身份证号码；3. 请问现在与您通话的电话是您常用的电话吗。</p></div>
    </div>
    <?php /*  Call merged included template "../common/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '45835835953a9c9722cca87-63428781');
content_53a9c9723ff7c7_89038258($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/footer.tpl" */?>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F2724d98690b9b21595bd86c07591b6a3' type='text/javascript'%3E%3C/script%3E"));
</script>

    <script src="http://s1.bdstatic.com/r/www/cache/ecom/esl/1-8-0/esl.js"></script>
    <script src="http://s1.bdstatic.com/r/www/cache/static/jquery/jquery-1.10.2.min_f2fb5194.js"></script>
    
<script>
require.config({
    baseUrl: '<?php echo $_smarty_tpl->tpl_vars['tplData']->value['feRoot'];?>
/asset/guotai/js',
    paths: {
        onesite: '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tplData']->value['headerPath'], 'none');?>
',
        bowser: '../../../dep/bowser/bowser'
    }
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
require(['index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-25 02:54:42
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/common/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53a9c97238d667_83055933')) {function content_53a9c97238d667_83055933($_smarty_tpl) {?>
<div id="onesite-header"></div>

<div class="header result-op">
    <div class="header-content container clearfix"><a id="logo" href="http://caifu.baidu.com?from=jinrong"></a><ul><?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['active']) {?>active<?php }?>"><a data-click="{mod: 'nav', act:'a_nav_category'}" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nav']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nav']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php } ?></ul><a class="center-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['center'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="iconfont">&#xf012d;</i>我的财富</a></div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-25 02:54:42
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/common/nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53a9c9723d4aa0_36531956')) {function content_53a9c9723d4aa0_36531956($_smarty_tpl) {?>
<div class="nav result-op"><ul class="clearfix"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?><li><a data-click="{mod: 'select', act:'a'}" class="OP_LOG_BTN <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-25 02:54:42
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/common/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53a9c9723ff7c7_89038258')) {function content_53a9c9723ff7c7_89038258($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
