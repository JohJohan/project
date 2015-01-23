<!DOCTYPE html>
<html lang="en">
	<head>
		<title>{{Config::get('app.sitenaam')}} - ADMIN PANEL</title>
		<link rel="stylesheet" type="text/css" href="assest/css/admin/main.css">
		<script type="text/javascript" src="assest/js/jquery.js"></script>
		<script type="text/javascript" src="assest/js/admin/ControlPanel.js"></script>
	</head>

	<body>
		<div id="navbar">
			Control panel
			<div class="button" onclick="openMe(this);">
				Users
				<a href="?action=1">
					<div class="sub-button">
						Profile
					</div>
				</a>

				<a href="?action=2">
					<div class="sub-button">
						Ban
					</div>
				</a>
			</div>

			<div class="button" onclick="openMe(this);">
				Roles
				<a href="?action=3">
					<div class="sub-button">
						Set Role
					</div>
				</a>

				<a href="?action=4">
					<div class="sub-button">
						Role Power
					</div>
				</a>

				<a href="?action=5">
					<div class="sub-button">
						Remove Role
					</div>
				</a>
			</div>
		</div>
	</body>
</html>