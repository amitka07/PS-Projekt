<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:36
  from 'C:\xampp\htdocs\Schronisko\app\views\templates\removedoggobeh.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf48342f90_78446397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5459865a832b458e00366bd0b75c9dce9b0c0583' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\templates\\removedoggobeh.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 2,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665caf48342f90_78446397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_496899703665caf4833e418_86357949', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_496899703665caf4833e418_86357949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_496899703665caf4833e418_86357949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div>
        <h1>Behavior Managment</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NazwaAkcji" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="idPsa">
            <input name="idZachowania">
            <select name="dzialanie">
                <option value="insert">Insert</option>
                <option value="delete">Delete</option>
            </select>
            <input type="submit" value="Wyślij" />
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
