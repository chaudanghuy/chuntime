<div class="container">	
			<div class="row">
				<div id="newfeed-wrapper" class="col-lg-8 col-lg-offset-2">
					<?php foreach($events as $event): ?>
					<div id="post" class="row">
						<div class="col-lg-8">
							<div class="fri-post z-depth-1">
								<div class="header-post row">
									<div class="table">
										<div class="user-img col-lg-2 table-cell">
											<img src="http://placehold.it/50x50" alt=""  class="img-circle"/>
										</div><!-- /.user-img -->
										<div class="user-detail table-cell col-lg-8 table-cell">
											<b class="name"><?php echo $event['User']['name']; ?></b> <span class="activites">đã tham gia một sự kiện</span> <br />
											<span class="times"><?php echo $this->Time->get_time_difference_php($event['Event']['date']); ?></span>
										</div><!-- /.user-detail -->
										<div class="count col-lg-2 table-cell ">
											<?php echo $this->Time->get_time_difference_php($event['Event']['date']); ?>
										</div><!-- /.count -->
									</div><!-- /.user-infors -->
								</div><!-- /.header-post -->
								<div class="img-post">
									<img src="http://placehold.it/450x150" alt="" />
								</div><!-- /.img-post -->
								<div class="infor-post">
									<h3><?php echo $event['Event']['title']; ?></h3>
									<span class="place">Tầng 51 - Bitexco Tower - TPHCM</span>
								</div><!-- /.infor-post -->
								<div class="comments-post">
									<a href="" class="like-btn">Like</a>
									<a href="" class="comment-btn">Comment</a>
									<a href="" class="join-btn">Join</a>
									<a href="" class="delete-btn">Delete</a>
								</div><!-- /.comments-post -->
							</div><!-- /.fri-posts -->
						</div><!-- /.col-lg-12 -->
					</div><!-- /.row -->
				<?php endforeach; ?>	
				</div><!-- /.col-lg-8 -->
			</div><!-- /.row -->	
		</div><!-- /.container -->