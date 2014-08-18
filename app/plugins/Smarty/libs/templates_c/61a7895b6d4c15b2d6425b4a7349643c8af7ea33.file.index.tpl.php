<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:21:19
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/pay/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130489941553a8e6efa3fe38-81993513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61a7895b6d4c15b2d6425b4a7349643c8af7ea33' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/pay/index.tpl',
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
  'nocache_hash' => '130489941553a8e6efa3fe38-81993513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a8e6efc04043_29040283',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8e6efc04043_29040283')) {function content_53a8e6efc04043_29040283($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/pay/index.7820deac.css">

</head>
<body>

<?php /*  Call merged included template "../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '130489941553a8e6efa3fe38-81993513');
content_53bf906f4daca9_38622010($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../common/tpl/header.tpl" */?>
<div class="main"><div class="container clearfix"><h2>支付</h2><form id="pay-form" class="form fund-bind-form" action="/boshi/index" method="POST" autocomplete="off"><input type="hidden" name="orderNo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['orderNo'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="hidden" name="opType" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['opType'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="hidden" name="fundcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['fundcode'], ENT_QUOTES, 'UTF-8', true);?>
"><input type="hidden" name="count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
"><ul id="fund-info"><li class="surface"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['surface'], ENT_QUOTES, 'UTF-8', true);?>
" class="fund-surface" alt=""></a></li><li class="basic"><h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['fundname'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['f_fname'], ENT_QUOTES, 'UTF-8', true);?>
</p></li><li class="type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['fundtypename'], ENT_QUOTES, 'UTF-8', true);?>
</li><li class="count">￥<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
</b></li></ul><h3>支付方式</h3><?php $_smarty_tpl->tpl_vars['reorder'] = new Smarty_variable(htmlspecialchars('/center/order', ENT_QUOTES, 'UTF-8', true), null, 0);?><?php  $_smarty_tpl->tpl_vars['card'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['card']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['cards']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['card']->key => $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['card']->key;
?><?php if (isset($_smarty_tpl->tpl_vars['card']->value['selected'])&&$_smarty_tpl->tpl_vars['card']->value['selected']) {?><?php $_smarty_tpl->tpl_vars['selectedCard'] = new Smarty_variable($_smarty_tpl->tpl_vars['card']->value, null, 0);?><?php }?><?php } ?><div class="card-panel"><input type="hidden" name="bankContractNo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCard']->value['bankContractNo'], ENT_QUOTES, 'UTF-8', true);?>
"><ul class="clearfix"><?php  $_smarty_tpl->tpl_vars['card'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['card']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['cards']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['card']->key => $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['card']->key;
?><li class="<?php if ($_smarty_tpl->tpl_vars['index']->value%4==3) {?>last <?php }?><?php if (isset($_smarty_tpl->tpl_vars['card']->value['selected'])&&$_smarty_tpl->tpl_vars['card']->value['selected']) {?>active<?php }?><?php if ($_smarty_tpl->tpl_vars['index']->value>3) {?>extra<?php }?>" data-contract-no="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['bankContractNo'], ENT_QUOTES, 'UTF-8', true);?>
" data-index="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['index']->value, 'none');?>
" data-card="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['number'], ENT_QUOTES, 'UTF-8', true);?>
" data-overflow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['levelup'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['logo_url'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""><span>**<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['number'], ENT_QUOTES, 'UTF-8', true);?>
</span><p><?php if (!empty($_smarty_tpl->tpl_vars['card']->value['shen_discount'])) {?>申购<em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['shen_discount'], ENT_QUOTES, 'UTF-8', true);?>
折</em><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['card']->value['ding_discount'])) {?>定投<em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['card']->value['ding_discount'], ENT_QUOTES, 'UTF-8', true);?>
折</em><?php }?></p><div><i class="iconfont">&#xe600;</i><b></b></div></li><?php } ?><li class="add <?php if (count($_smarty_tpl->tpl_vars['tplData']->value['cards'])%4==3) {?>last<?php }?>"><a href="/center/fund/bind?orderno=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['orderNo'], ENT_QUOTES, 'UTF-8', true);?>
&amount=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="iconfont">&#xe60e;</i>绑定其他银行卡</a></li><?php if (count($_smarty_tpl->tpl_vars['tplData']->value['cards'])>4) {?><li class="toggler"><em>更多银行<i class="iconfont">&#xe65b;</i></em></li><?php }?></ul></div><div id="pay-panel" style="<?php if ($_smarty_tpl->tpl_vars['selectedCard']->value['levelup']!=0) {?>display:none<?php }?>"><h3>交易密码</h3><?php if ($_smarty_tpl->tpl_vars['tplData']->value['needSMS']) {?><div class="row"><label class="form-label">手机号：</label><div class="form-control"><span class="mask-phone"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
</span></div></div><div class="row"><label class="form-label">手机验证码：</label><div class="form-control"><div id="phone" class="ui-textbox skin-textbox-sms"><input type="text" name="code" autocomplete="off"></div><button class="ui-messageauthcode" type="button">获取验证码</button></div></div><?php }?><div class="row"><label class="form-label">填写交易密码：</label><div class="form-control"><div id="password" class="ui-textbox"><input type="password" name="password" autocomplete="off"></div><a id="forget-password" href="#">忘记交易密码？</a></div></div><div class="row"><label class="form-label"></label><div class="form-control"><button class="button-major" type="submit">确认付款</button></div></div></div></form><div class="overflow-panel" id="bank-overflow" style="<?php if ($_smarty_tpl->tpl_vars['selectedCard']->value['levelup']!=2) {?>display:none<?php }?>"><h3>交易提示</h3><div><i class="icon-waring iconfont">&#xe60d;</i><h5>您欲支付的金额已超过该银行的最高上限 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
</b> 元</h5><p>您可以换家银行或重新下单</p><a class="button-major" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reorder']->value, ENT_QUOTES, 'UTF-8', true);?>
">重新下单</a></div></div><form class="overflow-panel" id="shoutcut-overflow" target="_blank" method="POST" id="shoutcut-overflow" style="<?php if ($_smarty_tpl->tpl_vars['selectedCard']->value['levelup']!=1) {?>display:none<?php }?>" action="/boshi/index"><input type="hidden" name="opType" value="bd003"><input type="hidden" name="bankContractNo"><input type="hidden" name="cardNoLast"><h3>交易提示</h3><div><i class="icon-waring iconfont">&#xe60d;</i><h5>您欲支付的金额已超过支付上限 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['count'], ENT_QUOTES, 'UTF-8', true);?>
</b> 元</h5><p>是否希望提升支付额度？ 您也可换张银行卡或重新下单</p><button id="levelup" class="button-major" type="submit">提升额度</button><a class="button-warning" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reorder']->value, ENT_QUOTES, 'UTF-8', true);?>
">重新下单</a></div></form><div id="pay-help"><h4><i>•</i>7*24小时交易平台   网上理财更轻松</h4><p>百度财富提供7*24小时不间断服务，您可以轻松帮您实现“随时随地”、“安全快捷”的网上理财梦想，不用辛辛苦苦的在银行排队，让您足不出户，就可完成所有的基金投资及各项理财查询。但是，超过每天交易时间（通常是15：00）的下单申请，将顺延为第2个工作日的交易申请。</p><h4><i>•</i>申购费率有优惠   每家银行各不同</h4><p>支持多家银行卡，封闭式交易付款渠道，提供您进行各项款项支付，让您的资金到账更快捷、更安全，且每张银行卡申购费率不同，非货币基金网上申购费率四折起，请您在支付时仔细阅读银行卡支付说明。</p><h4><i>•</i>交易系统安全稳定  交易密码勿泄露</h4><p>基金交易所有环节均在https环境下完成，且均有防火墙、安全控件等措施，以保证安全稳定。交易密码是您安全交易的必要信息，请勿泄漏，并且建议您不要在公共场所或公用电脑上进行基金交易，以免交易密码泄露。</p><h4><i>•</i>基金公司负责基金产品的销售</h4><p>所有基金产品销售均有基金公司进行，任何有关交易的疑问，请咨询相关产品的基金公司。</p></div></div></div>
<?php /*  Call merged included template "../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '130489941553a8e6efa3fe38-81993513');
content_53bf906f5ee5e9_21291822($_smarty_tpl);
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
define('conf', {
    baseUrl: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['baseUrl'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    needSMS: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['needSMS'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    buyMethond: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['fundInfo']['buymethod'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
require(['pay/index'], function (index) {
    index.init();
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:21:19
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53bf906f4daca9_38622010')) {function content_53bf906f4daca9_38622010($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-11 15:21:19
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53bf906f5ee5e9_21291822')) {function content_53bf906f5ee5e9_21291822($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
