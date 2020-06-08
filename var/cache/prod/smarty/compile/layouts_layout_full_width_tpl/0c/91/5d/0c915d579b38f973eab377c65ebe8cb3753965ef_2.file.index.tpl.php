<?php
/* Smarty version 3.1.33, created on 2020-06-08 16:15:02
  from '/home/vagrant/Projekty/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede47e6e1c430_28577139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c915d579b38f973eab377c65ebe8cb3753965ef' => 
    array (
      0 => '/home/vagrant/Projekty/prestashop/themes/classic/templates/index.tpl',
      1 => 1591376812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede47e6e1c430_28577139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_674169645ede47e6e0ffe6_15557973', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2377400715ede47e6e122e9_75922396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9477613425ede47e6e16560_76556359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_14145331755ede47e6e14bd4_36735784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9477613425ede47e6e16560_76556359', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_674169645ede47e6e0ffe6_15557973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_674169645ede47e6e0ffe6_15557973',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2377400715ede47e6e122e9_75922396',
  ),
  'page_content' => 
  array (
    0 => 'Block_14145331755ede47e6e14bd4_36735784',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9477613425ede47e6e16560_76556359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2377400715ede47e6e122e9_75922396', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14145331755ede47e6e14bd4_36735784', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
