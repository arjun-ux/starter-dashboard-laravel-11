<nav class="navbar navbar-expand px-4 py-3">
    <form action="#" class="d-none d-sm-inline-flex">
        <h5>Selamat Datang, Admin</h5>
        <h5 id="clock" class="mx-4"><i></i></h5>
    </form>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <img class="avatar img-fluid"
                        src="{{ asset('img/account.png') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-end border-0"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="profile-panitia">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                    <a class="dropdown-item" href="profile-panitia">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout-panitia">
                        <i class="lni lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<script>
    function updateClock() {
        var now = new Date();
        var timeString = now.toLocaleTimeString();
        document.getElementById("clock").innerText = timeString;
    }
    // Panggil updateClock() setiap detik untuk memperbarui waktu
    setInterval(updateClock, 1000);
</script>
