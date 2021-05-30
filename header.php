<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/ress.css" rel="stylesheet">
    <link href="./css/hamburger.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.0/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="c-colum">
        <header class="l-header p-header">
            <button class="p-header__nav-btn">Menu</button>
                <div class="l-header-top">
                    <h1 class="p-header-top__title">Hamburger</h1>
                    <form class="p-header-top__search">
                        <input type="search" name="search" for="search" class="font-awesome">
                        <i class="fas fa-search fa-2x"></i>
                        <input type="submit" name="submit" value="検索" id="search">
                    </form>                
                </div>
            <?php wp_head(  ); ?>
        </header>
