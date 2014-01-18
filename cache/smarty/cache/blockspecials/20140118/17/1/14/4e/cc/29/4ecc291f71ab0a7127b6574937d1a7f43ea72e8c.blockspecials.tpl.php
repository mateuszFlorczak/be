<?php /*%%SmartyHeaderCode:2409952dabf09004573-43151796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ecc291f71ab0a7127b6574937d1a7f43ea72e8c' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\themes\\default\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409952dabf09004573-43151796',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'mediumSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'specific_prices' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dabf090fa726_56074230',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dabf090fa726_56074230')) {function content_52dabf090fa726_56074230($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<p class="title_block"><a href="http://localhost/BE/index.php?controller=prices-drop" title="Promocje">Promocje</a></p>
	<div class="block_content">

		<ul class="products clearfix">
			<li class="product_image">
				<a href="http://localhost/BE/index.php?id_product=1&amp;controller=product"><img src="http://localhost/BE/img/p/1/5/15-medium_default.jpg" alt="iPod Nano" height="58" width="58" title="iPod Nano" /></a>
			</li>
			<li>
																												<span class="reduction"><span>-5%</span></span>
															
					<p class="s_title_block"><a href="http://localhost/BE/index.php?id_product=1&amp;controller=product" title="iPod Nano">iPod Nano</a></p>
									<span class="price-discount">204,66 zł</span>
					<span class="price">194,42 zł</span>
							</li>
		</ul>
		<p>
			<a href="http://localhost/BE/index.php?controller=prices-drop" title="Wszystkie promocje">&raquo; Wszystkie promocje</a>
		</p>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>