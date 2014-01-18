<?php /*%%SmartyHeaderCode:1073452dabf0814c423-03173900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08d8519a1c5e48c8c68b27b8c6b01a5fe8254bb3' => 
    array (
      0 => 'D:\\Programy\\XAMPP\\htdocs\\BE\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1073452dabf0814c423-03173900',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dabf081a2344_29431338',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dabf081a2344_29431338')) {function content_52dabf081a2344_29431338($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/BE/index.php?controller=contact" title="Kontakt">Kontakt</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/BE/index.php?controller=sitemap" title="Mapa strony">Mapa strony</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/BE/index.php', 'Students\\\' Ally', 'Dodaj do ulubionych');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>