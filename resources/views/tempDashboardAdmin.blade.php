@extends('layout.dashboard')

@section('content')
<div class="db-grid">
	<!-- ============= TITLE HEAD ============= -->
	<header class="db-header-content">
		Work Request System
	</header>

<!-- ============= LEFT SIDE BAR (REQUESTS) ============= -->
	<section class="db-left-side-content">

		<div class="left-label">
			Requests
		</div>

		<div class="left-content">
			content
		</div>

		<div class="left-footer">
			Add Requestors
		</div>

	</section>

<!-- ============= MAIN SECTION (APPROVED REQUESTS) ============= -->
	<main class="db-main-content">
		<div class="main-label">
			Approved Requests
		</div>

		<div class="main-content">
			content
		</div>

		<div class="main-footer"></div>
	</main>

<!-- ============= RIGHT SIDE BAR (WORKSTAFFS) ============= -->
	<section class="db-right-side-content">
		<div class="right-label">
			Work Staffs
		</div>

		<div class="right-content">
			content
		</div>

		<div class="right-footer">
			Add Staffs
		</div>
	</section>

<!-- ============= FOOTER SECTION ============= -->
	<footer class="db-footer-content"><!-- This does nothing --></footer>

</div>
@endsection