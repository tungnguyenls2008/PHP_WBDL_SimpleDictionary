
<html lang="">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="../sass/disCal.css" />
</head>
<style>
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1{
        color: navy;
    }

    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input{
        float: left;
        margin-bottom: .5em;
    }
    br{
        clear: left;
    }

</style>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo $_POST['description'];
        }
        ?></span><br/>
    <label>Price: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.$_POST['price'];
        }
        ?></span><br/>
    <label>Discount Percent: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo $_POST['discount_percent'];
        }
        ?>%</span><br/>
    <label>Discount Amount: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.($_POST['price']*($_POST['discount_percent']*10/100)*0.1);
        }
        ?></span><br/>
    <label>Discount Price: </label>
    <span><?php
        if (isset($_POST["submit"])){
            echo '$'.($_POST['price']-(($_POST['price']*$_POST['discount_percent']*10/100)*0.1));
        }
        ?></span><br/>
</div>
</body>
</html>
