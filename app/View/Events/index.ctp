<script src="//js.pusher.com/2.2/pusher.min.js" type="text/javascript"></script>
<script type="text/javascript">
    // Enable pusher logging - don't include this in production
    Pusher.log = function(message) {
      if (window.console && window.console.log) {
        window.console.log(message);
      }
    };

    var pusher = new Pusher('649596740db2aad4ad9b');
    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {
      alert(data.message);
    });
</script>
			<div class="row">
				<div class="milestone col-lg-8 col-lg-offset-2">
					<h4><i class="fa fa-circle today"></i>Today</h4>
				</div><!-- /.milestone -->
			</div><!-- /.row -->
			<div class="row">
				<div id="newfeed-wrapper" class="col-lg-8 col-lg-offset-2">
					<?php foreach($events as $event): ?>
							<div class="fri-post z-depth-1">
								<div class="header-post row">
									<div class="table">
										<div class="user-img col-lg-2 table-cell">
											<img src="http://placehold.it/50x50" alt=""  class="img-circle"/>
										</div><!-- /.user-img -->
										<div class="user-detail table-cell col-lg-7 table-cell">
											<b class="name"><?php echo $event['User']['name']; ?></b> <span class="activites">đã tham gia một sự kiện</span> <br />
											<span class="times"><?php echo $this->Time->get_time_difference_php($event['Event']['date']); ?></span>
										</div><!-- /.user-detail -->
										<div class="count col-lg-3 table-cell ">
											<?php echo $this->Time->get_time_difference_php($event['Event']['date']); ?>
										</div><!-- /.count -->
									</div><!-- /.user-infors -->
								</div><!-- /.header-post -->
								<div class="img-post">
									<img src="<?php echo $event['Event']['location']; ?>" alt="" />
								</div><!-- /.img-post -->
								<div class="infor-post">
									<h3><?php echo $event['Event']['title']; ?></h3>
									<span class="place"><?php echo $event['Event']['address']; ?></span>
								</div><!-- /.infor-post -->
								<div class="comments-post">
									<a href="" class="like-btn">Like</a>
									<a href="" class="comment-btn">Comment</a>
									<a href="" class="delete-btn pull-right">Delete</a>
								</div><!-- /.comments-post -->
							</div><!-- /.fri-posts -->
				<?php endforeach; ?>	
				</div><!-- /.col-lg-8 -->
			</div><!-- /.row -->	