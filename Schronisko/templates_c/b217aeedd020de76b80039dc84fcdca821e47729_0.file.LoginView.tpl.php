<?php
/* Smarty version 4.3.4, created on 2024-06-02 20:33:51
  from 'C:\xampp\htdocs\Schronisko\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665cbb0f732ca7_32151921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b217aeedd020de76b80039dc84fcdca821e47729' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\LoginView.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665cbb0f732ca7_32151921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633245784665cbb0f725452_18769176', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1633245784665cbb0f725452_18769176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1633245784665cbb0f725452_18769176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
		<h1>Logowanie do systemu</h1>
		<fieldset>
			<div class="pure-control-group">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" />
			</div>
			<div class="pure-control-group">
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div class="pure-controls">
				<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
			</div>
		</fieldset>
	</form>

	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Nie masz jeszcze konta? zarejestruj się!</a>

	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
