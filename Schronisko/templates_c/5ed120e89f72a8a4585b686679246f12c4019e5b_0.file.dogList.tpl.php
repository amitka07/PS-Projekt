<?php
/* Smarty version 4.3.4, created on 2024-06-02 21:26:15
  from 'C:\xampp\htdocs\Schronisko\app\views\templates\dogList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665cc7576a21f5_70689476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed120e89f72a8a4585b686679246f12c4019e5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\templates\\dogList.tpl',
      1 => 1717356372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665cc7576a21f5_70689476 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['dogs']->value))) {?>
    <div class='konik5'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dogs']->value, 'dog');
$_smarty_tpl->tpl_vars['dog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dog']->value) {
$_smarty_tpl->tpl_vars['dog']->do_else = false;
?>
            <div class='konik4'>
                <img class="image1" height="300px" width="600px" src="<?php echo $_smarty_tpl->tpl_vars['dog']->value['img'];?>
" />
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogEdit" method="post">
                    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin") || ($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
                        <h2>ID: <?php echo $_smarty_tpl->tpl_vars['dog']->value['idDog'];?>
</h2>  
                    <?php }?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['dog']->value['Name'];?>
</h2> 
                    <h4>Lat: <?php echo $_smarty_tpl->tpl_vars['dog']->value['Age'];?>
</h4> 
                    <h4>Rodzaj Włosów: <?php echo $_smarty_tpl->tpl_vars['dog']->value['Hair_Type'];?>
</h4>
                    <h4>Rasa: <?php echo $_smarty_tpl->tpl_vars['dog']->value['Breed'];?>
</h4>
                    <h3>Zachowania:
                        <?php if ((isset($_smarty_tpl->tpl_vars['behaviors']->value))) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['behaviors']->value, 'behavior');
$_smarty_tpl->tpl_vars['behavior']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['behavior']->value) {
$_smarty_tpl->tpl_vars['behavior']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['myBehaviors']->value))) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myBehaviors']->value, 'myBehavior');
$_smarty_tpl->tpl_vars['myBehavior']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['myBehavior']->value) {
$_smarty_tpl->tpl_vars['myBehavior']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['dog']->value['idDog'] === $_smarty_tpl->tpl_vars['myBehavior']->value['Dog_idDog']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['behavior']->value['BehaviorID'] === $_smarty_tpl->tpl_vars['myBehavior']->value['Behavioral_BehaviorID']) {?>
                                                <li><?php echo $_smarty_tpl->tpl_vars['behavior']->value['Behavior types'];?>
</li>
                                            <?php }?>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </h3>
                    <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['dog']->value['idDog'];?>
" hidden="true" />
                    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin") || ($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
                        <input class="button1" type="submit" value="Podgląd" />
                    <?php }?>
                </form>
                <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin") || ($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
                    <button class="button1" onclick="abortion(<?php echo $_smarty_tpl->tpl_vars['dog']->value['idDog'];?>
)">Adopcja bądź zgon</button>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
            </div>
<?php }?>

<div class="paggination">
    <?php echo $_smarty_tpl->tpl_vars['counter']->value;?>

    <?php
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['key']->step = 1;$_smarty_tpl->tpl_vars['key']->total = (int) ceil(($_smarty_tpl->tpl_vars['key']->step > 0 ? $_smarty_tpl->tpl_vars['counter']->value/2+1 - (1) : 1-($_smarty_tpl->tpl_vars['counter']->value/2)+1)/abs($_smarty_tpl->tpl_vars['key']->step));
if ($_smarty_tpl->tpl_vars['key']->total > 0) {
for ($_smarty_tpl->tpl_vars['key']->value = 1, $_smarty_tpl->tpl_vars['key']->iteration = 1;$_smarty_tpl->tpl_vars['key']->iteration <= $_smarty_tpl->tpl_vars['key']->total;$_smarty_tpl->tpl_vars['key']->value += $_smarty_tpl->tpl_vars['key']->step, $_smarty_tpl->tpl_vars['key']->iteration++) {
$_smarty_tpl->tpl_vars['key']->first = $_smarty_tpl->tpl_vars['key']->iteration === 1;$_smarty_tpl->tpl_vars['key']->last = $_smarty_tpl->tpl_vars['key']->iteration === $_smarty_tpl->tpl_vars['key']->total;?>
        <button class='button1' onclick="sendAjaxRequest(<?php echo $_smarty_tpl->tpl_vars['key']->value-1;?>
)"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</button>
    <?php }
}
?>  
</div>
<?php }
}
