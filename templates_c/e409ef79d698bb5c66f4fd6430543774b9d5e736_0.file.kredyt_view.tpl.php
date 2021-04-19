<?php
/* Smarty version 3.1.39, created on 2021-04-19 10:20:43
  from 'D:\XAMPP\htdocs\kalkulatorkekw\app\views\kredyt_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d3d5b8a88a5_47331824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e409ef79d698bb5c66f4fd6430543774b9d5e736' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\kalkulatorkekw\\app\\views\\kredyt_view.tpl',
      1 => 1618819407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d3d5b8a88a5_47331824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931484384607d3d5b82ced1_48933861', 'stopka');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1139965689607d3d5b82dca8_68636066', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/main.tpl");
}
/* {block 'stopka'} */
class Block_931484384607d3d5b82ced1_48933861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stopka' => 
  array (
    0 => 'Block_931484384607d3d5b82ced1_48933861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="copyright"> kekw</p><?php
}
}
/* {/block 'stopka'} */
/* {block "content"} */
class Block_1139965689607d3d5b82dca8_68636066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1139965689607d3d5b82dca8_68636066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    	<div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  >wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

            <form <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post" >
    <fieldset>
        <label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="amount" value="" /><br />
	<label for="id_y">Liczba miesięcy: </label>
	<input id="id_y" type="text" name="months" value="" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="interest" value="" /><br />
    </fieldset>
    <input type="submit" value="Oblicz"  />
</form>
        </div>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>

<h4>Wystąpiły następujące błedy:</h4>
<ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>

<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
	<h4>Twoja rata będzie wynosić:</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

	</p>
<?php }
}
}
/* {/block "content"} */
}
