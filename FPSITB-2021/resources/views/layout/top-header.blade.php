<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><img src="{{asset('img/FPS-icon-small.png')}}" alt="Logo FPS"></a>
    <div class="col-md-4">
        <p class="navbar-topleft-text"><span style="font-size:1.52vw; font-weight: 700;">Festival Paduan Suara ke-26</span> <br /> Institut Teknologi Bandung 2021<br> 
        <a type="button" onclick="window.location.href = '{{url('/faq')}}';" class="btn faq-button"><b>FAQ</b></a> </p>
    </div>
    <div class="navbar-right-side">
        <p>
            <span class="reg-deadline" ><em>12 Februari 2021</em></span><br>
            <span class="number-deadline" id="countdown2"><b id="hari2">01</b> : <b id="jam2">01</b>  : <b id="menit2">01</b> : <b id="detik2">01</b><br>
            <span class="day-deadline"> &nbsp Hari &nbsp &nbsp &nbsp  Jam &nbsp &nbsp &nbsp Menit &nbsp&nbsp  Detik</span></span>
        </p>
    </div>
    <script>
        var deadline = new Date("Feb 12, 2021 23:59:59").getTime();
        var x = setInterval(function() {
            var now = new Date().getTime();
            var t = deadline - now;
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((t % (1000 * 60)) / 1000);
            document.getElementById("hari2").innerHTML = days;
            document.getElementById("jam2").innerHTML = hours;
            document.getElementById("menit2").innerHTML = minutes;
            document.getElementById("detik2").innerHTML = seconds;

            if (t < 0) {
                clearInterval(x);
                document.getElementById("countdown2").innerHTML = "Deadline Over";
            }
        }, 1000);
    </script>
    <img src="{{asset('img/logo-psm-itb.png')}}" id="logo-psm" alt="Logo PSM">
</nav>