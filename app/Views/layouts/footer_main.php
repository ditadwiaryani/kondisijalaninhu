<script src="<?=base_url()?>/public/assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>/public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>/public/assets/js/metismenu.min.js"></script>
        <script src="<?=base_url()?>/public/assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url()?>/public/assets/js/waves.min.js"></script>
  
        <script src="<?=base_url()?>/public/typed.min.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>/public/assets/js/app.js"></script>
        <script>
            var options = {
                strings: [
                    'Geographical Information Systems', 
                    'Information system of road conditions in indragiri hulu regency',
                    'Sistem informasi kondisi jalan di Kabupaten Indragiri Hulu'
                ],
                typeSpeed: 200,
                loop: "infinite"
            };

            var typed = new Typed('#typing', options);
            function toggleDetail(){
                $("#detail").toggleClass("show")
            }
        </script>
    </body>

</html>