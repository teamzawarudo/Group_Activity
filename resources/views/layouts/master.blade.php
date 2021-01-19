<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <!-- Header -->
            <header id="header">
                <div class="inner">
                    <a href="index.html" class="logo">introspect</a>
                    <nav id="nav">
                        <a href='index'>Home</a>
                        <a href='generic'>Generic</a>
                        <a href='elements'>Elements</a>
                    </nav>
                </div>
            </header>
            <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        
            <section>
                <!-- index -->
                @yield('index')
                <!-- generic -->
                @yield('generic')
                <!-- elements -->
                @yield('elements')
            </section>

            




           

        <!-- Footer -->
            <section id="footer">
                <div class="inner">
                    <header>
                        <h2>Get in Touch</h2>
                    </header>
                    <form method="post" action="#">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="alt" /></li>
                        </ul>
                    </form>
                    <div class="copyright">
                        &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
                    </div>
                </div>
            </section>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>



    </body>
</html>