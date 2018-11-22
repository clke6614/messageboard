<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
      <link rel="stylesheet" href="/messageboard/css/style.css">
          <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Blueprint: Slide and Push Menus</title>
    <meta name="description" content="Blueprint: Slide and Push Menus" />
    <meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/messageboard/css/default.css" />
    <link rel="stylesheet" type="text/css" href="/messageboard/css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    </head>
    <body class="back">
      <div class="center2" id="showLeft">
        <div class="center">
          <div class="main">
              <section>
                <button id="showRight">Slide Menus</button>
              </section>
          </div>
      			   <form method="post" action="/messageboard/mesboard/updata/<?php  echo $mes['id'];?>">
      			          <div class="border2">  
      				          <p class="bottom"> <?php  echo $mes['title'];   ?>#<?php  echo $mes['id'];   ?></p>
      				          <div style="color: #859dac;">
                          <input style="width:70px;" stype="text" name="mes[name]" id="name" value="<?php  echo $mes['name'];?>">
                          <span style="float: right;font-size:10px;font-style: italic;"><?php  echo $mes['time'];?></span>
                        </div>
      				          <p><textarea name="mes[message]" id="content"><?php  echo $mes['message'] ?></textarea></p>  
      				          <button id="submit" type="submit" class="update">Edit message</button>
      			          </div>        
      			   </form>
        </div>
      </div>
    </body>
</html>