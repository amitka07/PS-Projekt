<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:35
  from 'C:\xampp\htdocs\Schronisko\app\views\BehaviorEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf4754df61_31726558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69301a96b793011b18255347112f4c860107b117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\BehaviorEditView.tpl',
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
function content_665caf4754df61_31726558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1513963046665caf47543246_63286323', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1513963046665caf47543246_63286323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1513963046665caf47543246_63286323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <h1><?php if ($_smarty_tpl->tpl_vars['form']->value->behaviorID) {?>
                Behavior
            <?php } else { ?>
                New Behavior
            <?php }?>
        </h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="behaviorID" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->behaviorID;?>
" hidden="true" />
            <input name="behavior_type" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->behavior_type;?>
" />
            <input type="submit" value="Zapisz" />
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
