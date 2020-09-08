            </main>
            <footer>
                <div class="rodape wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">
                    <p>©<?php echo date('Y'); ?> by Falkohv</p>
                    <p>Todos os direitos reservados.</p>
                </div>
            </footer>
        </div>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.js"></script>
        <script>
            $(function(){
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