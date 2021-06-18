<!DOCTYPE html>
<html>
  <!--
    WARNING! Make sure that you match all Quasar related
    tags to the same version! (Below it's "@1.15.16")
  -->

  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/quasar@1.15.16/dist/quasar.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <!-- Add the following at the end of your body tag -->
    <div class="bg-blue-8 text-white text-center">
    <div class="text-h6">Example of craete files & folder directives</div>
    <div class="bg-green">1st Expample for Creating a file </div>
    <?php  
      $handle = @fopen("./small.txt", "r") or die("wrong Mode");
      // fwrite($handle, 'this is first entry');
      // $variable = "";
    //  while(!feof($handle))
    //  {
       $variable = fread($handle, 1024);
      // }
      @fclose($handle);
      echo "<br>";
      echo $variable;
      echo "<br>";
      var_dump(file_exists("./text.txt"));
      echo "<br>";
      var_dump(is_file("./text.txt"));
      echo "<br>";
      // var_dump(filesize("./large.txt"));
      echo "<br>";
      var_dump(unlink("./license.txt"));
      var_dump(copy("./large.txt", "./medium.txt"));
      var_dump(rename("./large.txt", "./small.txt"));
    // ?>
    </div>

    <div class="bg-grey-10 text-white text-center">
    A challenge record how many times page has been clicked <br>
    <?php
    if(file_exists("./counters.txt")) {
      $handle = fopen("./counters.txt", "r");
      $counter = fgets($handle);
      fclose($handle);
      $counter++;
      echo " you are the ".$counter ." visitor.";
      $handle = fopen("./counters.txt", "w");
      fwrite($handle, $counter);
      fclose($handle);
    } 
    else {
      $handle = fopen("./counters.txt", "w");
      fwrite($handle, 50);
      fclose($handle);
    }

    ?>
    </div>

    <h4>lets talk about directory </h4>

    <?php 
      var_dump(mkdir("./country"));
      var_dump(mkdir("./country/city"));
      var_dump(rmdir("./country/city"));
      var_dump(rmdir("./india"));

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quasar@1.15.16/dist/quasar.umd.min.js"></script>
    
    <script>
      /*
        Example kicking off the UI. Obviously, adapt this to your specific needs.
        Assumes you have a <div id="q-app"></div> in your <body> above
       */
      new Vue({
        el: '#q-app',
        data: function () {
          return {}
        },
        methods: {},
        // ...etc
      })
    </script>
  </body>
</html>
