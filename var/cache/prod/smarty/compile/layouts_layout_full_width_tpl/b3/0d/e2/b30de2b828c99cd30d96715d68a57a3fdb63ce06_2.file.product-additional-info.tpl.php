<?php
/* Smarty version 3.1.33, created on 2020-06-08 16:17:50
  from '/home/vagrant/Projekty/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede488ea00631_50415985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b30de2b828c99cd30d96715d68a57a3fdb63ce06' => 
    array (
      0 => '/home/vagrant/Projekty/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1591376813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede488ea00631_50415985 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
