<?php /* Smarty version Smarty-3.1.7, created on 2019-05-22 11:43:24
         compiled from "/app/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewBlockView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16069495035ce535dcc9eff3-64775823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '775f8028b04cec2068f69ac0bae4f6968ae5f834' => 
    array (
      0 => '/app/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewBlockView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16069495035ce535dcc9eff3-64775823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'RECORD_STRUCTURE' => 0,
    'BLOCK_LABEL_KEY' => 0,
    'BLOCK_LIST' => 0,
    'BLOCK' => 0,
    'FIELD_MODEL_LIST' => 0,
    'USER_MODEL' => 0,
    'DAY_STARTS' => 0,
    'IS_HIDDEN' => 0,
    'MODULE_NAME' => 0,
    'FIELD_MODEL' => 0,
    'TAXCLASS_DETAILS' => 0,
    'COUNTER' => 0,
    'WIDTHTYPE' => 0,
    'tax' => 0,
    'MODULE' => 0,
    'IMAGE_DETAILS' => 0,
    'IMAGE_INFO' => 0,
    'fieldDataType' => 0,
    'RECORD' => 0,
    'BASE_CURRENCY_SYMBOL' => 0,
    'IS_AJAX_ENABLED' => 0,
    'FIELD_DISPLAY_VALUE' => 0,
    'FIELD_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ce535de25ddf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce535de25ddf')) {function content_5ce535de25ddf($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' /><?php }?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->key;
?><?php $_smarty_tpl->tpl_vars['BLOCK'] = new Smarty_variable($_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value], null, 0);?><?php if ($_smarty_tpl->tpl_vars['BLOCK']->value==null||count($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value)<=0){?><?php continue 1?><?php }?><div class="block block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
" data-block="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
" data-blockid="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
"><?php $_smarty_tpl->tpl_vars['IS_HIDDEN'] = new Smarty_variable($_smarty_tpl->tpl_vars['BLOCK']->value->isHidden(), null, 0);?><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><input type=hidden name="timeFormatOptions" data-value='<?php echo $_smarty_tpl->tpl_vars['DAY_STARTS']->value;?>
' /><div><h4 class="textOverflowEllipsis maxWidth50"><img class="cursorPointer alignMiddle blockToggle <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)){?> hide <?php }?>" src="<?php echo vimage_path('arrowRight.png');?>
" data-mode="hide" data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
><img class="cursorPointer alignMiddle blockToggle <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)){?> hide <?php }?>" src="<?php echo vimage_path('arrowdown.png');?>
" data-mode="show" data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
>&nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp1,$_tmp2);?>
</h4></div><hr><div class="blockData"><table class="table detailview-table no-border"><tbody <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value){?> class="hide" <?php }?>><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><tr><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['fieldDataType'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()){?><?php continue 1?><?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="83"){?><?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAXCLASS_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value){
$_smarty_tpl->tpl_vars['tax']->_loop = true;
 $_smarty_tpl->tpl_vars['count']->value = $_smarty_tpl->tpl_vars['tax']->key;
?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars["COUNTER"] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["COUNTER"] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class='muted'><?php echo vtranslate($_smarty_tpl->tpl_vars['tax']->value['taxlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
(%)</span></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="value textOverflowEllipsis" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" ><?php if ($_smarty_tpl->tpl_vars['tax']->value['check_value']==1){?><?php echo $_smarty_tpl->tpl_vars['tax']->value['percentage'];?>
<?php }else{ ?>0<?php }?></span></td><?php } ?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="69"||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="105"){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value!=0){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="muted"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo vtranslate($_tmp3,$_tmp4);?>
</span></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><ul id="imageContainer"><?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
<?php $_tmp5=ob_get_clean();?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'])&&!empty($_tmp5)){?><li><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'];?>
_<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" width="400" height="300" /></li><?php }?><?php } ?></ul></td><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="20"||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="19"||$_smarty_tpl->tpl_vars['fieldDataType']->value=='reminder'||$_smarty_tpl->tpl_vars['fieldDataType']->value=='recurrence'){?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value=='1'){?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><td class="fieldLabel textOverflowEllipsis <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldLabel_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='description'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='69'){?> style='width:8%'<?php }?>><span class="muted"><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Documents'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label')=="File Name"&&$_smarty_tpl->tpl_vars['RECORD']->value->get('filelocationtype')=='E'){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo vtranslate("LBL_FILE_URL",$_tmp6);?>
<?php }else{ ?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label');?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo vtranslate($_tmp7,$_tmp8);?>
<?php }?><?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='72')&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='unit_price')){?>(<?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_SYMBOL']->value;?>
)<?php }?></span></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldValue_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='19'||$_smarty_tpl->tpl_vars['fieldDataType']->value=='reminder'||$_smarty_tpl->tpl_vars['fieldDataType']->value=='recurrence'){?> colspan="3" <?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?> <?php }?>><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['fieldDataType']->value=='multipicklist'){?><?php $_smarty_tpl->tpl_vars['FIELD_DISPLAY_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['FIELD_DISPLAY_VALUE'] = new Smarty_variable(Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))), null, 0);?><?php }?><span class="value" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='19'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='21'){?> style="white-space:normal;" <?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()=='true'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable()=='true'){?><span class="hide edit pull-left"><?php if ($_smarty_tpl->tpl_vars['fieldDataType']->value=='multipicklist'){?><input type="hidden" class="fieldBasicData" data-name='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
[]' data-type="<?php echo $_smarty_tpl->tpl_vars['fieldDataType']->value;?>
" data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['FIELD_DISPLAY_VALUE']->value;?>
' data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><?php }else{ ?><input type="hidden" class="fieldBasicData" data-name='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
' data-type="<?php echo $_smarty_tpl->tpl_vars['fieldDataType']->value;?>
" data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['FIELD_DISPLAY_VALUE']->value;?>
' data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><?php }?></span><span class="action pull-right"><a href="#" onclick="return false;" class="editAction fa fa-pencil"></a></span><?php }?></td><?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value)==1&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!="19"&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!="20"&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!="30"&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')!="recurringtype"&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!="69"&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!="105"){?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><?php }?><?php } ?><?php if (end($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value)==true&&count($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value)!=1&&$_smarty_tpl->tpl_vars['COUNTER']->value==1){?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><?php }?></tr></tbody></table></div></div><br><?php } ?><?php }} ?>