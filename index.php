<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DASHBOARD</title>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<nav>
		<div id="user">
			<div class="avatar">
				<img src="image/user/bagus.jpg">
			</div>
			<div class="profil">
				<h1>Bagus Mantonafi</h1>
				<h2>ADMIN</h2>
			</div>
		</div>
		<div id="menu">
			<ul>
				<li class="active">
					<a href="#dashboard">
						<i class="icon ion-ios-analytics-outline"></i>
						DASHBOARD
					</a>
				</li>
				<li>
					<a href="#dashboard">
						<i class="icon ion-ios-people"></i>
						USER ADMIN
					</a>
					<span class="badge">6</span>
				</li>
				<li>
					<a href="#siswa">
						<i class="icon ion-university"></i>
						SISWA TERDAFTAR
					</a>
					<span class="badge">428</span>
				</li>
				<li>
					<a href="#guru">
						<i class="icon ion-person-stalker"></i>
						GURU PENGAJAR
					</a>
					<span class="badge">35</span>
				</li>
				<li>
					<a href="#pelajaran">
						<i class="icon ion-ios-bookmarks-outline"></i>
						MATA PELAJARAN
					</a>
				</li>
				<li>
					<a href="#kelas">
						<i class="icon ion-erlenmeyer-flask"></i>
						KELAS
					</a>
					<span class="badge">25</span>
				</li>
			</ul>
		</div>
	</nav>

	<section id="main">
		<header>
			<div id="title-page">
				<a href="">
					<i class="icon ion-android-refresh"></i>
				</a>
				<h2>DASHBOARD ADMIN</h2>
			</div>
			<a href="#" id="keluar"><i class="icon ion-log-out"></i> Keluar</a>
		</header>
		<div id="content">
			<div id="dashboard">			
				<div id="user-team">
					<div class="card">
						<div class="header">
							<h3>TEAM ASSASINS</h3>
							<hr>
						</div>
						<div class="list">
							<ul>
								<li>
									<a href="">
										<span class="avatar"></span>
										<div class="desc">
											<h6 class="name">Bagus Mantonafi</h6>
											<p>Full-Stack Developer</p>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<span class="avatar"></span>
										<div class="desc">
											<h6 class="name">Sholahudin</h6>
											<p>Front-end Developer</p>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<span class="avatar"></span>
										<div class="desc">
											<h6 class="name">Jaya Temara</h6>
											<p>Game Developer</p>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<span class="avatar"></span>
										<div class="desc">
											<h6 class="name">Hendry Roganda L</h6>
											<p>Master Gamer</p>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<span class="avatar"></span>
										<div class="desc">
											<h6 class="name">Bagus Krisna</h6>
											<p>DJ</p>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<span class="avatar"></span>
										<div class="desc">
											<h6 class="name">Aditya Pratama</h6>
											<p>Futsal Lovers</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- user team -->
			</div><!-- id dashboard and user admin -->

			
			<div id="siswa">
				<div class="list-table">
					<div class="card">
						<div class="header">
							<h3>DAFTAR SISWA</h3>
							<hr>
						</div>
						<div class="command">
							<a href="" class="tambah">TAMBAH SISWA<i class="icon ion-plus-round"></i></a>
						</div>
						<div class="list">
							
							<div class="scrolling">
							<table>
								<thead>
									<tr>
										<th><i class="icon ion-pound"></i></th>
										<th>NIS</th>
										<th>Nama</th>
										<th>ID Jurusan</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th colspan="2" align="center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2446</td>
										<td>Bagus Mantonafi</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2447</td>
										<td>Bagus Krisna</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2448</td>
										<td>Hendry Roganda</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2449</td>
										<td>Jaya Temara</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2450</td>
										<td>Sholahudin</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2451</td>
										<td>Aditya Pratama</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>



									<tr>
										<td>1</td>
										<td>2446</td>
										<td>Bagus Mantonafi</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2447</td>
										<td>Bagus Krisna</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2448</td>
										<td>Hendry Roganda</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2449</td>
										<td>Jaya Temara</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2450</td>
										<td>Sholahudin</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2451</td>
										<td>Aditya Pratama</td>
										<td>RPL</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
							</div><!-- scrolling ->
						</div><!-- list -->
					</div><!-- card -->
				</div><!-- list table -->
			</div><!-- siswa -->

			<div id="guru">
				<div class="list-table">
					<div class="card">
						<div class="header">
							<h3>DAFTAR PENGAJAR</h3>
							<hr>
						</div>
						<div class="command">
							
							<a href="" class="tambah">TAMBAH PENGAJAR<i class="icon ion-plus-round"></i></a>
						</div>
						<div class="list">
						<div class="scrolling">
							<table>
								<thead>
									<tr>
										<th><i class="icon ion-pound"></i></th>
										<th>ID Guru</th>
										<th>Nama Guru</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th colspan="2" align="center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>P01</td>
										<td>Sukijan</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>PO2</td>
										<td>Sudirman</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>P03</td>
										<td>Suparman</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>

									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>

									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>

									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>

									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>

									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>

									<tr>
										<td>4</td>
										<td>P04</td>
										<td>Astuti</td>
										<td>Laki - Laki</td>
										<td>Denpasar, ID</td>
										<td>
											<a href="" class="hapus">
												HAPUS
											<i class="icon ion-ios-trash-outline"></i>
											</a>
										</td>

										<td>
											<a href="" class="edit">
												EDIT
											<i class="icon ion-edit"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
							</div>
						</div><!-- list -->
					</div><!-- card -->
				</div><!-- list table -->
			</div><!-- siswa -->
		</div><!-- content -->
	</section>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.floatThead.min.js"></script>
	<script>
		var $table = $(".list table");
		$table.floatThead({
			scrollContainer: function($table){
				return $table.closest(".scrolling");
			}
		});
	</script>
</body>
</html>