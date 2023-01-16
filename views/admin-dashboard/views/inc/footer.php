<section class="page_copyright ds darkblue_bg_color">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <p class="grey">&copy; Copyrights <span id="year"></span></p>
            </div>
            <div class="col-sm-6 text-sm-right">
                <p class="grey">Last account activity <i class="fa fa-clock-o"></i> 52 mins ago</p>
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