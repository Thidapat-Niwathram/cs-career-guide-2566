<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu | Side Navigation Bar</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
<nav>
    <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Dashboard</span>
    </div>

    <div class="sidebar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Dashboard</span>
        </div>

        <div class="sidebar-content">
            <ul class="lists">
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Home</span>
                    </a>
                </li>

                <li class="list">
                    <a href="#" class="nav-link" onclick="toggleSubmenu()">
                        <i class="bx bx-bar-chart-alt-2 icon"></i>
                        <span class="link">Information</span>
                    </a>
                    <ul class="submenuinfor" id="informationSubmenu">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-edit-alt icon'></i>
                                <span class="link">Information</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-edit-alt icon'></i>
                                <span class="link">Grade</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-bell icon"></i>
                        <span class="link">Career</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#" class="nav-link" onclick="toggleSubskill()">
                        <i class="bx bx-message-rounded icon"></i>
                        <span class="link">Skill</span>
                    </a>
                    <ul class="submenuskill" id="informationSubskill">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-edit-alt icon'></i>
                                <span class="link">Soft skills</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-edit-alt icon'></i>
                                <span class="link">Hard skills</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class='bx bx-edit-alt icon'></i>
                                <span class="link">Tech skills</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>

            <div class="bottom-cotent">
                <!-- <li class="list">
                  <a href="#" class="nav-link">
                    <i class="bx bx-cog icon"></i>
                    <span class="link">Settings</span>
                  </a>
                </li> -->
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-log-out icon"></i>
                        <span class="link">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </div>
</nav>

<section class="overlay"></section>

<script>
    const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

    menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
            navBar.classList.toggle("open");
        });
    });

    overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
    });
    function toggleSubmenu() {
        var submenu = document.getElementById("informationSubmenu");
        if (submenu.style.display === "none") {
            submenu.style.display = "block";
        } else {
            submenu.style.display = "none";
        }
    }
    function toggleSubskill() {
        var submenu = document.getElementById("informationSubskill");
        if (submenu.style.display === "none") {
            submenu.style.display = "block";
        } else {
            submenu.style.display = "none";
        }
    }
</script>
</body>

</html>
