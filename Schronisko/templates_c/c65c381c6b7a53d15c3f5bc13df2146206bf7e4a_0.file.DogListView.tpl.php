<?php
/* Smarty version 4.3.4, created on 2024-06-02 19:43:23
  from 'C:\xampp\htdocs\Schronisko\app\views\DogListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665caf3b1b4482_98973215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c65c381c6b7a53d15c3f5bc13df2146206bf7e4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Schronisko\\app\\views\\DogListView.tpl',
      1 => 1716712960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dogList.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665caf3b1b4482_98973215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1871136733665caf3b1ac572_90525856', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1871136733665caf3b1ac572_90525856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1871136733665caf3b1ac572_90525856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
        function sendAjaxRequest(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // handle success response
                        document.getElementById('result').innerHTML = xhr.responseText;
                    } else {
                        // handle error response
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
            xhr.open('POST', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
DogShowLike', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            var data = 'searchbar=' + document.getElementById('searchbar').value + '&page=' + page; // add your data here
            xhr.send(data);
        }
    <?php echo '</script'; ?>
>
    <div class = 'konik5'>
        <h1 class = 'header1'>Lista Naszych Psiaków</h1>
        <div>
            <input class = "konik7" id="searchbar" placeholder="Czego szukasz? :)" />
            <button class = "button1"  onclick="sendAjaxRequest(0)">Szukaj</button>
        </div>
        <div id="result">
            <?php $_smarty_tpl->_subTemplateRender('file:dogList.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
