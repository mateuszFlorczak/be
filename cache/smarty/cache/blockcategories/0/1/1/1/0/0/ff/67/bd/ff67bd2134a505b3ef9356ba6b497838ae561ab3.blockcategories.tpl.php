<?php /*%%SmartyHeaderCode:119552dabf08649ad8-09303125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff67bd2134a505b3ef9356ba6b497838ae561ab3' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\themes\\default\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
    '56047031a3c13120e065c1937004573d080e926c' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\themes\\default\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119552dabf08649ad8-09303125',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dabf0872c411_32160273',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dabf0872c411_32160273')) {function content_52dabf0872c411_32160273($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Kategorie</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/BE/index.php?id_category=3&amp;controller=category" 		title="Teraz mo&#380;esz kupi&#263; filmy na ITunes, a nast&#281;pnie zsynchronizowa&#263; je ze swoim iPod, ca&#322;y &#347;wiat to Tw&oacute;j wielki teatr.">iPod</a>
	</li>

												
<li >
	<a href="http://localhost/BE/index.php?id_category=4&amp;controller=category" 		title="Fantastyczne akcesoria dla Twojego iPod">Akcesoria</a>
	</li>

												
<li class="last">
	<a href="http://localhost/BE/index.php?id_category=5&amp;controller=category" 		title="Najnowocze&#347;niejsze laptopy od Apple">Laptopy</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>