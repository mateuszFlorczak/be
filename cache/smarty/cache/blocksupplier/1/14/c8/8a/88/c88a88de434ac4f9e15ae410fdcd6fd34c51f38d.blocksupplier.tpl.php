<?php /*%%SmartyHeaderCode:2422552dabf087767a4-51102393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c88a88de434ac4f9e15ae410fdcd6fd34c51f38d' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2422552dabf087767a4-51102393',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dabf088978e6_40378016',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dabf088978e6_40378016')) {function content_52dabf088978e6_40378016($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/BE/index.php?controller=supplier" title="Dostawcy">Dostawcy</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/BE/index.php?id_supplier=1&amp;controller=supplier" title="Więcej AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/BE/index.php?id_supplier=2&amp;controller=supplier" title="Więcej Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/BE/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Wszyscy dostawcy</option>
									<option value="http://localhost/BE/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://localhost/BE/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>