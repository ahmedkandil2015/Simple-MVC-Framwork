<?php require ('partials/header.php');?>
	<h1>All Users </h1>
	<?php foreach($users as $user):?>

		<li><?= $user->name ?></li>
	<?php endforeach;?>


	<h1>Submit Your Name  </h1>
	<form action="/users" method="POST">
		<input type="text" name="name">
		<button type="submit">submit</button>
	</form>

<?php require ('partials/footer.php');?>
