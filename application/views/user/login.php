<?php echo form_open('login', array('class' => 'form-signin')) ?>
	
	<h2 class="form-signin-heading">Please sign in</h2>

	<div class="control-group <?php echo (form_error('identity')) ? 'error' : '' ?>">
		<div class="controls">
			<label for="identity" class="control-label">Email</label>
			<?php echo form_input($identity) ?>
			<?php echo form_error('identity') ?>
		</div>
	</div>

	<div class="control-group <?php echo (form_error('password')) ? 'error' : '' ?>">
		<div class="controls">
			<label for="password" class="control-label">Password</label>
			<?php echo form_input($password) ?>
			<?php echo form_error('password') ?>
		</div>
	</div>
	
	<div class="form-actions">
		<div class="pull-left">
			<label class="checkbox cb_rememberme">
				<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"') ?> Keep me logged in
			</label>
		</div>
		<div class="pull-right">
			<button id="btn_submit" class="btn tn-larbge btn-primary" type="submit">Log In</button>
		</div>
	</div>

<?php echo form_close() ?>

<div class="section_forgot">
	&raquo; <a href="<?php echo site_url('forgot-password') ?>">Forgot your password?</a>
</div>