<?php if ($alert = $this->session->flashdata('app_alert')): ?>
<div class="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $alert ?></div>
<?php endif ?>

<?php if ($error = $this->session->flashdata('app_error')): ?>
<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $error ?></div>
<?php endif ?>

<?php if ($success = $this->session->flashdata('app_success')): ?>
<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $success ?></div>
<?php endif ?>

<?php if ($info = $this->session->flashdata('app_info')): ?>
<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $info ?></div>
<?php endif ?>