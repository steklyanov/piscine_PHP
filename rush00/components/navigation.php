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
	</ul>
</div>