<?php /* Smarty version Smarty-3.1.18, created on 2014-07-15 14:22:15
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/property/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12320986053a8ea1ad58bc3-42569282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd347c8f5a54213386517d5b282fac524222e421' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/property/index/index.tpl',
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
    '5b320f907ae820167e52251644651fb667b8e3e4' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/property/index/property.tpl',
      1 => 1403669380,
      2 => 'file',
    ),
    '960bfd4e345019ec929f14659b84125737f9619c' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/property/index/history-property.tpl',
      1 => 1403669380,
      2 => 'file',
    ),
    'bb8289c136dfbf6ff871406c5e182550d3de83f1' => 
    array (
      0 => '/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl',
      1 => 1402911476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12320986053a8ea1ad58bc3-42569282',
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
  'unifunc' => 'content_53a8ea1af3abc6_82022556',
  'variables' => 
  array (
    'tplData' => 0,
    'extData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a8ea1af3abc6_82022556')) {function content_53a8ea1af3abc6_82022556($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.escape.php';
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>百度财富-我的资产</title>
    
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['feRoot'], ENT_QUOTES, 'UTF-8', true);?>
/asset/property/index/index.116f68da.css">

</head>
<body>

    <?php /*  Call merged included template "../../common/tpl/side-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/side-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12320986053a8ea1ad58bc3-42569282');
content_53c4c897247a10_36396228($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/side-nav.tpl" */?>
    <?php /*  Call merged included template "../../common/tpl/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12320986053a8ea1ad58bc3-42569282');
content_53c4c897286932_72569109($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "../../common/tpl/header.tpl" */?>
    <div class="main"><div class="container clearfix"><?php smarty_template_function_sideNav($_smarty_tpl,array('data'=>"property"));?>
<div class="content"><div class="property-title">我的资产</div><div class="ecl-ui-tabs" id="property-tab"><ul class="ecl-ui-tabs-labels"><li class="<?php if (!$_smarty_tpl->tpl_vars['tplData']->value['is_history']) {?>ecl-ui-tabs-selected<?php }?>"><a href="/center/property" target="_self">当前投资</a></li><li class="<?php if ($_smarty_tpl->tpl_vars['tplData']->value['is_history']) {?>ecl-ui-tabs-selected<?php }?>"><a href="/center/hproperty" target="_self">投资记录</a></li></ul></div><?php if (!$_smarty_tpl->tpl_vars['tplData']->value['is_history']) {?><?php /*  Call merged included template "./property.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./property.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12320986053a8ea1ad58bc3-42569282');
content_53c4c8972c8ba9_68876553($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./property.tpl" */?><?php } else { ?><?php /*  Call merged included template "./history-property.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./history-property.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12320986053a8ea1ad58bc3-42569282');
content_53c4c8973af138_70102755($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "./history-property.tpl" */?><?php }?></div></div></div><script id="fund-info" type="text/template"><ul class="fund-detail"><li>·销售机构：${property_info.seller}</li><li>·${property_info.kname}：${property_info.vname}</li><li>·基金类型：${property_info.type}</li><li>·可用份额：${property_info.amount_use}</li></ul><div class="query-more" data-id="${property_info.product_code}"></div><table class="fund-bind-card"><thead><tr><th>投资银行卡</th><th>总金额</th><th>持有份额</th><th>可用份额</th><th></th></tr></thead><tbody><!-- for: ${detail} as ${item} --><tr><td class="bank-name"><img src="${item.bank_logo}" alt=""><span>${item.bank_name} ${item.card_no}</span></td><td>${item.money_all}</td><td>${item.amount_all}</td><td>${item.amount_use}</td><td><a href="/trade/fund/detail/${property_info.product_code}?fr=center&type=add" target="_self">追加购买</a>|<a href="/center/redeem?property_id=${item.property_id}" target="_self">赎回</a></td></tr><!-- /for --></tbody></table></script><script id="history-record" type="text/template"><table><thead><tr><th>操作记录</th><th>操作时间</th><th>金额</th><th>状态</th></tr></thead><tbody><!-- for: ${process} as ${item} --><tr><td class="operation-record">${item.thing}</td><td class="time">${item.time}</td><td class="amount">&yen;${item.amount}</td><td class="status">${item.result}</td></tr><!-- /for --></tbody></table></script>
    <?php /*  Call merged included template "../../common/tpl/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../common/tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12320986053a8ea1ad58bc3-42569282');
content_53c4c897423156_90791572($_smarty_tpl);
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
require(['property/index/index'], function (index) {
    index.init({
        isHistory: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['is_history'], ENT_QUOTES, 'UTF-8', true);?>
' == 1 ? true : false 
    });
});
</script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-15 14:22:15
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/side-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c4c897247a10_36396228')) {function content_53c4c897247a10_36396228($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_sideNav')) {
    function smarty_template_function_sideNav($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['sideNav']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<div class="side-nav"><h4>个人中心</h4><ul><li><a href="/center/info" <?php if ($_smarty_tpl->tpl_vars['data']->value=='info') {?>class="active"<?php }?>><i class="iconfont">&#xf012d;</i>我的信息</a></li><li><a href="/center/property" <?php if ($_smarty_tpl->tpl_vars['data']->value=='property') {?>class="active"<?php }?>><i class="iconfont">&#xe605;</i>我的资产</a></li><li><a href="/center/order" <?php if ($_smarty_tpl->tpl_vars['data']->value=='order') {?>class="active"<?php }?>><i class="iconfont">&#x3437;</i>订单管理</a></li><li><a href="/center/funds" <?php if ($_smarty_tpl->tpl_vars['data']->value=='fund') {?>class="active"<?php }?>><i class="iconfont">&#xf0077;</i>基金账户管理</a></li></ul></div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-15 14:22:15
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c4c897286932_72569109')) {function content_53c4c897286932_72569109($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-15 14:22:15
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/property/index/property.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c4c8972c8ba9_68876553')) {function content_53c4c8972c8ba9_68876553($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.truncate.php';
?><div id="current">
    <div class="collect">
        <div class="current-bg-1">
            <span><b>&yen;</b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['balance'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            <p><em>资产总额</em><strong class="tooltips" style="display:none"><i class="iconfont">&#xe610;</i></strong></p>
        </div>
        <div class="current-bg-2">
            <span><b>&yen;</b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['history_income'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            <p><em>历史累计收益</em><strong class="tooltips"><i class="iconfont">&#xe610;</i></strong></p>
        </div>
        <div class="current-bg-3">
            <span><b>&yen;</b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['ungot_income'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            <p><em>未付收益</em><strong class="tooltips"><i class="iconfont">&#xe610;</i></strong></p>
        </div>    
    </div>
    
    <div class="financing">
        <div class="financing-title"><i>●</i>在途资产</div>
        <table class="financing-table">
            <thead>
                <tr>
                    <th>产品名称</th>
                    <th>操作</th>
                    <th>金额</th>
                    <th>份额</th>
                    <th>预计完成时间</th>
                    <th>操作</th>  
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['list_online']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td class="product-name"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vander_type'], ENT_QUOTES, 'UTF-8', true);?>
</i><span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['name'],20,'...'), ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                    <td class="history-operation">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['thing'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="money">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['in_num'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="amount">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['out_num'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="time">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['time'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="operation">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value['is_cancel']) {?>
                            <a href="/center/fund/cancel?order_no=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['order_no'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="cancel">撤销</a>
                            <?php }?>
                        </div>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="financing-title"><i>●</i>投资中的资产<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tplData']->value['all_investment'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
        <table class="financing-table">
            <thead>
                <tr>
                    <th>我的资产</th>
                    <th>金额</th>
                    <th>总份额</th>
                    <th>可用份额</th>
                    <th>操作</th>  
                </tr>
            </thead>
            <tbody class="investment">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['list_investment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td class="product-name"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vander_type'], ENT_QUOTES, 'UTF-8', true);?>
</i><span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['name'],20,'...'), ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                    <td class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['money_all'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['amount_all'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['amount_use'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td class="operation"><a href="/trade/fund/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product_code'], ENT_QUOTES, 'UTF-8', true);?>
?fr=center&type=add" class="continue-add" target="_blank">追加购买</a></td>
                </tr>
                <tr class="more">
                    <td colspan="5">
                        <div class="more-content" style="display: none"></div>
                        <div class="more-arrow" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product_code'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="iconfont">&#xe65b;</i></div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-15 14:22:15
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/property/index/history-property.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c4c8973af138_70102755')) {function content_53c4c8973af138_70102755($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/work/vs_lt/vsfinance_cycle/skeleton/vendors/Smarty-3.1.18/libs/plugins/modifier.truncate.php';
?><div id="history">
    
    <div class="financing">
        <table class="financing-table">
            <thead>
                <tr>
                    <th>产品名称</th>
                    <th>操作</th>
                    <th>预计完成时间</th>
                    <th>金额</th>
                    <th>状态</th>  
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tplData']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td class="product-name"><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['vander_type'], ENT_QUOTES, 'UTF-8', true);?>
</i><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['name'],20,'...'), ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td class="history-operation">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['thing'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="time">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['time'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="amount">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['amount'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                    <td class="status">
                        <?php  $_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['childItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['process']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->key => $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['childItem']->value['result'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    </td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['is_more']) {?>
                <tr class="view-more">
                    <td colspan="5">
                        <div class="query-more" data-more="true" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product_code'], ENT_QUOTES, 'UTF-8', true);?>
"></div>
                    </td>
                </tr>
                <?php }?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2014-07-15 14:22:15
         compiled from "/home/work/vs_lt/vsfinance_cycle/ui/views/center/common/tpl/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_53c4c897423156_90791572')) {function content_53c4c897423156_90791572($_smarty_tpl) {?><div id="onesite-footer" class="result-op"></div><?php }} ?>
