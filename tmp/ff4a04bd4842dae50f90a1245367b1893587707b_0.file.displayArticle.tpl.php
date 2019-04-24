<?php
/* Smarty version 3.1.33, created on 2019-04-24 14:05:05
  from 'C:\xampp\htdocs\artomic\views\displayArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc050f1aace70_52838117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4a04bd4842dae50f90a1245367b1893587707b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\artomic\\views\\displayArticle.tpl',
      1 => 1556106995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc050f1aace70_52838117 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Article</title>
</head>
<body>
<!-- HEADER NAV-BAR -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-2">
    <div class="container">
      <img src="logo.png" alt="logo" class="navbar-brand" height="50">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3">
            <div class="nav-link">
              <i class="fas fa-user"></i> Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

            </div>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- SELECTED ARTICLE -->

<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['articleRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

<!-- ACTIONS -->

<div class="d-flex justify-content-center align-items-center mt-3">
    <a href="dashboard.php" class="btn btn-outline-primary mx-2"><i class="fas fa-arrow-left"></i>Back to Dashboard</a>
    <?php if ($_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'] == $_smarty_tpl->tpl_vars['user']->value) {?>
      <div id="update<?php echo $_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#addArticleModal" onclick="popupUpdate(<?php echo $_smarty_tpl->tpl_vars['articleID']->value;?>
)"><i class="fas fa-edit"></i>Update</div>
      <button class="btn btn-outline-danger mx-2" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['articleID']->value;?>
)"><i class="fas fa-trash-alt"></i>Delete</button>
    <?php }?>
</div>

<div id="message" class="w-50 mx-auto mt-5"></div>

<!-- ARTICLE HEADING -->
<div class="text-center pb-4">
    <h1 class="display-4">
      <?php echo $_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['heading'];?>

    </h1>
    <p class="lead">
        By <span><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
 </span> 
        on <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['articledate'];?>
</small>
    </p>
</div>

<!-- ARTICLE IMG & BODY-->
<section id="articles" class="mb-5">
    <div class="container">
      <div class="row" id="delete<?php echo $_smarty_tpl->tpl_vars['articleID']->value;?>
">
        <div class="col-md-5">
            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['articleimage'];?>
" alt="article image" class="img-large p-2">
        </div>
        <div class="col-md-7">
            <p> <?php echo $_smarty_tpl->tpl_vars['articleRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
 </p>
        </div>
      </div>
    </div>
</section>
<?php
}
}
?>


<!-- FOOTER -->

<footer class="bg-dark text-white pt-3">
    <div class="container">
      <div class="d-flex justify-content-center align-items-center">
          <p class="lead text-center">
            Copyright &copy; <span id="year"></span>
            Artomic
          </p>
      </div>
    </div>
  </footer>

<!-- MODAL POPUP UPDATE -->

<div class="modal fade popupUpdate" id="addArticleModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Update article</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="insertUpdates.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
              <label for="heading">Heading</label>
              <input type="text" name="heading" class="form-control heading" value="">
            </div>
              
            <div class="image-group">
              <label for="image">Change Image</label>
              <img id="edit-img" src=NULL alt="thumbnail"/>
              <input type="file" name="image" id="updateImage" value="">
              <small class="form-text text-muted">Max size 3mb</small>
            </div>

            <input type="hidden" name="update" id="update" value="">
            <div class="form-group">
              <label for="textbody">Body</label>
              <textarea name="textbody" class="form-control textbody" value=""></textarea>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" value="Save">
            </div>
          </form>
        </div>

      </div>
    </div>  
  </div>

  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="update_&_delete_requests.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $('#year').text(new Date().getFullYear());
  <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
