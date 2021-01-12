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

  <style media="screen">
  .custom-caption
  { font-size: 20px; font-weight: normal;}
  .caption
  { font-weight: bold;}
  </style>
</head>
<body data-role="touch"  data-on-swipe-right="abrir">
  <?php
  include("templates/sidenavSide.php");
  ?>
  <script type="text/javascript">
  function abrir(){
    console.log(  $("#sb4"));
  }
  </script>

  <div class="shifted-content-2 h-100 p-ab pos-absolute"  id="app">
    <div class="appbar pos-absolute bg-red z-1" data-role="appbar">
      <button class="app-bar-item c-pointer" id="sidebar-toggle-4">
        <span class="mif-menu fg-white"></span>
      </button>
    </div>
    <label>Barras de Conocimiento <input type="checkbox" name="inp_barrasConocimiento" v-model="enableProgress"> </label>
    <hr>
    <ul data-role="listview" data-view="icons-medium" data-selectable="false">
      <li data-caption="Tecnologías utilizadas">
        <ul class="pl-10">
          <li data-caption="Desarrollo Aplicaciones Web">
            <ul>
              <li data-icon="<img src='img/logos/php.png'>" data-caption="<p class='custom-caption'>PHP</p>">
                <div data-role="progress" data-value="90" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/html.png'>" data-caption="<p class='custom-caption'>HTML</p>">
                <div data-role="progress" data-value="95" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/js.png'>" data-caption="<p class='custom-caption'>JS</p>">
                <div data-role="progress" data-value="90" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/CSS.png'>" data-caption="<p class='custom-caption'>CSS</p>">
                <div data-role="progress" data-value="80" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/nodeJS.png'>" data-caption="<p class='custom-caption'>NodeJS</p>">
                <div data-role="progress" data-value="75" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/jQuery.png'>" data-caption="<p class='custom-caption'>Jquery</p>">
                <div data-role="progress" data-value="85" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/bootstrap.png'>" data-caption="<p class='custom-caption'>Bootstrap</p>">
                <div data-role="progress" data-value="75" data-small="true" v-if="enableProgress"></div>
              </li>
              <li class="selected" data-icon="<img src='img/logos/laravel.png'>" data-caption="<p class='custom-caption'>Laravel</p>">
                <div data-role="progress" data-value="40" data-small="true" v-if="enableProgress"></div>
              </li>
            </ul>
          </li>
          <li data-caption="Desarrollo Aplicaciones Móviles">
            <ul>
              <li data-icon="<img src='img/logos/ionic.png'>" data-caption="<p class='custom-caption'>Ionic</p>">
                <div data-role="progress" data-value="40" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/flutter.png'>" data-caption="<p class='custom-caption'>Flutter</p>">
                <div data-role="progress" data-value="60" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/androidStudio.png'>" data-caption="<p class='custom-caption'>Android Studio</p>">
                <div data-role="progress" data-value="50" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/reactNative.png'>" data-caption="<p class='custom-caption'>React Native</p>">
                <div data-role="progress" data-value="35" data-small="true" v-if="enableProgress"></div>
              </li>
            </ul>
          </li>
          <li data-caption="Bases de Datos">
            <ul>
              <li data-icon="<img src='img/logos/mySQL.png'>" data-caption="<p class='custom-caption'>SQL</p>">
                <div data-role="progress" data-value="85" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/mongodb.png'>" data-caption="<p class='custom-caption'>MongoDB</p>">
                <div data-role="progress" data-value="70" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/sqlite.png'>" data-caption="<p class='custom-caption'>SQLite</p>">
                <div data-role="progress" data-value="60" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/postgress.png'>" data-caption="<p class='custom-caption'>PostgreSQL</p>">
                <div data-role="progress" data-value="60" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/oracle.png'>" data-caption="<p class='custom-caption'>Oracle</p>">
                <div data-role="progress" data-value="60" data-small="true" v-if="enableProgress"></div>
              </li>
            </ul>
          </li>
          <li data-caption="Gestor de Paquetes">
            <ul>
              <li data-icon="<img src='img/logos/apt.png'>" data-caption="<p class='custom-caption'>Apt</p>">
                <div data-role="progress" data-value="85" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/placeholder.png'>" data-caption="<p class='custom-caption'>Yum</p>">
                <div data-role="progress" data-value="70" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/npm.png'>" data-caption="<p class='custom-caption'>Npm</p>">
                <div data-role="progress" data-value="60" data-small="true" v-if="enableProgress"></div>
              </li>
            </ul>
          </li>
          <li data-caption="Control de Versiones">
            <ul>
              <li data-icon="<img src='img/logos/git.png'>" data-caption="<p class='custom-caption'>Git</p>">
                <div data-role="progress" data-value="85" data-small="true" v-if="enableProgress"></div>
              </li>
            </ul>
          </li>
          <li data-caption="Otros">
            <ul>
              <li data-icon="<img src='img/logos/electron.png'>" data-caption="<p class='custom-caption'>Electron</p>">
                <div data-role="progress" data-value="85" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/python.png'>" data-caption="<p class='custom-caption'>Python</p>">
                <div data-role="progress" data-value="70" data-small="true" v-if="enableProgress"></div>
              </li>
              <li data-icon="<img src='img/logos/unity3D.png'>" data-caption="<p class='custom-caption'>Unity3D</p>">
                <div data-role="progress" data-value="60" data-small="true" v-if="enableProgress"></div>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li data-caption="Aprendiendo">
        <ul>
          <li data-icon="<img src='img/logos/vue.png'>" data-caption="<p class='custom-caption'>VueJS</p>">
            <div data-role="progress" data-type="line" data-small="true" v-if="enableProgress"></div>
          </li>
          <li data-icon="<img src='img/logos/metroui.png'>" data-caption="<p class='custom-caption'>MetroUI</p>">
            <div data-role="progress" data-type="line" data-small="true" v-if="enableProgress"></div>
          </li>
        </ul>
      </li>
      <li data-caption="Proyectos Desarrollados">
        <ul class="pl-10">
          <li data-caption="Páginas Web">
            <ul>
              <a href="http://panpas.herokuapp.com" target="_blank">
                <li data-icon="<img src='img/logos/panpas.png'>" data-caption="<p class='custom-caption'>Panpas</p>"></li>
              </a>
              <a href="https://www.isidromusikaeskola.com" target="_blank">
                <li data-icon="<img src='img/logos/isidro.png'>" data-caption="<p class='custom-caption'>Isidro Musika Eskola</p>"></li>
              </a>
              <a href="https://www.echemar.com" target="_blank">
                <li data-icon="<img src='img/logos/echemar.png'>" data-caption="<p class='custom-caption'>Transportes Echemar</p>"></li>
              </a>
            </ul>
          </li>
          <li data-caption="Aplicaciones Móviles">
            <ul>
              <a href="http://panpas.herokuapp.com" target="_blank">
                <li data-icon="<img src='img/logos/ugaquiz.png'>" data-caption="<p class='custom-caption'>Ugaquiz3000</p>"></li>
              </a>
            </ul>
          </li>
        </ul>
      </li>
      <li data-caption="Planes Futuros">
        <ul>
          <li data-icon="<span class='mif-folder fg-orange'>" data-caption="<p class='custom-caption'></p>"></li>
          </ul>
        </li>
      </ul>
      <button id="show-modal" @click="showModal = true">Show Modal</button>
  <!-- use the modal component, pass in the prop -->
  <modal v-if="showModal" @close="showModal = false">
    <!--
      you can use custom content here to overwrite
      default content
    -->
    <h3 slot="header">custom header</h3>
    </div> <!-- // shifted  -->








    <script>


      // register modal component
      Vue.component('modal', {
        template: '#modal-template'
      })

    const app = new Vue(
      {
        el: "#app",
        data:{
          p : 50,
          enableProgress: true,
          showModal: false,
        },
        methods: {
          updateBarras: function () {
            console.log("UpDATING");
          }
        }
      }
    );
    </script>

  </body>

  </html>
