<?php
   /**
      * Hello World! Module Entry Point
      *
      * @package    Joomla.Tutorials
      * @subpackage Modules
      * @license    GNU/GPL, see LICENSE.php
      * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
      * mod_helloworld is free software. This version may have been modified pursuant
      * to the GNU General Public License, and as distributed it includes or
      * is derivative of works licensed under the GNU General Public License or
      * other free or open source software licenses.
   */

   // No direct access
   defined('_JEXEC') or die;

   // Include the syndicate functions only once
   require_once dirname(__FILE__) . '/helper.php';


?>



<head>
 
   <!--<link href="assets/css/about.css" rel="stylesheet">-->
   <link rel="stylesheet" href="assets/css/about.css">
   <link href="https://fonts.googleapis.com/css?family=Lato|Permanent+Marker" rel="stylesheet">
      <!--<script src="js/jquery-3.1.1.min.js"></script>-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script type="text/javascript">
         
         $(document).ready(function(){

            $(".flowers").hide();
            $(".card").mouseenter(function()
            {
               $(".flowers").slideDown("slow");
            });

            


      });
      </script>
</head>


   
      <h1>
         Feel the real Hawaiian vibe in the center of Almaty!
      </h1>
