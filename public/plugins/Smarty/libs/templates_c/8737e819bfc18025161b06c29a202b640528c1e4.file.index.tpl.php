<?php /* Smarty version Smarty-3.1.18, created on 2014-07-10 18:07:51
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/trade/fund/item/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433305853a7daae7be9b2-48325787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8737e819bfc18025161b06c29a202b640528c1e4' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/trade/fund/item/index.tpl',
      1 => 1404898242,
      2 => 'file',
    ),
    '8121bb421d05f7a1cf96f155eb32b98ec4d7a1d9' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/base.tpl',
      1 => 1404898242,
      2 => 'file',
    ),
    '51fe43787a5c5594f47f2aa49099519d877fc61f' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/header.tpl',
      1 => 1402911479,
      2 => 'file',
    ),
    '5cd20afa8fcf97434fb09edcf71e53cefae69c70' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/nav.tpl',
      1 => 1402911479,
      2 => 'file',
    ),
    '767dac93826d8809588f8badf2c459108c4e8976' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/footer.tpl',
      1 => 1402911479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433305853a7daae7be9b2-48325787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a7daae959830_09529774',
  'variables' => 
  array (
    'tplData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a7daae959830_09529774')) {function content_53a7daae959830_09529774($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/fund/item/index.323caf2c.css">

</head>
<body>
    
<?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1433305853a7daae7be9b2-48325787');
content_53be65f7842128_66854078($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
<?php /*  Call merged included template "../../common/tpl/nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1433305853a7daae7be9b2-48325787');
content_53be65f786d975_64369614($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/nav.tpl" */?>
<div id="main" class="container"><div class="crumb"><span>基金超市</span><em>&gt;</em><span class="active">产品详情</span></div><ul class="info-box clearfix"><li class="left"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['surface'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""><div id="share-button" class="bdsharebuttonbox bdshare-button-style0-16"><a href="#" data-cmd="more">分享给好友</a></div></li><li class="mid mid-fund-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundtype'], ENT_QUOTES, 'UTF-8', true);?>
"><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundname'], ENT_QUOTES, 'UTF-8', true);?>
</h3><ul><?php if ($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundtype']==2) {?><li><label>产品类型</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundtypename'], ENT_QUOTES, 'UTF-8', true);?>
</span></li><li><label>购买手续费</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fee'], ENT_QUOTES, 'UTF-8', true);?>
</span></li><li><label>7日年化收益率</label><span><em><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['qrnhprofit'], ENT_QUOTES, 'UTF-8', true);?>
</b>%</em><i>(数据来源：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['source'], ENT_QUOTES, 'UTF-8', true);?>
)</i></span></li><li><label>起购金额</label><span><em class="price">￥<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['min'], ENT_QUOTES, 'UTF-8', true);?>
</em><br><i>此产品购买赎回同卡进同卡出，<br>赎回资金只能转入投资时使用的银行卡</i></span></li><?php } else { ?><li><label>增长率</label><dl><?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['fund']['rates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value) {
$_smarty_tpl->tpl_vars['rate']->_loop = true;
?><dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
：<em class="<?php if ($_smarty_tpl->tpl_vars['rate']->value['value']<0) {?>negative<?php } elseif ($_smarty_tpl->tpl_vars['rate']->value['value']>0) {?>positive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['rate']->value['value']!=0) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
%<?php } else { ?>--<?php }?></em></dd><?php } ?><dt><i>(数据来源：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['source'], ENT_QUOTES, 'UTF-8', true);?>
)</i></dt></dl></li><li><label>产品类型</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundtypename'], ENT_QUOTES, 'UTF-8', true);?>
</span></li><li><label>最新净值</label><span><em><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['assetnetvaluemain'], ENT_QUOTES, 'UTF-8', true);?>
</b></em><i>(净值日期: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['pubdate'], ENT_QUOTES, 'UTF-8', true);?>
)</i></span></li><li><label>申购费用</label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fee'], ENT_QUOTES, 'UTF-8', true);?>
<ins><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fee_discount'], ENT_QUOTES, 'UTF-8', true);?>
</ins><del><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fee_old'], ENT_QUOTES, 'UTF-8', true);?>
</del></span></li><li><label>起购金额</label><span><em class="price">￥<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['min'], ENT_QUOTES, 'UTF-8', true);?>
</em><br><i>此产品购买赎回同卡进同卡出，赎回资金只能转入投资时使用的银行卡</i></span></li><?php }?></ul><form id="form" action="/center/order/confirm" method="GET"><label><span>购买金额：</span><div id="count" class="ui-textbox"><input type="text" name="count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['min'], ENT_QUOTES, 'UTF-8', true);?>
" data-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['min'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['tplData']->value['fund']['available']) {?>readonly<?php }?>>元</div></label><input type="hidden" name="fundcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundcode'], ENT_QUOTES, 'UTF-8', true);?>
"><button type="submit" <?php if (!$_smarty_tpl->tpl_vars['tplData']->value['fund']['available']) {?>disabled<?php }?> class="<?php if (!$_smarty_tpl->tpl_vars['tplData']->value['fund']['available']) {?>disabled<?php }?>"><?php if ($_smarty_tpl->tpl_vars['tplData']->value['fund']['available']) {?>立即购买<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['fund']['reason'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></button></form></li><li class="right"><h4>商家认证</h4><dl><dt>公司:</dt><dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['manager']['f_fname'], ENT_QUOTES, 'UTF-8', true);?>
</dd><dt>注册地:</dt><dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['manager']['registcity'], ENT_QUOTES, 'UTF-8', true);?>
</dd></dl><p title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['manager']['historyprogress'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['manager']['historyprogress'], ENT_QUOTES, 'UTF-8', true),118,"...",true);?>
</p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['manager']['bridge'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">在线客服</a></li></ul><div class="detail-box"><ul class="tab"><li>基金详情</li></ul><div><ul><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['fund']['detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</li><?php } ?></ul><em id="detail-box-toggler" style="<?php if (count($_smarty_tpl->tpl_vars['tplData']->value['fund']['detail'])<4) {?>display:none<?php }?>">显示全部</em></div></div><div class="content-box"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['fund']['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" alt=""><?php } ?></div></div>

<?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1433305853a7daae7be9b2-48325787');
content_53be65f7965de9_38846544($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/footer.tpl" */?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['tplData']->value['feRoot'];?>
/dep/esl/1.8.6/esl.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['tplData']->value['feRoot'];?>
/dep/jquery/1.10.2/jquery.js"></script>
    
<script id="bdshell_js"></script>
<script>
require.config({
        'baseUrl': '<?php echo $_smarty_tpl->tpl_vars['tplData']->value['feRoot'];?>
/asset',
        'paths': {
            'onesite': '../dep/onesite/site',
            'moye': '../dep/moye/asset'
        },
        'urlArgs': '1.0.0'
    });

define('conf', {
    uiRoot: '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tplData']->value['baseUrl'], 'none');?>
',
    share: {
        text: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['fund']['fundname'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
        img: '<?php echo strtr($_smarty_tpl->tpl_vars['tplData']->value['fund']['surface'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    }
});

require(['onesite'], function (onesite) {
    onesite.render({
        header: {
            nav: 'onesite-header'
        },
        footer: {
            nav: 'onesite-footer'
        }
    });
});

require(['fund/item/index'], function (index) {
    index.init();
});

</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-10 18:07:51
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53be65f7842128_66854078')) {function content_53be65f7842128_66854078($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-10 18:07:51
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53be65f786d975_64369614')) {function content_53be65f786d975_64369614($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-10 18:07:51
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/trade/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53be65f7965de9_38846544')) {function content_53be65f7965de9_38846544($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
