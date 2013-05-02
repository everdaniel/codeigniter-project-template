<?php echo form_open('forgot-password', array('class' => 'form-password-forgot form-horizontal')) ?>
	
	<h2 class="form-forgot-heading">Forgot password</h2>

	<p>Please enter your email address so we can send you an email to reset your password.</p>

	<p>&nbsp;</p>

	<div class="control-group <?php echo (form_error('email')) ? 'error' : '' ?>">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<?php echo form_input(array('name' => 'email', 'id' => 'email', 'value' => '', 'placeholder' => 'Your email address')) ?>
			<?php echo form_error('email') ?>
		</div>
	</div>
	
	<div class="form-actions">
		<button id="btn_submit" class="btn btn-large btn-primary" type="submit">Send me a new one</button>

		<p>&nbsp;</p>

		<p>or <a href="<?php echo site_url('login') ?>">log in</a></p>
	</div>

<?php echo form_close() ?>