<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:36
  from 'C:\xampp\htdocs\Schronisko\app\views\PersonListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf48d32363_72891755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '143e64e6bbedd02defcf609b7fb5e6807948e6f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\PersonListView.tpl',
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
function content_665caf48d32363_72891755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012795981665caf48d20730_61477317', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2012795981665caf48d20730_61477317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2012795981665caf48d20730_61477317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div>
        <h1>Users List</h1>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowLike" method="post"
                class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <ul>
            <?php if ((isset($_smarty_tpl->tpl_vars['users']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
                    <div>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['result']->value['FirstName'];?>

                        </div>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['result']->value['Surname'];?>

                        </div>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['result']->value['Mail'];?>

                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" method="post"
                            class="pure-form pure-form-aligned bottom-margin">
                            <input name="id" value=<?php echo $_smarty_tpl->tpl_vars['result']->value['UserID'];?>
 hidden="true" />
                            <input type="submit" value="Edytuj">
                        </form>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete" method="post"
                            class="pure-form pure-form-aligned bottom-margin">
                            <input name="id" value=<?php echo $_smarty_tpl->tpl_vars['result']->value['UserID'];?>
 hidden="true" />
                            <input type="submit" value="Zbanuj">
                        </form>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </ul>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
