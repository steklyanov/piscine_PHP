<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/views/index.php":
			$CURRENT_PAGE = "Cool shop";
			$PAGE_TITLE = "Cool shop";
			break;
        case "/php-template/views/catalog.php":
            $CURRENT_PAGE = "Catalog";
            $PAGE_TITLE = "Catalog";
            break;
        case "/php-template/views/basket.php":
            $CURRENT_PAGE = "Basket";
            $PAGE_TITLE = "Basket";
            break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>