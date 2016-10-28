<div class="row">
    <div class="col-md-12">
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
		    <div class="panel-body panel-form">
		        <form class="form-horizontal form-bordered" action="<?php echo $action;?>" method="post" data-parsley-validate="true">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Nama Propinsi * :</label>
						<div class="col-md-3 col-sm-3">
                            <?php echo form_dropdown('propinsi',$option_propinsi,isset($default['propinsi']) ? $default['propinsi'] : '','id="propinsi" data-size="10" data-parsley-required="true" data-live-search="true" data-style="btn-white" class="form-control selectpicker"');?>
                            <span style="color:red;"><?php echo form_error('propinsi');?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3">Nama Kabupaten * :</label>
						<div class="col-md-3 col-sm-3">
							<input class="form-control" type="text" id="nama" minlength="1" maxlength="50" name="nama" value="<?php echo set_value('nama',isset($default['nama']) ? $default['nama'] : ''); ?>" data-type="nama" placeholder="Masukan Nama Kabupaten" data-parsley-required="true" data-parsley-minlength="1" data-parsley-maxlength="50"/>
                            <span style="color:red;"><?php echo form_error('nama');?></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3"></label>
						<div class="col-md-3 col-sm-3">
							<button type="submit" class="btn btn-success btn-sm"><?php echo $tombolsimpan;?></button>
                      		<button type="button" onclick="history.go(-1)" class="btn btn-info btn-sm"><?php echo $tombolbatal ; ?></button>
						</div>
					</div>
		        </form>
		    </div>
		</div>
	</div>
</div>
