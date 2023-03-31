<?php
    include_once('header.php');
?>
<?php
    include_once('sidebar.php');
?>
<?php
    include_once('navbar.php');
?>

<!-- Course -->
<main class="content">
	<div class="container-fluid p-0">
		<div class="mb-3">
			<h1 class="h3 d-inline align-middle">Courses</h1>
			<!-- <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
				Get more card examples
			</a> -->
		</div>
		<!-- <div class="row">
			<div class="col-12 col-md-3">
				<div class="card">
					<img class="card-img-top" src="img/photos/unsplash-2.jpg" alt="Unsplash">
					<div class="card-header">
						<h5 class="card-title mb-0">HTML/CSS Course</h5>
					</div>
					<div class="card-body">
						<p class="card-text">HTML is the foundation of all web pages. It defines the structure of a page, while CSS defines its style. HTML and CSS are the beginning of everything you need to know to make your first web page! Learn both and start creating amazing websites.</p>
						<a href="#" class="btn btn-primary">Go Details</a>
					</div>
				</div>
			</div>
		</div> -->
		<div class="col-12 col-lg-8 col-xxl-9 d-flex">
			<div class="card flex-fill">
				<div class="card-header">

					<h5 class="card-title mb-0">Latest Projects</h5>
				</div>
				<table class="table table-hover my-0">
					<thead>
						<tr>
							<th>Course Name</th>
							<th class="d-none d-xl-table-cell">Test Name</th>
							<th class="d-none d-xl-table-cell">Total Question</th>
							<th class="d-none d-xl-table-cell">Duration</th>
							<th>Status</th>
							<th>Publish</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Project Apollo</td>
							<td class="d-none d-xl-table-cell">01/01/2021</td>
							<td class="d-none d-xl-table-cell">31/06/2021</td>
							<td><span class="badge bg-success">Done</span></td>
							<td><span class="badge bg-success">Done</span></td>
							<td><span class="badge bg-primary">Small</span></td>
							<td>
								<button class="btn btn-warning btn-sm"><i data-feather="edit"></i></button>
								<button class="btn btn-danger btn-sm"><i data-feather="trash-2"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
			

<!-- /Course -->

<?php
    include_once('footer.php');
?>