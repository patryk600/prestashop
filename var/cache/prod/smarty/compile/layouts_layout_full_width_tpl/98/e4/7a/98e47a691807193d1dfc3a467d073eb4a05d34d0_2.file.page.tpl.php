<?php
/* Smarty version 3.1.33, created on 2020-06-08 16:15:02
  from '/home/vagrant/Projekty/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ede47e6f12016_01799424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98e47a691807193d1dfc3a467d073eb4a05d34d0' => 
    array (
      0 => '/home/vagrant/Projekty/prestashop/themes/classic/templates/page.tpl',
      1 => 1591376812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede47e6f12016_01799424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13643083375ede47e6ee3465_43910925', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_8266859275ede47e6ee7953_33909671 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14404946485ede47e6ee4ec7_66347319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8266859275ede47e6ee7953_33909671', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_12600533385ede47e6f05dd7_46747615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12448249645ede47e6f087a9_21231482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13394030585ede47e6f03f48_85934237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12600533385ede47e6f05dd7_46747615', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12448249645ede47e6f087a9_21231482', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_21415782905ede47e6f0dfc0_61066824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13410593495ede47e6f0c603_90198383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21415782905ede47e6f0dfc0_61066824', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13643083375ede47e6ee3465_43910925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13643083375ede47e6ee3465_43910925',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14404946485ede47e6ee4ec7_66347319',
  ),
  'page_title' => 
  array (
    0 => 'Block_8266859275ede47e6ee7953_33909671',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13394030585ede47e6f03f48_85934237',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_12600533385ede47e6f05dd7_46747615',
  ),
  'page_content' => 
  array (
    0 => 'Block_12448249645ede47e6f087a9_21231482',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13410593495ede47e6f0c603_90198383',
  ),
  'page_footer' => 
  array (
    0 => 'Block_21415782905ede47e6f0dfc0_61066824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14404946485ede47e6ee4ec7_66347319', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13394030585ede47e6f03f48_85934237', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13410593495ede47e6f0c603_90198383', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
