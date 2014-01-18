<?php /*%%SmartyHeaderCode:477852dabf096a7a84-46270756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9338a7de28bf7d3f2e4a5f8c03acff801bdaf36b' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '477852dabf096a7a84-46270756',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dabf09767132_61643181',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dabf09767132_61643181')) {function content_52dabf09767132_61643181($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/BE/index.php?controller=my-account" title="Zarządzaj moim kontem klienta" rel="nofollow">Moje konto</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/BE/index.php?controller=history" title="Lista moich zamówień" rel="nofollow">Moje zamówienia</a></li>
						<li><a href="http://localhost/BE/index.php?controller=order-slip" title="Lista moich paragonów" rel="nofollow">Moje noty kredytowe</a></li>
			<li><a href="http://localhost/BE/index.php?controller=addresses" title="Lista moich adresów" rel="nofollow">Moje adresy</a></li>
			<li><a href="http://localhost/BE/index.php?controller=identity" title="Zarządzaj moimi informacjami osobistymi" rel="nofollow">Moje informacje osobiste</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/BE/index.php?mylogout" title="Wyloguj się" rel="nofollow">Wyloguj się</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>