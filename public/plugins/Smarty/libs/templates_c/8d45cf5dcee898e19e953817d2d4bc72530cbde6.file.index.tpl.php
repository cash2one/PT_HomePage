<?php /* Smarty version Smarty-3.1.18, created on 2014-06-27 11:51:10
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/fund/bind/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192277180453a7e0729863f5-61171760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d45cf5dcee898e19e953817d2d4bc72530cbde6' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/fund/bind/index.tpl',
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
  'nocache_hash' => '192277180453a7e0729863f5-61171760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a7e072ad54f8_42867081',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7e072ad54f8_42867081')) {function content_53a7e072ad54f8_42867081($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/fund/bind/index.aca3e8d9.css">

</head>
<body>

<?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '192277180453a7e0729863f5-61171760');
content_53acea2ed42475_25290621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><h2>绑定银行卡</h2><form id="bind-form" class="moye" data-ui-id="form" action="/boshi/index" target="_blank" method="POST" class="fund-bind-form"><input type="hidden" name="opType" value="bd001"><input type="hidden" name="idType" value="1"><?php if (!empty($_smarty_tpl->tpl_vars['tplData']->value['orderno'])) {?><input type="hidden" name="orderno" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['orderno'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><div class="row"><label class="form-label">开通银行信息:</label><div class="form-control"><div id="bank-panel"><input type="hidden" name="bankNo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['banks'][0]['code'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="hidden" name="payChannel" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['banks'][0]['pay_channel'], ENT_QUOTES, 'UTF-8', true);?>
"><h4 class="clearfix"><label>符号解释</label><span><i class="bank-property bank-property-zheng"></i>需网银证书（U盾、K宝等）验证</span><span><i class="bank-property bank-property-kuai"></i>支持快捷支持</span><span><i class="bank-property bank-property-ding"></i>支持定投</span><span class="right"><em>申X折</em>--申购此款基金手续费X折</span></h4><ul class="clearfix"><?php  $_smarty_tpl->tpl_vars['bank'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bank']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['banks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bank']->key => $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['bank']->key;
?><li class="<?php if ($_smarty_tpl->tpl_vars['index']->value%3==2) {?>last<?php }?><?php if ($_smarty_tpl->tpl_vars['index']->value==0) {?>active<?php }?>" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" data-index="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['index']->value, 'none');?>
" data-pay-channel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value['pay_channel'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value['logo_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""><?php if ($_smarty_tpl->tpl_vars['bank']->value['pay1']) {?><i class="bank-property bank-property-zheng"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['bank']->value['pay2']) {?><i class="bank-property bank-property-kuai"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['bank']->value['pay3']) {?><i class="bank-property bank-property-ding"></i><?php }?><p><?php if (!empty($_smarty_tpl->tpl_vars['bank']->value['shen_discount'])) {?>申购<em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value['shen_discount'], ENT_QUOTES, 'UTF-8', true);?>
折</em><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['bank']->value['ding_discount'])) {?>定投<em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bank']->value['ding_discount'], ENT_QUOTES, 'UTF-8', true);?>
折</em><?php }?></p><div><i class="iconfont">&#xe600;</i><b></b></div></li><?php } ?></ul></div></div></div><div class="row"><label class="form-label">绑定提示:</label><?php  $_smarty_tpl->tpl_vars['bank'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bank']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['banks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bank']->key => $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['bank']->key;
?><ul class="form-control bank-tip <?php if ($_smarty_tpl->tpl_vars['index']->value==0) {?>bank-tip-active<?php }?>"><?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bank']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?><li><i>•</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php } ?></ul><?php } ?></div><div class="row"><label class="form-label">储蓄卡卡号:</label><div class="form-control"><div class="fund-bind-input"><div id="card" class="ui-textbox" data-ui-id="card"><input type="text" name="cardNo" value=""></div></div></div></div><div class="row"><label class="form-label">银行留存手机号:</label><div class="form-control"><div id="phone" class="ui-textbox"><input type="text" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['phone'], ENT_QUOTES, 'UTF-8', true);?>
"></div></div></div><div class="row"><label class="form-label">真实姓名:</label><div class="form-control"><div id="name" class="ui-textbox"><input type="text" name="name" <?php if ($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['is_vertify']) {?>readonly<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['name'], ENT_QUOTES, 'UTF-8', true);?>
"></div></div></div><div class="row"><label class="form-label">身份证号:</label><div class="form-control"><div id="id" class="ui-textbox"><input type="text" name="idNo" <?php if ($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['is_vertify']) {?>readonly<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['id_no'], ENT_QUOTES, 'UTF-8', true);?>
"></div></div></div><div class="row"><label class="form-label"></label><div class="form-control"><button class="submit" type="submit">认&nbsp;证</button></div></div></form></div></div>
<?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '192277180453a7e0729863f5-61171760');
content_53acea2edfdff9_26682401($_smarty_tpl);
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
define('conf', {
    isUserVertified: <?php if ($_smarty_tpl->tpl_vars['tplData']->value['userInfo']['is_vertify']) {?>true<?php } else { ?>false<?php }?>
});
require(['fund/bind/index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-27 11:51:10
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53acea2ed42475_25290621')) {function content_53acea2ed42475_25290621($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-06-27 11:51:10
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53acea2edfdff9_26682401')) {function content_53acea2edfdff9_26682401($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
