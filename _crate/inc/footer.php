<?php if (!isset($_GET['ajax']) || $_GET['ajax'] != "true") { ?>
        </div>
    </div><!-- /.page-container -->

    <a class="hallmark" href="http://clearleft.com/" title="Crafted by Clearleft in Brighton">Crafted by Clearleft in Brighton</a>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script>
    (function() {
        if(history && history.pushState) {
            var $page = $(".page");
            var current = document.location.pathname;

            $(".rail a").live("click", function(e) {
                var href = this.getAttribute("href")
                history.pushState({"url":href}, "", href)
                showPage(href);
                e.preventDefault();
            })

            function showPage(href) {
                if (href != current) {
                    $('.project-nav li').removeClass('selected');
                    $('a[href="' + href + '"]').parents("li").addClass("selected");
                    $page.animate({"opacity":0}, 100, "linear", function() {
                        var url = href + "?ajax=true";
                        $page.load(url, function() {
                            $page.animate({"opacity":1}, 100, "linear");
                        });
                    });
                    current = href;
                }
            }

            window.onpopstate = function(e) {
                showPage(e.state.url);
            }
        }
    })();
    </script>
</body>
</html>
<?php } ?>