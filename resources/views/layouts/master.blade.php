<!DOCTYPE html>
<html>
<head>
    <title>CFU.com</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" href="./reset.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">

<style type="text/css">

body{font-family:"Lato";}
.std_width{width:960px;text-align: left;margin:auto;}

@media (max-width: 960px) {
    .std_width{width:100%;}
}

.header{min-height:80px;}
.top_navigation{}
.top_navigation a{text-decoration: none;color:#888;}
.top_navigation a:hover{text-decoration: underline;color:#f90;}
.top_navigation ul li{list-style: none;float:left;margin:12px 20px;}
.top_navigation_right{float: right;}
.logo_div{
    text-align: center;
}
.logo_div img.logo{width:200px;}


.search_form_container{text-align: center;}
.get_help{font-size: 22px;margin:20px 0;}
.quick_search{font-size: 18px;margin:8px 0;}
.quick_search_optionlist div{
    display: inline-block;
    margin: 0 14px;
    text-align: left;
    width:150px;
}

.quick_search_optionlist ul li{list-style:disc;}

.search_button_span{display:inline-block;margin-top:0px;}

.search_form{min-height:60px;}
#search_form span{vertical-align: top;}
#search_form input[type=text]{padding:0 8px;height:32px;width:350px;}
#search_form input[type=submit].button, .linkbutton.button{
    font-size:20px;color:#fff;
    background-image: linear-gradient(to bottom,#616161,#2b2b2b);
    padding:6px 16px;border-radius: 8px;
    border:none;-webkit-appearance: none;
}
#search_form input[type=submit].button-blue, .linkbutton.button-blue{color:#fff;
    background-image: linear-gradient(to bottom,#39749e,#16374f);
}

div.link_buttons{text-align: center;}
div.link_buttons .linkbutton{margin:20px;}

div.footer{margin-top:30px;}
div.link_buttons{margin-top:6px;}

</style>

</head>
<body>
    <div class="header std_width top_navigation">
        @include('includes.header')
    </div>

    <div class="main std_width">
        @yield('content')
    </div>
</body>
    <div class="footer std_width">
        @include('includes.footer')
    </div>
</html>
