<!doctype html> 
<html lang="en">
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>To Do App</title>
  
    <?php include("../inc/header.php") ?>
    
    <h1><span>To Do App</span></h1>

   
</div>

<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">
       <form id="taskForm">
            <input id="taskInput" type="text" autocomplete="off">
            <button>Create A Task</button>
       </form>

       <h3>My To Do List</h3>

       <ul id="taskList">
           
       </ul>
        
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
</div>
   
   
<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>