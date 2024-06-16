<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:21
  from 'C:\xampp\htdocs\Schronisko\app\views\BehaviorListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf39930d07_50392887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d5712afcf90c62729abf75f7872e7cf2f97bc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\BehaviorListView.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665caf39930d07_50392887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1229858691665caf39659460_79056802', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1229858691665caf39659460_79056802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1229858691665caf39659460_79056802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <h1>Behaviors</h1>
        <div>
            <?php if ((isset($_smarty_tpl->tpl_vars['behaviors']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
$_smarty_tpl->tpl_vars['behavior']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
$_smarty_tpl->tpl_vars['behavior']->do_else = false;
?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorEdit" method="post">
                        <h3>id: <?php echo $_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'];?>
 name: <?php echo $_smarty_tpl->tpl_vars['behavior']->value['Behavior types'];?>
</h3>  
                        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'];?>
" hidden="true" />
                                            </form>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
