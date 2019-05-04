<title><?php print $PAGE_TITLE;?></title>

<?php //if ($CURRENT_PAGE == "Index") { ?>
<!--	<meta name="description" content="" />-->
<!--	<meta name="keywords" content="" /> -->
<?php //} ?>


<style>
    body:
    {
        display: flex;
        flex-direction: column;
    }

    /*NAVIGATION */
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* Change the link color to #111 (black) on hover */
    li a:hover {
        background-color: #111;
    }


</style>