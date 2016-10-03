<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <title>Anniv</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
	<body>
		<div class="container">
			<div class="row">
			<h1><?php echo $title; ?></h1>
			<h5><?php echo $this->session->flashdata('insert'); ?></h5>
			<form method="post" action="<?php echo base_url() ?>index.php/admin/do_insert">
				<div class="col-md-6">
						<div class="form-group">
							<label>ID Participant</label>
							<input type="text" class="form-control" value="<?php echo $randNum ?>" disabled>
							<input type="hidden" name="id_participant" class="form-control" value="<?php echo $randNum ?>">
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Company</label>
							<input type="text" name="company" class="form-control">
						</div>
						<div class="form-group">
							<label>Position</label>
							<input type="text" name="position" class="form-control">
						</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control">
						</div>
						<div class="form-group">
							<label>ID Participant Type</label>
							<select class="form-control" name="participant_type">
								<?php foreach ($participant_type as $row) { ?>
									<option value="<?php echo $row['id_participant_type'] ?>"><?php echo $row['participant_type'] ?></option>
								<?php } ?>
							</select>
						</div>
							<div class="form-group">
							<label>ID Attends Confirmation</label>
							<select class="form-control" name="attend_confirmation">
								<?php foreach ($attend_confirmation as $row) { ?>
									<option value="<?php echo $row['id_attend_confirmation'] ?>"><?php echo $row['attend_confirmation'] ?></option>
								<?php } ?>
							</select>
						</div>	
				</div>
				<input type="submit" name="submit" class="btn btn-warning" value="Save">
				</form>
			</div>
		</div>
	</body>
</html>