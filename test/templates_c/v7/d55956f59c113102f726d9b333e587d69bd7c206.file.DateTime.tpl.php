<?php /* Smarty version Smarty-3.1.7, created on 2019-07-10 10:45:52
         compiled from "/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Calendar/uitypes/DateTime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14914183025d25c1e0e132e2-84595328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd55956f59c113102f726d9b333e587d69bd7c206' => 
    array (
      0 => '/var/www/html/mastercrm-vtiger/includes/runtime/../../layouts/v7/modules/Calendar/uitypes/DateTime.tpl',
      1 => 1560717990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14914183025d25c1e0e132e2-84595328',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'MODULE_MODEL' => 0,
    'DATE_TIME_VALUE' => 0,
    'TIME_FIELD' => 0,
    'DATE_TIME_COMPONENTS' => 0,
    'DATE_TIME_CONVERTED_VALUE' => 0,
    'DATE_FIELD' => 0,
    'MODULE' => 0,
    'BLOCK_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d25c1e0e7b26',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d25c1e0e7b26')) {function content_5d25c1e0e7b26($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='date_start'){?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule(), null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_start'), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='due_date'){?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable(false, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['DATE_TIME_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['TIME_FIELD']->value)){?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1]), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['TIME_FIELD']->value){?><?php $_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE'] = new Smarty_variable(DateTimeField::convertToUserTimeZone($_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value)->format('Y-m-d H:i:s'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['DATE_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[0]), null, 0);?><?php }?><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/Date.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['DATE_FIELD']->value), 0);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['TIME_FIELD']->value)){?><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/Time.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value,'FIELD_NAME'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value->getFieldName()), 0);?>
</div><?php }?><?php }} ?>