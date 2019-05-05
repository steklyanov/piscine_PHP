<title><?php print $PAGE_TITLE;?></title>

<?php //if ($CURRENT_PAGE == "Index") { ?>
<!--	<meta name="description" content="" />-->
<!--	<meta name="keywords" content="" /> -->
<?php //} ?>


<style>
    body:
    {
        /*display: flex;*/
        /*flex-direction: column;*/
        /*align-content: flex-start;*/
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
    .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;

        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;

        -webkit-flex-flow: row wrap;
        justify-content: space-around;
    }

    * {box-sizing: border-box;}
    .product-item {
        width: 300px;
        text-align: center;
        margin: 0 auto;
        border-bottom: 2px solid #F5F5F5;
        background: white;
        font-family: "Open Sans";
        transition: .3s ease-in;
        position: relative;
    }

    /*.product-list {*/
    /*    background: #fafafa;*/
    /*    padding: 15px 0;*/
    /*}*/
    .product-list h3 {
        font-size: 18px;
        font-weight: 400;
        color: #444444;
        margin: 0 0 10px 0;
        position: absolute;
        bottom: 0px;

    }
    .price {
        font-size: 16px;
        color: #fc5a5a;
        display: block;
        margin-bottom: 12px;
    }
    .button {
        text-decoration: none;
        display: inline-block;
        padding: 0 12px;
        background: #cccccc;
        color: white;
        text-transform: uppercase;
        font-size: 12px;
        line-height: 28px;
        transition: .3s ease-in;
    }
    .product-item:hover .button {background: #fc5a5a;}

    .img
    {
        object-fit: contain;
        max-width: 100%;
        height: 50%;
    }

    .flex-container {
        padding: 0;
        margin: 0;
        list-style: none;

        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;

        -webkit-flex-flow: row wrap;
        justify-content: space-around;
    }
</style>