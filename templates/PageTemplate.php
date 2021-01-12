<!DOCTYPE html>
<html lang="es" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include("js/basicJs.php");
    include("css/basicCss.php");
    ?>
  </head>
  <body>
    <?php
    include("templates/sidenavSide.php");
    ?>

    <div class="shifted-content-2 h-100 p-ab">
        <div class="appbar pos-absolute bg-red z-1" data-role="appbar">
            <button class="app-bar-item c-pointer" id="sidebar-toggle-4">
                <span class="mif-menu fg-white"></span>
            </button>
        </div>

        <div class="h-100 p-4">
            <p class="h1">What is Lorem Ipsum?</p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
            </p>
        </div>
    </div>


  </body>
</html>
