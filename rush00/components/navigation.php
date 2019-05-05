<div class="container navigation header">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($CURRENT_PAGE == "Catalog") {?>active<?php }?>" href="catalog.php">Catalog</a>
      </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Basket") {?>active<?php }?>" href="basket.php">Basket</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Log in") {?>active<?php }?>" href="login_page.php">log in</a>
        </li>
        <li class="dropdown">
            <a class="nav-link <?php if ($_SESSION["login"] != "admin") {?>invisible<?php }?>" href="add_new_product.php">Admin</a>
            <div class="dropdown_content">
                <a class="adm" href="add_new_product.php">Product editor</a>
                <a class="adm" href="users_administration.php">Accounts administration</a>
                <a class="adm" href="order_list.php">Order administration</a>
            </div>
        </li>
	</ul>
</div>