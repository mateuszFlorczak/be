<?php /* Smarty version Smarty-3.1.14, created on 2014-01-18 17:54:52
         compiled from "D:\Programy\XAMPP\htdocs\BE\admin\themes\default\template\controllers\shop\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2204352dab1dc125b73-97144999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7408d4aad20a0f05a00ea024c9fbd4822628175' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\list\\list_action_delete.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2204352dab1dc125b73-97144999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'id_shop' => 0,
    'shops_having_dependencies' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dab1dc154977_45453589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dab1dc154977_45453589')) {function content_52dab1dc154977_45453589($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete"
	<?php if (in_array($_smarty_tpl->tpl_vars['id_shop']->value,$_smarty_tpl->tpl_vars['shops_having_dependencies']->value)){?>
		onclick="jAlert('<?php echo smartyTranslate(array('s'=>'You cannot delete this shop\'s (customer and/or order dependency)','js'=>1),$_smarty_tpl);?>
'); return false;"
	<?php }elseif(isset($_smarty_tpl->tpl_vars['confirm']->value)){?>
		onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; } else { event.stopPropagation(); event.preventDefault();};"
	<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>