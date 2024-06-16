<?php
/* Smarty version 4.3.4, created on 2024-06-16 16:42:46
  from 'C:\xampp\htdocs\Schronisko\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666ef9e6684036_85488835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52037a557b26d9a7e7c6978405b5da436c17a4b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\RegisterView.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_666ef9e6684036_85488835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_896939461666ef9e658aab0_05955524', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_896939461666ef9e658aab0_05955524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_896939461666ef9e658aab0_05955524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <h1>Rejestracja do systemu</h1>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login">name: </label>
                <input id="id_login" type="text" name="name" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">surname: </label>
                <input id="id_pass" type="text" name="surname" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">mail: </label>
                <input id="id_pass" type="text" name="mail" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password repeat: </label>
                <input id="id_pass" type="password" name="pass2" /><br />
            </div>
            <div class="pure-controls">
                <input type="submit" value="zarejestruj" class="pure-button pure-button-primary" />
            </div>
        </fieldset>
    </form>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Masz już konto? zaloguj się!</a>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
