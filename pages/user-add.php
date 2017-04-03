<!--File :user-add.php -->

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?page=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <br>

    <section class="content">
		<div class="panel panel-default">
			<div class="panel-heading">Tambah User</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="process/user_add_process.php">
			 		<div class="form-group">
			 			<label for="username" class="col-sm-2 control-label">Username</label>
			 			<div class="col-sm-3">
			 				<input type="text" class="form-control" name="username" placeholder="Input Your Username" title="username" />
			 			</div>
			 		</div>

					<div class="form-group">
			 			<label for="password" class="col-sm-2 control-label">Password</label>
			 			<div class="col-sm-3">
			 				<input type="password" class="form-control" name="password" placeholder="Input Your password" title="password" />
			 			</div>
			 		</div>

			 		<div class="form-group">
			 			<div class="col-sm-offset-2 col-sm-10">
			 			<!-- col-sm-offset-2 untuk kosongan 2 span pada layar dekstop -->
			 			<input type="submit" class="btn btn-primary" name="simpan" value="Simpan"/>	</div>
			 		</div>
		 		</form>
			</div>
		</div>
    </section>