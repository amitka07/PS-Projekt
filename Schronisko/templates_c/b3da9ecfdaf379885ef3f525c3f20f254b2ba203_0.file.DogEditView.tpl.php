<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:35
  from 'C:\xampp\htdocs\Schronisko\app\views\DogEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf47c0ef07_61746263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3da9ecfdaf379885ef3f525c3f20f254b2ba203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\DogEditView.tpl',
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
function content_665caf47c0ef07_61746263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194724858665caf47bedaa4_53099822', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_194724858665caf47bedaa4_53099822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194724858665caf47bedaa4_53099822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
        <h1>Dog</h1>

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogID;?>
" hidden="true" />
            <label for="name">Imię</label>
            <input name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogName;?>
" />
            <label for="age">Wiek</label>
            <input type="number" max="20" min="0" name="age" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogAge;?>
" />
            <label for="breed">Rasa</label>
            <input name="breed" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogBreed;?>
">
            <label for="color">Rodzaj sierści</label>
            <select name="hair_type">
                <option value="Włosy" <?php if ($_smarty_tpl->tpl_vars['form']->value->dogHairType == "Włosy") {?> selected="true" <?php }?>>Włosy</option>
                <option value="Śierść" <?php if ($_smarty_tpl->tpl_vars['form']->value->dogHairType == "Śierść") {?> selected="true" <?php }?>>Śierść</option>
            </select>
            <fieldset>
            <label for="color">Zachowania:</label>
                <?php if (($_smarty_tpl->tpl_vars['form']->value->dogID == '')) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value->behaviors, 'behavior');
$_smarty_tpl->tpl_vars['behavior']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
$_smarty_tpl->tpl_vars['behavior']->do_else = false;
?>
                         <label><input type="checkbox" name="behaviors[]" value="<?php echo $_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'];?>
" /><?php echo $_smarty_tpl->tpl_vars['behavior']->value['Behavior types'];?>
</label>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
$_smarty_tpl->tpl_vars['behavior']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
$_smarty_tpl->tpl_vars['behavior']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['behavior']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </fieldset>
            <label for="color">Zdjęcie - wklej link</label>
            <input name="img" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dogImage;?>
" />
            <input type="submit" value="Zapisz" />
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
