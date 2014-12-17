<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </head>
    <body>
        <nav id="fixNav">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Izwebz Store</a></li>
                <li><a href="#">Newbie</a></li>
                <li>
                    <a href="#">Video</a>
                    <ul class="sub-menu">
                        <li><a href="#">Html & CSS</a></li>
                        <li><a href="#">PHP & MySQL</a></li>
                        <li><a href="#">jQuery</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </body>
</html>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        //selector đến menu cần làm việc
        var TopFixMenu = $("#fixNav");
        // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
        $(window).scroll(function () {
            // Nếu cuộn được hơn 150px rồi
            if ($(this).scrollTop() > 150) {
                // Tiến hành show menu ra   
                TopFixMenu.show();
            } else {
                // Ngược lại, nhỏ hơn 150px thì hide menu đi.
                TopFixMenu.hide();
            }
        }
        )
    })
</script>

