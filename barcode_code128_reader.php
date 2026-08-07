<style>
    #code128-reader {
        margin: 10px 0 16px;
        padding: 10px;
        background: #fff;
        border: 1px solid #ddd;
    }

    #code128-camera {
        margin: 6px 0;
    }

    #code128-video {
        display: none;
        width: 100%;
        max-width: 640px;
        max-height: 480px;
        margin-top: 8px;
        background: #000;
    }

    #code128-video-wrap {
        display: none;
        position: relative;
        width: 100%;
        max-width: 640px;
        margin-top: 8px;
    }

    #code128-video-wrap #code128-video {
        display: block;
        margin-top: 0;
    }

    #code128-guide {
        position: absolute;
        left: 6%;
        right: 6%;
        top: 38%;
        height: 24%;
        border: 3px solid #00ff66;
        box-shadow: 0 0 0 999px rgba(0, 0, 0, .35);
        pointer-events: none;
    }

    #code128-guide:before {
        content: "POSISIKAN BARCODE DI DALAM KOTAK";
        position: absolute;
        left: 0;
        right: 0;
        top: -28px;
        color: #00ff66;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
    }

    #code128-result {
        margin-top: 8px;
        font-weight: bold;
        color: #990000;
        word-break: break-all;
    }
</style>

<div id="code128-reader">
    <button type="button" class="btn btn-warning btn-sm" id="code128-start">Scan Barcode</button>
    <button type="button" class="btn btn-secondary btn-sm" id="code128-stop" style="display:none;">Stop</button>
    <select class="form-control form-control-sm" id="code128-camera"></select>
    <div id="code128-video-wrap">
        <video id="code128-video" muted playsinline></video>
        <div id="code128-guide"></div>
    </div>
    <div id="code128-result">Hasil scan: -</div>
</div>

<script src="https://unpkg.com/@zxing/library@latest"></script>
<script>
    (function() {
        var reader = null;
        var cameraSelect = document.getElementById('code128-camera');
        var video = document.getElementById('code128-video');
        var videoWrap = document.getElementById('code128-video-wrap');
        var resultBox = document.getElementById('code128-result');
        var startButton = document.getElementById('code128-start');
        var stopButton = document.getElementById('code128-stop');
        var redirected = false;

        function show(message) {
            resultBox.textContent = message;
        }

        function getReader() {
            if (!reader) {
                reader = new ZXing.BrowserMultiFormatReader();
            }
            return reader;
        }

        function stopScan() {
            if (reader) {
                reader.reset();
            }
            if (video.srcObject) {
                video.srcObject.getTracks().forEach(function(track) {
                    track.stop();
                });
                video.srcObject = null;
            }
            videoWrap.style.display = 'none';
            startButton.style.display = '';
            stopButton.style.display = 'none';
        }

        function openInspection(code) {
            show('Mencari data: ' + code);

            $.post('ajax_tm_pdi_scan.php', {
                code: code,
                page: location.pathname.split('/').pop()
            }, function(response) {
                if (response.ok) {
                    redirected = true;
                    window.location.href = response.url;
                    return;
                }
                show(response.message || 'Data PDI tidak ditemukan.');
            }, 'json').fail(function() {
                show('Gagal mencari data barcode.');
            });
        }

        function loadCameras() {
            if (!window.ZXing) {
                show('Library scanner belum kebaca. Cek koneksi internet lalu refresh.');
                return;
            }

            getReader().listVideoInputDevices().then(function(cameras) {
                cameraSelect.innerHTML = '';
                var autoOption = document.createElement('option');
                autoOption.value = '';
                autoOption.textContent = 'Auto kamera belakang';
                cameraSelect.appendChild(autoOption);
                cameras.forEach(function(camera, index) {
                    var option = document.createElement('option');
                    option.value = camera.deviceId;
                    option.textContent = camera.label || ('Camera ' + (index + 1));
                    cameraSelect.appendChild(option);
                });
            }).catch(function() {
                show('Kamera belum bisa diakses. Izinkan kamera lalu refresh.');
            });
        }

        function startScan() {
            if (!window.ZXing) {
                show('Library scanner belum kebaca. Cek koneksi internet lalu refresh.');
                return;
            }

            redirected = false;
            videoWrap.style.display = 'block';
            startButton.style.display = 'none';
            stopButton.style.display = '';
            show('Barcode harus horizontal dan memenuhi kotak hijau. Maju/mundur sampai garis tajam.');

            var constraints = {
                video: {
                    facingMode: 'environment',
                    width: {
                        ideal: 1280
                    },
                    height: {
                        ideal: 720
                    }
                }
            };

            if (cameraSelect.value) {
                constraints.video.deviceId = {
                    exact: cameraSelect.value
                };
            }

            if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
                show('Browser tidak support akses kamera.');
                stopScan();
                return;
            }

            navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
                stream.getTracks().forEach(function(track) {
                    track.stop();
                });

                getReader().decodeFromConstraints(constraints, video, function(result) {
                    if (!result || redirected) return;
                    var code = result.getText();
                    if (!code) return;

                    show('Hasil scan: ' + code);
                    stopScan();
                    openInspection(code);
                });
            }).catch(function(error) {
                stopScan();
                if (error && error.name === 'NotAllowedError') {
                    show('Izin kamera ditolak. Klik ikon gembok di address bar, lalu Allow Camera.');
                    return;
                }
                if (error && error.name === 'NotFoundError') {
                    show('Kamera tidak ditemukan di device ini.');
                    return;
                }
                if (error && error.name === 'NotReadableError') {
                    show('Kamera sedang dipakai aplikasi lain. Tutup aplikasi kamera/meeting lalu coba lagi.');
                    return;
                }
                show('Kamera tidak bisa dibuka: ' + (error && error.name ? error.name : 'unknown'));
            });
        }

        startButton.onclick = startScan;
        stopButton.onclick = stopScan;
        loadCameras();
    })();
</script>
