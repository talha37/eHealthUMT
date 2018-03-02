<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Edit Profile
				<small>Control panel</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active"><i class="fa fa-user"></i> Edit Profile</li>
			</ol>
		</section>

		<!-- Main content -->
	<section class="content">
			<div class="box">
			<div class="box-header">
				<i class="fa fa-user"></i>
				<h3 class="box-title">Edit Profile</h3>
				<div class="box-body">
                    <div class="row form-group">
                        <!-- <form method="POST" action="http://localhost:8000/image-upload-with-validation" accept-charset="UTF-8" 15 enctype="multipart/form-data"><input name="_token" type="hidden" value="JoX3CaYMHvJNDHKNvpUf9BG07wceDgK8H1F2CNAm">
                        <label for="image_file" class="col-md-offset-3 col-md-1 control-label text-right">
                                Profile Picture:
                        </label>
                            <div class="col-md-4">
                                <input class="form-control ntp" name="image_file" type="file">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>    -->
                    </div>
					<form role="form" method="POST" action='http://localhost:8000/edit-profile/15'>
					<input type="hidden" name="_token" value="JoX3CaYMHvJNDHKNvpUf9BG07wceDgK8H1F2CNAm">
                    <div class="row form-group">
							<label for="name" class="col-md-offset-3 col-md-1 control-label text-right">Name: </label>
							<div class="col-md-4">
								<input type="text" class="form-control" name='text'>
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
						<div class="row form-group">
							<label for="email" class="col-md-offset-3 col-md-1 control-label text-right">Email: </label>
							<div class="col-md-4">
								<input type="text" class="form-control" name='text'>
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
					<form role="form" method="POST" action='http://localhost:8000/edit-profile/15'>
					<input type="hidden" name="_token" value="JoX3CaYMHvJNDHKNvpUf9BG07wceDgK8H1F2CNAm">
						<div class="row form-group">
							<label for="password" class="col-md-offset-3 col-md-1 control-label text-right">Password: </label>
							<div class="col-md-4">
								<input type="text" class="form-control" name='address'>
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
					<form role="form" method="POST" action='http://localhost:8000/edit-profile/15'>
					<input type="hidden" name="_token" value="JoX3CaYMHvJNDHKNvpUf9BG07wceDgK8H1F2CNAm">
						<div class="row form-group">
							<label for="phone" class="col-md-offset-3 col-md-1 text-right">Phone:</label>
							<div class="col-md-4">
								<input type="number" class="form-control" name="cnic" pattern="[0-9]{13}">
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
					<form role="form" method="POST" action='http://localhost:8000/edit-profile/15'>
					<input type="hidden" name="_token" value="JoX3CaYMHvJNDHKNvpUf9BG07wceDgK8H1F2CNAm">
						<div class="row form-group">
							<label for="gender" class="col-md-offset-3 col-md-1 text-right">Gender:</label>
							<div class="col-md-4">
								<input type="tel" class="form-control" name="phone" pattern="[0-9]{11}">
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
					<form role="form" method="POST" action='http://localhost:8000/edit-profile/15'>
					<input type="hidden" name="_token" value="JoX3CaYMHvJNDHKNvpUf9BG07wceDgK8H1F2CNAm">
						<div class="row form-group">
							<label for="city" class="col-md-offset-3 col-md-1 control-label text-right">Department: </label>
							<div class="col-md-4">
                                <select name="city" id="city" class="form-control">
                                    <option value="SST">SST</option>
                                    <option value="SBE">SBE</option>
                                    <option value="SHS">SHS</option>
                                    <option value="SPA">SPA</option>
                                    <option value="STD">STD</option>
                                    <option value="SAC">SAC</option>
                                </select>
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
