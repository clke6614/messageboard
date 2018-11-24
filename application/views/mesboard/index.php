<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
      <link rel="stylesheet" href="/messageboard/css/backstyle.css">
          <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>messageboard</title>
    <meta name="description" content="Blueprint: Slide and Push Menus" />
    <meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/messageboard/css/default.css" />
    <link rel="stylesheet" type="text/css" href="/messageboard/css/component.css" />
    <script src="/messaageboard/js/modernizr.custom.js"></script>
    </head>
    <body class="back">
      <div class="center2">
	      <div class="center">
		     <div class="main">
		        <section>
		          <button id="showRight">Slide Menus</button>
		        </section>
		     </div>

		            <form action="/messageboard/mesboard/creat" class="border" method="POST">
		               <p class="tu">  標題: <input type="text" name="mes[title]" id="showLeft"/></p> 
		            	 <p class="tu">名子: <input type="text" name="mes[name]"/></p>
		            	 <p class="tu">留言內容:</p>
		                 <p><textarea name="mes[message]" rows="4" cols="43" placeholder="輸入您的留言..."></textarea></p>
		            	 <input type="submit" value="送出" style="float:right;">
		            </form>

		            <?php foreach ($mes as $key => $mes): ?>
           
			            <div class="border2">  
				            <p class="bottom"> 
				            	<a style="color: #b30b0b;"href="/messageboard/mesboard/destroy/<?php echo $mes['id'] ?>">remove</a>
				            	<?php  echo $mes['title']; ?>
				            	#<?php  echo $mes['id'];   ?>
				            </p>
				            <div style="color: #859dac;"><?php  echo $mes['name'];?><span style="float: right;font-size:10px;font-style: italic;"><?php  echo $mes['time'];?></span></div>
				            <p><?php  echo $mes['message']; ?></p>    
				            <a class="update" href="/messageboard/mesboard/delete/<?php echo $mes['id'] ?>">delete</a>
				            <a class="update" href="/messageboard/mesboard/edit/<?php echo $mes['id'] ?>">Edit</a>   
			            </div>   
			        <?php endforeach ?>  
                <a class="update" href="/messageboard/mesboard/turnpage/<?php echo $page_count+3 ?>">next</a>    
                <?php
                for($i=2; $i>=0; $i--)
                {
                  $count=$page_count+$i;
                ?>
                <a class="update" href="/messageboard/mesboard/page_count/<?php echo $count; ?>"><?php echo $page_count+$i; ?></a> 
          <?php } ?>
                
                <a class="update" href="/messageboard/mesboard/turnpage/<?php echo $page_count-3 ?>">up</a>          
	      </div>
      </div>
    </body>
</html>