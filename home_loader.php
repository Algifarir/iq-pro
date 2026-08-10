<div id="dashboard-home">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel" style="padding:30px; text-align:center;">
                <i class="fa fa-refresh fa-spin" style="font-size:24px;"></i>
                <p style="margin-top:10px;">Loading dashboard...</p>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var target = document.getElementById('dashboard-home');
    var xhr = new XMLHttpRequest();
    var url = 'ajax_home_dashboard.php' + window.location.search;

    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState !== 4) {
            return;
        }

        if (xhr.status !== 200) {
            target.innerHTML = '<div class="alert alert-danger">Dashboard gagal dimuat. Silakan refresh halaman.</div>';
            return;
        }

        target.innerHTML = xhr.responseText;

        var scripts = target.getElementsByTagName('script');
        for (var i = 0; i < scripts.length; i++) {
            if (scripts[i].src) {
                continue;
            }
            var script = document.createElement('script');
            script.text = scripts[i].text || scripts[i].textContent || scripts[i].innerHTML || '';
            document.body.appendChild(script);
        }
    };
    xhr.send(null);
})();
</script>
