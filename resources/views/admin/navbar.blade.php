<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        :root{
            /* ===== Colors ===== */
            --body-color: #D3959B -webkit-linear-gradient(to right, #BFE6BA, #D3959B);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #BFE6BA, #D3959B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ;
            --sidebar-color: #FFF;
            --primary-color: #d3959b;
            --primary-color-light: #F6F5FF;
            --toggle-color: #DDD;
            --text-color: #707070;
            /* ====== Transition ====== */
            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.3s ease;
            --tran-05: all 0.3s ease;
        }
        body{
            min-height: 100vh;
            background-color: var(--body-color);
            transition: var(--tran-05);
        }
        ::selection{
            background-color: var(--primary-color);
            color: #fff;
        }
        body.dark{
            --body-color: #18191a;
            --sidebar-color: #242526;
            --primary-color: #3a3b3c;
            --primary-color-light: #3a3b3c;
            --toggle-color: #fff;
            --text-color: #ccc;
        }
        /* ===== Sidebar ===== */
        .sidebar{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px 14px;
            background: var(--sidebar-color);
            transition: var(--tran-05);
            z-index: 100;
        }
        .sidebar.close{
            width: 88px;
        }
        /* ===== Reusable code - Here ===== */
        .sidebar li{
            height: 50px;
            list-style: none;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .sidebar header .image,
        .sidebar .icon{
            min-width: 60px;
            border-radius: 6px;
        }
        .sidebar .icon{
            min-width: 60px;
            border-radius: 6px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        .sidebar .text,
        .sidebar .icon{
            color: var(--text-color);
            transition: var(--tran-03);
        }
        .sidebar .text{
            font-size: 17px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 1;
        }
        .sidebar.close .text{
            opacity: 0;
        }

        .sidebar header{
            position: relative;
        }
        .sidebar header .image-text{
            display: flex;
            align-items: center;
        }
        .sidebar header .logo-text{
            display: flex;
            flex-direction: column;
        }
        header .image-text .name {
            margin-top: 2px;
            font-size: 18px;
            font-weight: 600;
        }
        header .image-text .profession{
            font-size: 16px;
            margin-top: -2px;
            display: block;
        }
        .sidebar header .image{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .sidebar header .image img{
            width: 40px;
            border-radius: 6px;
        }
        .sidebar header .toggle{
            position: absolute;
            top: 50%;
            right: -25px;
            transform: translateY(-50%) rotate(180deg);
            height: 25px;
            width: 25px;
            background-color: var(--primary-color);
            color: var(--sidebar-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            cursor: pointer;
            transition: var(--tran-05);
        }
        body.dark .sidebar header .toggle{
            color: var(--text-color);
        }
        .sidebar.close .toggle{
            transform: translateY(-50%) rotate(0deg);
        }
        .sidebar .menu{
            margin-top: 40px;
        }
        .sidebar li.search-box{
            border-radius: 6px;
            background-color: var(--primary-color-light);
            cursor: pointer;
            transition: var(--tran-05);
        }
        .sidebar li.search-box input{
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            background-color: var(--primary-color-light);
            color: var(--text-color);
            border-radius: 6px;
            font-size: 17px;
            font-weight: 500;
            transition: var(--tran-05);
        }
        .sidebar li a{
            list-style: none;
            height: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            text-decoration: none;
            transition: var(--tran-03);
        }
        .sidebar li a:hover{
            background-color: var(--primary-color);
        }
        .sidebar li a:hover .icon,
        .sidebar li a:hover .text{
            color: var(--sidebar-color);
        }
        body.dark .sidebar li a:hover .icon,
        body.dark .sidebar li a:hover .text{
            color: var(--text-color);
        }
        .sidebar .menu-bar{
            height: calc(100% - 55px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: scroll;
        }
        .menu-bar::-webkit-scrollbar{
            display: none;
        }
        .sidebar .menu-bar .mode{
            border-radius: 6px;
            background-color: var(--primary-color-light);
            position: relative;
            transition: var(--tran-05);
        }
        .menu-bar .mode .sun-moon{
            height: 50px;
            width: 60px;
        }
        .mode .sun-moon i{
            position: absolute;
        }
        .mode .sun-moon i.sun{
            opacity: 0;
        }
        body.dark .mode .sun-moon i.sun{
            opacity: 1;
        }
        body.dark .mode .sun-moon i.moon{
            opacity: 0;
        }
        .menu-bar .bottom-content .toggle-switch{
            position: absolute;
            right: 0;
            height: 100%;
            min-width: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            cursor: pointer;
        }
        .toggle-switch .switch{
            position: relative;
            height: 22px;
            width: 40px;
            border-radius: 25px;
            background-color: var(--toggle-color);
            transition: var(--tran-05);
        }
        .switch::before{
            content: '';
            position: absolute;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            background-color: var(--sidebar-color);
            transition: var(--tran-04);
        }
        body.dark .switch::before{
            left: 20px;
        }
        .home{
            position: absolute;
            top: 0;
            top: 0;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background-color: var(--body-color);
            transition: var(--tran-05);
        }
        .home .text{
            font-size: 30px;
            font-weight: 500;
            color: var(--text-color);
            padding: 12px 60px;
        }
        .sidebar.close ~ .home{
            left: 78px;
            height: 100vh;
            width: calc(100% - 78px);
        }
        body.dark .home .text{
            color: var(--text-color);
        }

        /* calendar */

        html {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
            font-size: 62.5%;
        }
        html * {
            box-sizing: border-box;
        }

        body {
            display: grid;
            font-family: Helvetica, sans-serif;
            font-size: 1.6rem;
            min-height: 100vh;
            place-content: center;
        }

        .calendar {
            background-color: #FFF;
            border-radius: 0.8rem;
            box-shadow: 0 0.8rem 1.6rem rgba(35, 131, 157, 0.2);
            padding: 3.2rem;
            margin-right: 85rem;
            margin-left: 5rem;
        }
        .calendar__header {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            letter-spacing: 0.2rem;
            padding: 0 0.4rem 1.2rem;
            text-transform: uppercase;
        }
        .calendar__day-names {
            border-bottom: 0.1rem solid #828889;
            display: flex;
            gap: 1.2rem;
            margin-bottom: 0.8rem;
            padding: 0.8rem 0;
        }
        .calendar__day-name {
            aspect-ratio: 1;
            color: #828889;
            font-weight: normal;
            text-align: center;
            width: 2.4rem;
        }
        .calendar__day_numbers {
            display: flex;
            flex-direction: column;
        }
        .calendar__day-numbers-row {
            display: flex;
            gap: 1.2rem;
            padding: 0.6rem 0;
        }
        .calendar__day-numbers-row:first-child {
            justify-content: flex-end;
        }
        .calendar__day-number {
            align-content: center;
            justify-content: center;
            aspect-ratio: 1;
            color: #000;
            display: flex;
            line-height: 1.4;
            text-align: center;
            width: 2.4rem;
        }
        .calendar__day-number--current {
            background-color: #23839D;
            border-radius: 50%;
            box-shadow: 0 0 0 0.4rem #23839D;
            color: #FFF;
        }



    </style>
    <title>GoodGirls</title>

</head>
<body>
<nav class="sidebar close">
    <header>
        <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>
            <div class="text logo-text">
                <span class="name">GoodGirls</span>
                <span class="profession">Polling Matakuliah</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-home-alt icon' ></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('register') }}" >
                        <i class='bx bx-bar-chart-alt-2 icon' ></i>
                        <span class="text nav-text">Register</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('data-polling.index') }}">
                        <i class='bx bx-data icon' ></i>
                        <span class="text nav-text">Poling</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('view-course.index') }}">
                        <i class='bx bx-category icon' ></i>
                        <span class="text nav-text">View Course</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="#" onclick="logoutAndRedirect()">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
            <div class="navbar">
                <!-- Navbar content -->
            </div>



        </div>
    </div>
    @if(Auth::check() && Auth::user()->isAdmin)
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    @endif

</nav>
<section class="home">
    <div class="text">Dashboard</div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Calendar Widget</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
    </head>
    <body>
    <div class="calendar">
        <header class="calendar__header">
            <div class="calendar__month"></div>
            <div class="calendar__year"></div>
        </header>
        <div class="calendar__grid">
            <div class="calendar__day-names">
                <span class="calendar__day-name">S</span>
                <span class="calendar__day-name">M</span>
                <span class="calendar__day-name">T</span>
                <span class="calendar__day-name">W</span>
                <span class="calendar__day-name">T</span>
                <span class="calendar__day-name">F</span>
                <span class="calendar__day-name">S</span>
            </div>
            <div class="calendar__day-numbers"></div>
        </div>
    </div>
    <script>
        // month abbreviations
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // get current date values
        const currentDate = new Date();
        const currentYear = currentDate.getFullYear();
        const currentMonth = currentDate.getMonth();
        const currentDay = currentDate.getDate();

        // set month and year
        document.querySelector('.calendar__month').innerText = months[currentDate.getMonth()];
        document.querySelector('.calendar__year').innerText = currentYear;

        // create grid of days
        let daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        let week = document.createElement('div');
        week.classList.add('calendar__day-numbers-row');

        for (i = 1; i <= daysInMonth; i++) {
            let day = document.createElement('span');
            day.classList.add('calendar__day-number');
            day.innerText = i;
            (i == currentDay) && day.classList.add('calendar__day-number--current');
            week.append(day);

            if (new Date(currentYear, currentMonth, i).getDay() == 6 || i == daysInMonth) {
                document.querySelector('.calendar__day-numbers').append(week);

                if (i != daysInMonth) {
                    week = document.createElement('div');
                    week.classList.add('calendar__day-numbers-row');
                }
            }
        }
    </script>

    </body>
    </html>

</section>
<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
    })
    searchBtn.addEventListener("click" , () =>{
        sidebar.classList.remove("close");
    })
    modeSwitch.addEventListener("click" , () =>{
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
            modeText.innerText = "Light mode";
        }else{
            modeText.innerText = "Dark mode";

        }
    });
    document.getElementById('logout-form').addEventListener('submit', function(event) {
        event.preventDefault();
        this.submit();
    });
    function logoutAndRedirect() {
        document.getElementById('logout-form').submit();
        window.location.href = "/";
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
