<?php $this->load->view('template/header.php'); ?>

<style>
	.navbar {
		display: none !important;
	}
</style>

	<div class="container">
		<div class="card border-secondary mb-3 mt-4" style="max-width: 25rem; margin:auto;">
			<div class="card-header">Login</div>
			<div class="card-body text-secondary">
				<h5 class="card-title">Masuk ke Halaman Admin</h5>
				

				<?php if($this->session->flashdata('message_login_error')): ?>
					<div class="invalid-feedback">
						<?= $this->session->flashdata('message_login_error') ?>
				</div>
				<?php endif ?>
				
				<form action="" method="post" style="max-width: 600px;">
				<div>
					<label for="name">Email/Username*</label>
					<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
						placeholder="Your username or email" value="<?= set_value('username') ?>" required />
					<div class="invalid-feedback">
						<?= form_error('username') ?>
					</div>
				</div>
				<div>
					<label for="password">Password*</label>
					<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
						placeholder="Enter your password" value="<?= set_value('password') ?>" required />
						<div class="invalid-feedback">
						<?= form_error('password') ?>
					</div>
				</div>
				<div>
					<input type="submit" class="btn btn-primary" value="Login">
				</div>
			</form>
		</div>
	</div>

	</div>
<?php $this->load->view('template/footer.php'); ?>
