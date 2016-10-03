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
				<div class="col-md-12">
					<h1>LIST</h1>
					<h5><?php echo $this->session->flashdata('list'); ?></h5>
					<a href="<?php echo base_url() ?>index.php/admin/insert"><button class="btn btn-success">Insert</button></a>
					<table class="table">
						<thead>
							<tr>
								<td>ID</td>
								<td>Name</td>
								<td>Company</td>
								<td>Position</td>
								<td>Email</td>
								<td>Phone</td>
								<td>Participant Type</td>
								<td>Attend Confirmation</td>
								<td>Created At</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $row) { ?>
								<tr>
									<td><?php echo $row['id_participant'] ?></td>
									<td><?php echo $row['name'] ?></td>
									<td><?php echo $row['company'] ?></td>
									<td><?php echo $row['position'] ?></td>
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['phone'] ?></td>
									<td><?php echo $row['id_participant_type'] ?></td>
									<td><?php echo $row['id_attend_confirmation'] ?></td>
									<td><?php echo $row['created_at'] ?></td>
									<td><a href="<?php echo base_url().'index.php/admin/edit/'.$row['id_participant'] ?>"><button class="btn btn-warning">Edit</button></a>
									<a href="<?php echo base_url().'index.php/admin/delete/'.$row['id_participant'] ?>"><button class="btn btn-danger">Delete</button></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>