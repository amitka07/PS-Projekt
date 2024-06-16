<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:21
  from 'C:\xampp\htdocs\Schronisko\app\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf39c3d8d5_89155409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adbf887396953e0b05a4831e1876c61a22a623fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\templates\\header.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665caf39c3d8d5_89155409 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" pure-menu-horizontal bottom-marpure-menugin konik3">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="button2 pure-menu-heading pure-menu-link">Strona główna</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit&id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="button2 pure-menu-heading pure-menu-link" >Mój profil</a>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "user")) {?>
            <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin") || ($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorShowAll" class="button2 pure-menu-heading pure-menu-link">behaviors</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
BehaviorNew" class="button2 pure-menu-heading pure-menu-link">new behavior</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogNew" class="button2 pure-menu-heading pure-menu-link">new dog</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showTpl" class="button2 pure-menu-heading pure-menu-link">Change Behavior</a>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin")) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowAll" class="button2 pure-menu-heading pure-menu-link">users</a>
    
    <?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button2 pure-menu-heading pure-menu-link">wyloguj</a>
    </div>
<?php }
}
