<style>
   .panel.with-nav-tabs .panel-heading {
      padding: 5px 5px 0 5px;
   }


   .panel.with-nav-tabs .nav-tabs {
      border-bottom: none;
   }

   .panel.with-nav-tabs .nav-justified {
      margin-bottom: -1px;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li > a,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
      color: #fff;
   }

   .with-nav-tabs.panel-primary .nav-tabs > .open > a,
   .with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
      color: #fff;
      background-color: #3071a9;
      border-color: transparent;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.active > a,
   .with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
      color: #428bca;
      background-color: #fff;
      border-color: #428bca;
      border-bottom-color: transparent;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
      background-color: #428bca;
      border-color: #3071a9;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
      color: #fff;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
      background-color: #3071a9;
   }

   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
   .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
      background-color: #4a9fe9;
   }
</style>
<!-- Estilo modal -->
<style>
   .modal-mask {
      position: fixed;
      z-index: 9998;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, .5);
      display: table;
      transition: opacity .3s ease;
   }

   .modal-wrapper {
      display: table-cell;
      vertical-align: middle;
   }

   .modal-container {
      width: 950px;
      margin: 0px auto;
      padding: 20px 30px;
      background-color: #fff;
      border-radius: 2px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
      transition: all .3s ease;
      font-family: Helvetica, Arial, sans-serif;
   }

   .modal-header h3 {
      margin-top: 0;
      color: #42b983;
   }

   .modal-body {
      margin: 20px 0;
   }

   .modal-default-button {
      float: right;
   }

   /*
    * The following styles are auto-applied to elements with
    * transition="modal" when their visibility is toggled
    * by Vue.js.
    *
    * You can easily play with the modal transition by editing
    * these styles.
    */

   .modal-enter {
      opacity: 0;
   }

   .modal-leave-active {
      opacity: 0;
   }

   .modal-enter .modal-container,
   .modal-leave-active .modal-container {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
   }
</style>