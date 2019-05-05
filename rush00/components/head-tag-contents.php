<title><?php print $PAGE_TITLE;?></title>

<?php //if ($CURRENT_PAGE == "Index") { ?>
<!--	<meta name="description" content="" />-->
<!--	<meta name="keywords" content="" /> -->
<?php //} ?>


<style>
    .invisible
    {
        display: none;
    }

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

    .confirm_field
    {
        padding: 10px; /* Поля вокруг текста */
        border-radius: 5px;
    }



    .create_mod fieldset input{
        width:50vw;
        height: 30px;
        text-align: center;

    }
    .create_mod fieldset input.description {
        width:50vw;
        height:40vh;
    }
    .create_mod fieldset input.upload {
        width:70px;
        height:40px;
    }
    .create_mod fieldset input.how_much {
        width:25vw;
        height:30px;
        float:left;
    }
    .create_mod fieldset input.id {
        width:50px;
        height:30px;
    }
    .admin
    {

    }
    .checkbox
    {

    }

    form{
        border: 1px solid #D3D3D3;
        background: none repeat scroll 0 0 #FFFFFF;
        /* закругляем углы */
        -webkit-border-radius:8px;
        -moz-border-radius:8px;
        border-radius:8px;
        /* добавляем тени для блока*/
        -webkit-box-shadow: 0 0 5px #CCCCCC, 1px 1px 0 #FFFFFF inset, -1px -1px 0 #FFFFFF inset, 0 0 15px #DDDDDD inset;
        -moz-box-shadow: 0 0 5px #CCCCCC, 1px 1px 0 #FFFFFF inset, -1px -1px 0 #FFFFFF inset, 0 0 15px #DDDDDD inset;
        box-shadow: 0 0 5px #CCCCCC, 1px 1px 0 #FFFFFF inset, -1px -1px 0 #FFFFFF inset, 0 0 15px #DDDDDD inset;
        margin: 0 auto;
        overflow: hidden;
        padding-top: 10px;
        text-align: left;
        /* устанавливаем необходимую ширину формы в зависимости от дизайна
         ** форма отлично растягивается */
        width: 100%;
        max-width: 600px;
    }
    form h2{
        /* оформляем заголовок формы
         ** цвет, размер и семейство шрифта */
        border-bottom: 1px dashed #CCCCCC;
        color: #3F647F;
        font: 24px Monotype Corsiva,Arial;
        margin: 10px 26px;
        padding: 0 5px 10px 0;
        /* добавляем тени к тексту */
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }
    form fieldset{
        /* формируем блоки элементов внутри формы */
        margin:0;
        padding:0;
        border:none;
        float:left;
        display:inline;
        margin-left:26px;
    }
    /* формируем подписи к полям ввода */
    form label{display:block;color:#5B5B5B;margin-bottom:1px;}
    form input, #form textarea{
        font:13px Trebuchet MS, Arial, Helvetica, Sans-Serif;
        color:#6B6B6B;
        /* отключаем бордюры у инпутов и текстового поля */
        border: none;
        /* закругляем углы полей ввода */
        -moz-border-radius:.3em;
        -webkit-border-radius:.3em;
        border-radius:.3em;
        background-color: #F7F7F7;
        padding:3px;
        /* добавляем внутренние тени у инпутов и текстового поля */
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.1), inset 0 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: inset 0 0 5px rgba(0,0,0,0.1), inset 0 1px 2px rgba(0,0,0,0.3);
        box-shadow: inset 0 0 5px rgba(0,0,0,0.1), inset 0 1px 2px rgba(0,0,0,0.3);
        color: #5B5B5B;
    }
    form input {
        /* устанавливаем ширину инпутов */
        width:224px;
    }
    /* изменяем оформление полей ввода при фокусе */
    form input:focus, #form textarea:focus {
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2), inset 0 1px 2px rgba(0,0,0,0.4);
        -moz-box-shadow: inset 0 0 5px rgba(0,0,0,0.2), inset 0 1px 2px rgba(0,0,0,0.4);
        box-shadow: inset 0 0 5px rgba(0,0,0,0.2), inset 0 1px 2px rgba(0,0,0,0.4);
        background: #F2F2F2;
        color: #333;
    }
    form textarea{
        /* устанавливаем ширину текстового поля */
        width:286px;
        height:120px;
        overflow:auto;
    }
    /* формируем нижний сектор формы */
    form .submit{
        clear:both;
        padding: 0px 25px 20px;
        margin:0;
        /*float:right;*/
    }
    /* оформляем кнопку отправки */
    form button{
        /* устанавливаем необходимую ширину кнопки */
        width:120px;
        line-height:28px;
        /* добавляем внешние тени */
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.4);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.4);
        box-shadow: 0 1px 2px rgba(0,0,0,0.4);
        border: solid 1px #2f96b4;
        /* закругляем углы кнопки */
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #49AFCD;
        /* градиентная заливка для современных браузеров */
        background-image:-moz-linear-gradient(center top , #5BC0DE, #2F96B4);
        background-image: -webkit-linear-gradient(center top, #5bc0de, #2f96b4);
        background-image: -ms-linear-gradient(#5bc0de, #2f96b4);
        background-image:-o-linear-gradient(center top , #5BC0DE, #2F96B4);
        color:#fff;
        cursor:pointer;
        text-align:center;
        /* градиент для IE6-9 */
        filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#5BC0DE', EndColorStr='#2F96B4', GradientType=0);
    }
    /* изменяем оформление кнопки при наведении */
    form button:hover {
        border-color: #2C8BA5;
        box-shadow: none;
    }
    /* изменяем оформление кнопки при нажатии */
    form button:active {
        background-image:-moz-linear-gradient(#2F96B4, #5BC0DE); /* Firefox */
        background-image: -webkit-linear-gradient(#2F96B4, #5BC0DE); /* Chrome, Safari */
        background-image: -ms-linear-gradient(#2F96B4, #5BC0DE); /* IE-10 */
        background-image:-o-linear-gradient(#2F96B4, #5BC0DE); /* Opera */
        border-bottom: 1px solid #5BC0DE;
        /* добавляем внутренние тени */
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3) inset;
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3) inset;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3) inset;
        /* градиент для IE6-9 */
        filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#2F96B4', EndColorStr='#5BC0DE', GradientType=0);
    }

</style>