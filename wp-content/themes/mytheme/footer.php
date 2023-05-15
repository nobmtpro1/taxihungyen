<footer class="footer">
    <h2><?= bloginfo('name') ?></h2>
    <p><b>Địa Chỉ : </b> <?= get_option('address', '') ?></p>
    <p><b>Liên hệ : </b><?= get_option('contact', '') ?></p>
    <p><b>Email : </b> <?= get_option('email', '') ?></p>
</footer>
</div>
</div>
<?php wp_footer() ?>
<script>
    var hamburger = document.querySelector('.hamburger')
    var sidebar = document.querySelector('.sidebar')
    var close = document.querySelector('.close')
    hamburger.addEventListener('click', function() {

        if (sidebar?.classList?.contains('active')) {
            sidebar?.classList?.remove('active')
        } else {
            sidebar?.classList?.add('active')
        }
    })

    close.addEventListener('click', function() {
        if (sidebar?.classList?.contains('active')) {
            sidebar?.classList?.remove('active')
        } else {
            sidebar?.classList?.add('active')
        }
    })
</script>
</body>

</html>