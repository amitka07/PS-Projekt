<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:21
  from 'C:\xampp\htdocs\Schronisko\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf39b92c62_59508323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fff695b656bd5aa5e8d5935244b7dd15b8d0cca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\templates\\main.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665caf39b92c62_59508323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<?php echo '<script'; ?>
>
		function abortion(idek) {
			const xhttp = new XMLHttpRequest();
			xhttp.onload = function() {
				alert("Piesek lata z aniołkami");
			}
			xhttp.open("GET", '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DeletePies&DeleteDogVariable=' + idek, true);
			xhttp.send();
		}
	<?php echo '</script'; ?>
>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "brak tytułu" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
		integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
</head>

<body>
	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_891580825665caf39b92382_83985195', 'content');
?>

	</div>
</body>

</html><?php }
/* {block 'content'} */
class Block_891580825665caf39b92382_83985195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_891580825665caf39b92382_83985195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
