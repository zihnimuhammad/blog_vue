<footer class="site-footer site-bg-dark site-section">
    <div class="container">
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
				CAFEGUE
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;   2021
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
	
	
	
	<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-body">
		<div class="row">
		  <div class="col-lg-12">
			<div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
		  </div>
		  <div class="col-lg-12 p-5">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <small>CLOSE </small><span aria-hidden="true">&times;</span>
			</button>
			<h1 class="mb-4">Reserve A Table</h1>  
			<form action="#" method="post">
			  <div class="row">
				<div class="col-md-6 form-group">
				  <label for="m_fname">First Name</label>
				  <input type="text" class="form-control" id="m_fname">
				</div>
				<div class="col-md-6 form-group">
				  <label for="m_lname">Last Name</label>
				  <input type="text" class="form-control" id="m_lname">
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-12 form-group">
				  <label for="m_email">Email</label>
				  <input type="email" class="form-control" id="m_email">
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6 form-group">
				  <label for="m_people">How Many People</label>
				  <select name="" id="m_people" class="form-control">
					<option value="1">1 People</option>
					<option value="2">2 People</option>
					<option value="3">3 People</option>
					<option value="4+">4+ People</option>
				  </select>
				</div>
				<div class="col-md-6 form-group">
				  <label for="m_phone">Phone</label>
				  <input type="text" class="form-control" id="m_phone">
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-6 form-group">
				  <label for="m_date">Date</label>
				  <input type="text" class="form-control" id="m_date">
				</div>
				<div class="col-md-6 form-group">
				  <label for="m_time">Time</label>
				  <input type="text" class="form-control" id="m_time">
				</div>
			  </div>

			  <div class="row">
				<div class="col-md-12 form-group">
				  <label for="m_message">Message</label>
				  <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-md-12 form-group">
				  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
				</div>
			  </div>

			</form>
		  </div>
		</div>
		
	  </div>
	</div>
  </div>
</div>


<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?php echo e(asset('front2/eatwell/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('front2/eatwell/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('front2/eatwell/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('front2/eatwell/js/jquery.easing.1.3.js')); ?>"></script>

<script src="<?php echo e(asset('front2/eatwell/js/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('front2/eatwell/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('front2/eatwell/js/jquery.magnific-popup.min.js')); ?>"></script>

<script src="<?php echo e(asset('front2/eatwell/js/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('front2/eatwell/js/jquery.timepicker.min.js')); ?>"></script>

<script src="<?php echo e(asset('front2/eatwell/js/jquery.animateNumber.min.js')); ?>"></script>

<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7Mr1SnmpnkqSqZZcFDXOPK0LVGJ1aqV4"></script>
<script src="<?php echo e(asset('front2/eatwell/js/google-map.js')); ?>"></script>
-->

<script src="<?php echo e(asset('front2/eatwell/js/main.js')); ?>"></script>


<script src="<?php echo e(asset('admin/js/jquery.js')); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(asset('admin/js/bootstrap.js')); ?>" ></script>

</body>
</html><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/include_front/footer.blade.php ENDPATH**/ ?>