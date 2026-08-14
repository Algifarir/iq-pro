<script>
function loadDashboardAjax(url) {
    var target = document.getElementById('dashboard-ajax');
    var xhr = new XMLHttpRequest();

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
        runDashboardScripts(target.getElementsByTagName('script'), 0);
    };
    xhr.send(null);
}

function runDashboardScripts(scripts, index) {
    if (index >= scripts.length) {
        return;
    }

    var oldScript = scripts[index];
    var script = document.createElement('script');

    if (oldScript.src) {
        script.onload = function () {
            runDashboardScripts(scripts, index + 1);
        };
        script.onerror = function () {
            runDashboardScripts(scripts, index + 1);
        };
        script.src = oldScript.src;
    } else {
        script.text = oldScript.text || oldScript.textContent || oldScript.innerHTML || '';
        setTimeout(function () {
            runDashboardScripts(scripts, index + 1);
        }, 0);
    }

    document.body.appendChild(script);
}
</script>
