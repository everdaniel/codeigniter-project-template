<div class="page-header">
	<h2><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></h2>
</div>

<div class="row">
	<div class="span6">
		<h3>My info</h3>
		<dl class="dl-horizontal">
			<dt>Username</dt>
			<dd><?php echo $user['username'] ?></dd>
			<dt>Email</dt>
			<dd><?php echo $user['email'] ?></dd>
			<dt>First name</dt>
			<dd><?php echo $user['first_name'] ?></dd>
			<dt>Last Name</dt>
			<dd><?php echo $user['last_name'] ?></dd>
			<dt>Phone #</dt>
			<dd><?php echo $user['phone'] ?></dd>
		</dl>
	</div>
	<div class="span6">
		<h3>Activity</h3>
		<dl class="dl-horizontal">
			<dt>Last login</dt>
			<dd><?php echo timespan($user['last_login']) ?> ago</dd>
			<dt>Created at</dt>
			<dd><?php echo date('M, j Y \a\t h:i a', $user['created_on']) ?></dd>
		</dl>
	</div>
</div>

