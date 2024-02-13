<div id="add_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Name</label>
												<input class="form-control" type="text" name="ProName">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Type</label>
												<select class="select" name="ProType">
												<?php
										$sql = "SELECT * FROM project_type";
										$query = $dbh->prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $row)
										{
									?>
													<option><?php echo htmlentities($row->project_type);?></option>

													<?php $cnt+=1;
								}
								}?>
												</select>
											</div>
										</div>
										<!-- <div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select name="client" class="select">
												<option>Select Clients</option>
												<?php 
													// $sql2 = "SELECT * from clients";
													// $query2 = $dbh -> prepare($sql2);
													// $query2->execute();
													// $result2=$query2->fetchAll(PDO::FETCH_OBJ);
													// foreach($result2 as $row)
													// {          
														?>  
													<option value="<?php //echo htmlentities($row->FirstName)." ".htmlentities($row->LastName); ?>">
													<?php //echo htmlentities($row->FirstName)." ".htmlentities($row->LastName); ?></option>
													<?php //} ?> 
												</select>
											</div>
										</div> -->
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<input name="start_date" class="form-control" type="date" >
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date</label>
												<input name="end_date" class="form-control" type="date">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label>Duration of the project</label>
												<select class="select" name="ProDuration">
													<option value="1">1 Month</option>
													<option value="2">2 Month</option>
													<option value="3">3 Month</option>
													<option value="4">4 Month</option>
													<option value="5">5 Month</option>
													<option value="6">6 Month</option>
													<option value="7">7 Month</option>
													<option value="8">8 Month</option>
													<option value="9">9 Month</option>
													<option value="10">10 Month</option>
													<option value="11">11 Month</option>
													<option value="12">12 Month</option>
													<option value="13">13 Month</option>
													<option value="14">14 Month</option>
													<option value="15">15 Month</option>
													<option value="16">16 Month</option>
													<option value="17">17 Month</option>
													<option value="18">18 Month</option>
													<option value="19">19 Month</option>
													<option value="20">20 Month</option>
													<option value="21">21 Month</option>
													<option value="22">22 Month</option>
													<option value="23">23 Month</option>
													<option value="24">24 Month</option>
													<option value="25">25 Month</option>
													<option value="26">26 Month</option>
													<option value="27">27 Month</option>
													<option value="28">28 Month</option>
													<option value="29">29 Month</option>
													<option value="30">30 Month</option>
													<option value="31">31 Month</option>
													<option value="32">32 Month</option>
													<option value="33">33 Month</option>
													<option value="34">34 Month</option>
													<option value="35">35 Month</option>
													<option value="36">36 Month</option>
												</select>
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="form-group">
												<label>Priority</label>
												<select class="select" name="ProPriority">
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="form-group">
												<label>Price</label>
												<input name="price" placeholder=" 1000000 SAR" class="form-control" type="text">
											</div>
										</div>
										
									</div>
									<!-- <div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Project Leader</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Team Leader</label>
												<div class="project-members">
													<a href="#" data-toggle="tooltip" title="Jeffery Lalor" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="">
													</a>
												</div>
											</div>
										</div>
									</div> -->
									<!-- <div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Team</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Team Members</label>
												<div class="project-members">
													<a href="#" data-toggle="tooltip" title="John Doe" class="avatar">
														<img src="assets/img/profiles/avatar-16.jpg" alt="">
													</a>
													<a href="#" data-toggle="tooltip" title="Richard Miles" class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="">
													</a>
													<a href="#" data-toggle="tooltip" title="John Smith" class="avatar">
														<img src="assets/img/profiles/avatar-10.jpg" alt="">
													</a>
													<a href="#" data-toggle="tooltip" title="Mike Litorus" class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div> -->
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" name="Description" class="form-control summernote" placeholder="Enter your message here"></textarea>
									</div>
									<!-- <div class="form-group">
										<label>Upload Files</label>
										<input class="form-control" type="file">
									</div> -->
									<div class="submit-section">
										<button type="submit" name="add_project" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>