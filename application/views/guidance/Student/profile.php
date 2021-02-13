
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/view_parentprofile");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Student's Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="img-container">
								<img id="image" src="<?php echo base_url("vendors/images/photo2.jpg");?>" alt="Picture">
							</div>

							<h5 class="text-center" style="margin-top: 7px;"><?php echo $prof['firstname'].' '.$prof['middlename'].' '.$prof['lastname'] ?></h5>
							<p class="text-center text-muted"><?php echo ucfirst( $prof['user_level'] ); ?></p>

							<div class="profile-info">
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow height-100-p">
							<div class="pd-20">
												<div class="profile-info row">
													<div class="col-md-4 col-sm-12">
														<h5 class="mg-vr-20 weight-500" style="color: #008ae6;">Personal Information</h5>
														<ul>
															<li>
																<span>Gender:</span>
																<?php echo ( $prof['gender']=="F"?"Female":"Male" ); ?>
															</li>
															<li>
																<span>Birthdate:</span>
																<?php echo date( 'M d, Y', strtotime($prof['birthdate']) ); ?>
															</li>
															<li>
																<span>Address:</span>
																<?php echo ucfirst( $prof['sitio'] . ', ' . $prof['barangay'] ); ?><br>
																<?php echo ucfirst( $prof['municity'] . ', ' . $prof['province'] ); ?><br>
															</li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-12">
														<h5 class="mg-vr-20 weight-500" style="color: #008ae6;">Class Information</h5>
														<ul>
															<li>
																<span style="color: grey;">LRN:</span>
																<?php echo ucfirst( $prof['studentLRN'] ); ?><br>
															</li>
															<li>
																<span>Grade - Section & Strand:</span>
																11 - A STEM
															</li>
															<li>
																<span>Adviser:</span>
																Mariena Haligidprof
															</li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-12">
														<h5 class="mg-vr-20 weight-500" style="color: #008ae6;">Parent Information</h5>
														<ul>
															<li>
																<span>Father's Name:</span>
																<?php echo ucfirst( $prof['father'] ); ?><br>
															</li>
															<li>
																<span>Mother's Name:</span>
																<?php echo ucfirst( $prof['mother'] ); ?><br>
															</li>
															<li>
																<span>Guardian's Name:</span>
																<?php echo ucfirst( $prof['guardian'] ); ?><br>
															</li>
															<li>
																<span>Parent/Guardian's Contact Number:</span>
																<?php echo $prof['guardiannumber']; ?><br>
															</li>
														</ul>
													</div>
								
								
												</div>
											</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	