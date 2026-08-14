<div id="dashboard-ajax">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel" style="padding:30px; text-align:center;">
                <i class="fa fa-refresh fa-spin" style="font-size:24px;"></i>
                <p style="margin-top:10px;">Loading dashboard transmisi...</p>
            </div>
        </div>
    </div>
</div>

<?php include "dashboard_ajax_script.php"; ?>
<script>
(function () {
    loadDashboardAjax('ajax_dashboard_transmisi.php' + window.location.search);
})();
</script>
