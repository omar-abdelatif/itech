<section class="page_copyright ds darkblue_bg_color">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <p class="grey">
                    &copy; Copyrights
                    <span id="year"></span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- template init -->
<script>
    let year = document.getElementById("year");
    year.innerHTML = new Date().getFullYear();
</script>
<script src="<?= URL . "views/admin-dashboard/assets/js/vendor/modernizr-2.6.2.min.js" ?>"></script>
<script src="<?= URL . "views/admin-dashboard/assets/js/compressed.js" ?>"></script>
<script src="<?= URL . "views/admin-dashboard/assets/js/main.js" ?>"></script>
</body>

</html>