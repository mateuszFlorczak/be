<?php /* Smarty version Smarty-3.1.14, created on 2014-01-18 17:54:53
         compiled from "D:\Programy\XAMPP\htdocs\BE\admin\themes\default\template\helpers\list\list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2486152dab1dde68a93-87589521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e60e6287b13d4b73ee4f76e188881a83b1d3151' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\admin\\themes\\default\\template\\helpers\\list\\list_action_addstock.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2486152dab1dde68a93-87589521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dab1dde87ea4_17717594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dab1dde87ea4_17717594')) {function content_52dab1dde87ea4_17717594($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/add_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>