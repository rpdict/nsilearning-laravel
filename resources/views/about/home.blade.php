<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>科技背景</title>
        <meta name="description" content="Change OR Die">
        <link rel="stylesheet" href="{{ asset("css/main.css") }}">
        <link rel="stylesheet" href="{{ asset("css/homePage.css") }}">
        <script src="{{ asset("js/vendor.js") }}"></script>
        <script src="{{ asset("js/jquery.particleground.min.js") }}"></script>
    </head>

    <body>
        <style>
            canvas {
                padding:0;
                margin:0;
                position: absolute;
                z-index: -1;
                top: 0px;
                left:0px;
            }
        </style>
        <style type="text/css">
            *{margin:0;padding:0;list-style-type:none;}
            a,img{border:0;}
            body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
        </style>

        <div id="wrapper">
            <!-- Main -->
            <section id="main">
                <header>
                    <span class="avatar"><img src="images/geek-inside.png" height="122px" width="122px"></span>
                    <h1>RPDICT</h1>
                    <p>生命不息   折腾不止</p>
                </header>

                <footer>
                    <ul class="icons">
                        <li><a href="/" class="fa-home">Blog</a></li>
                        <li><a href="https://github.com/rpdict" class="fa-github">Instagram</a></li>
                        <li><a href="mailto: rpdict@gmail.com" class="fa-envelope-o">Facebook</a></li>
                    </ul>
                </footer>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <ul class="copyright">
                    <li>© <a href="https://github.com/rpdict">rpdict</a></li><li>Blog since rpdict </li>
                </ul>
            </footer>
        </div>
        <script>
            $('#wrapper').particleground({
                dotColor: '#0e83c7',
                lineColor: '#0e83c7'
            });
        </script>
    </body>
</html>
