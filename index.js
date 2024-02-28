<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <style>
        .switch {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: #fff;
            --bg-color-alt: #666;
            --main-color: #323232;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            width: 50px;
            height: 20px;
        }

        .toggle {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            box-sizing: border-box;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-color);
            transition: 0.3s;
        }

        .slider:before {
            box-sizing: border-box;
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            border: 2px solid var(--main-color);
            border-radius: 5px;
            left: -2px;
            bottom: 2px;
            background-color: var(--bg-color);
            box-shadow: 0 3px 0 var(--main-color);
            transition: 0.3s;
        }

        .toggle:checked + .slider {
            background-color: var(--input-focus);
        }

        .toggle:checked + .slider:before {
            transform: translateX(30px);
        }

        /* Dark mode */
        .toggle:checked + .slider {
            background-color: #1a1a1a; /* Change background color to dark */
            border-color: #666; /* Change border color to dark */
            box-shadow: 4px 4px #666; /* Change box-shadow color to dark */
        }

        .toggle:checked + .slider:before {
            background-color: #666; /* Change toggle button color to dark */
            box-shadow: 0 3px 0 #666; /* Change toggle button shadow color to dark */
        }

        .toggle:checked + .slider + .card-side {
            color: #fff; /* Change text color to white in dark mode */
        }

        /* Additional styling for card-side */
        .card-side {
            position: absolute;
            top: 50%;
            left: 55px;
            transform: translateY(-50%);
            color: var(--font-color);
            transition: 0.3s;
        }
    </style>
</head>
<body>

<label class="switch">
    <input class="toggle" type="checkbox">
    <span class="slider"></span>
    <span class="card-side">Dark Mode</span>
</label>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleSwitch = document.querySelector('.toggle');

        function switchTheme(e) {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
            }    
        }

        toggleSwitch.addEventListener('change', switchTheme, false);
    });
</script>

</body>
</html>
