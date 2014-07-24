 <div id="footer">
      <div class="container-fluid">
        <p class="text-muted">&copy 2014 Kathryn Kipling </p>
      </div>
    </div>

    </div>
       <script>
            // Javascript to enable link to tab
            var hash = document.location.hash;
            var prefix = "tab_";
            if (hash) {
                $('.nav-tabs a[href=' + hash.replace(prefix, "") + ']').tab('show');
            }

            // Change hash for page-reload
            $('.nav-tabs a').on('shown', function(e) {
                window.location.hash = e.target.hash.replace("#", "#" + prefix);
            });
        </script>
       
        <?php wp_footer(); ?>
    </body>
</html>