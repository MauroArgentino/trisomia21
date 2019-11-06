  <div class="row">
  	<div class="form-group col-md-4">
  		<input id="captcha" type="text" class="form-control" placeholder="Ingresar Captcha" name="captcha"></div>
	<div class="form-group col-md-4">
		<div class="captcha">
			<span class="shadow p-3 mb-5 bg-white rounded">{!! captcha_img() !!}</span>
			<button type="button" class="btn btn-primaryS"><i class="fas fa-sync" id="refresh"></i></button>
		</div>
</div>
</div>