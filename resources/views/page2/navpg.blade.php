<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container justify-content-between">
        <div id="myTopnav" >
            <img id="logimg" src="{{ asset('images/logo2.png') }}">
            <img id="logtitre" src="{{ asset('images/logtitre.png') }}">
        </div>

          <button class="navbar-toggler ml-auto" type="button" id="toggleButton" aria-label="Toggle navigation"
                onclick="toggleNavbarBackground()">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active d-flex align-items-center li1" id="tun-time">
                    <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" class="mr-1" id='crcltuns'>
                    <span class="nav-link" href="#" id="tunis-time"></span>
                </li>
                <li class="nav-item active d-flex align-items-center txtnav">
                    <a class="nav-link" href="#" id="tun-time">튀니지에 대해서</a>
                </li>
                <li class="nav-item active d-flex align-items-center  txtnav">
                    <a class="nav-link" href="#" id="tun-time">보다 더 ></a>
                </li>
                <li class=" nav-item d-flex" id="tun-time">
                    <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>
                    <div class="position-relative" style="display: flex; align-items: center;">
                        <input type="text" class="input-search" style="border-radius: 8px; flex: 1;">
                        <div style="position: absolute; right: 10px;"> <!-- Ajustez la valeur de droite selon vos besoins -->
                            <i class="icon-search">
                                <img src="{{ asset('images/OIP.jpg') }}" style="width: 20px;">
                            </i>
                        </div>
                    </div>


                </li>
            </ul>

        </div>
    </div>
</nav>
<script>
    const toggleButton = document.getElementById('toggleButton');
    const navbarNav = document.getElementById('navbarNav');

    toggleButton.addEventListener('click', function() {
        navbarNav.classList.toggle('show');
    });
</script>
<script>
    $(document).ready(function() {
        $("#toggleButton").click(function() {
            $(".custom-navbar").toggleClass("toggled");
        });
    });
</script>
<script>
    function toggleNavbarBackground() {
        var body = document.querySelector('body');
        body.classList.toggle('navbar-toggled');
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
