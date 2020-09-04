            </main>
            <footer>
                <div class="rodape wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <img src="images/logo.png" alt="logo">
                    <p>©2020 by Falkohv</p>
                </div>
            </footer>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/wow/dist/wow.js"></script>        
        <script>
            $(function(){
                //$('.menu-mobile').hide();
                $('.toggle').click(function(){
                    $('.layout').toggleClass('ativo');
                    $('.menu-mobile').toggleClass('ativo');
                    $(this).toggleClass('ativo');
                });
                new WOW().init();
            });
        </script>
    </body>
</html>