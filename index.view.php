<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

	<title> Php Learning</title>

	<style>

		body {
			background: #e3e3e3;
			padding: 4em;
			text-align: center;
		}	
	</style>
</head>
<body>	
	<header>		
	<h1> Php Learning </h1>
	</header>  
    <ul>
	<?php foreach ($tasks as $task) : ?>		
		<li>
			<?php if($task->completed) : ?>
            <strike><?= $task->description; ?></strike>            
            <?php else : ?> 
            <?= $task->description; ?>	
            <?php endif; ?> 
		</li>    
    <?php endforeach; ?>
    </ul>
</body>
</html>