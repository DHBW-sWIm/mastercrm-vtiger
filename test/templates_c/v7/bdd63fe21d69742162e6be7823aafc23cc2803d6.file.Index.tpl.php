<?php /* Smarty version Smarty-3.1.7, created on 2019-05-22 13:02:42
         compiled from "/app/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10903687175ce54872388019-53006584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd63fe21d69742162e6be7823aafc23cc2803d6' => 
    array (
      0 => '/app/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/Index.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10903687175ce54872388019-53006584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ce54872474b4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce54872474b4')) {function content_5ce54872474b4($_smarty_tpl) {?>
<div class="col-sm-12 col-xs-12 content-area" id="importModules"><div class="row"><div class="col-sm-4 col-xs-4"><div class="row"><div class="col-sm-8 col-xs-8"><input type="text" id="searchExtension" class="extensionSearch form-control" placeholder="<?php echo vtranslate('Search for an extension..',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></div></div></div><br><div class="contents row"><div class="col-sm-12 col-xs-12" id="extensionContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CardSetupModals.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>