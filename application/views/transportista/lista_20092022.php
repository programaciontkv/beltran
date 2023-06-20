<section class="content-header">
	<form id="exp_excel" style="float:right;padding:0px;margin: 0px;" method="post" action="<?php echo base_url();?>transportista/excel/<?php echo $permisos->opc_id?>" onsubmit="return exportar_excel()"  >
        	<input type="submit" value="EXCEL" class="btn btn-success" />
        	<input type="hidden" id="datatodisplay" name="datatodisplay">
       	</form>
      <h1>
        Transportistas
      </h1>
</section>
<section class="content">
	<div class="box box-solid">
		<div class="box box-body">
			
			<div class="row">
				<div class="col-md-12">
					<?php 
					if($permisos->rop_insertar){
					?>
						<a href="<?php echo base_url();?>transportista/nuevo" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Nuevo</a>
					<?php 
					}
					?>
				</div>	
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<table id="tbl_list" class="table table-bordered table-list table-hover">
						<thead>
							<th>No</th>
							<th>Cedula/RUC</th>
							<th>Nombre</th>
							<th>Placa</th>
							<th>Direccion</th>
							<th>Telefono</th>
							<th>Estado</th>
							<th>Acciones</th>
						</thead>
						<tbody>
						<?php 
						$n=0;
						if(!empty($transportistas)){
							foreach ($transportistas as $transportista) {
								$n++;
						?>
							<tr>
								<td><?php echo $n?></td>
								<td style="mso-number-format:'@'"><?php echo $transportista->tra_identificacion?></td>
								<td><?php echo $transportista->tra_razon_social?></td>
								<td style="mso-number-format:'@'"><?php echo $transportista->tra_placa?></td>
								<td><?php echo $transportista->tra_direccion?></td>
								<td><?php echo $transportista->tra_telefono?></td>
								<td><?php echo $transportista->est_descripcion?></td>
								<td align="center">
									<div class="btn-group">
										<?php 
										if($permisos->rop_reporte){
										?>
											<button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo base_url();?>transportista/visualizar/<?php echo $transportista->tra_id?>"><span class="fa fa-eye"></span>
								            </button>
							            <?php
							        	}
										if($permisos->rop_actualizar){
										?>
											<a href="<?php echo base_url();?>transportista/editar/<?php echo $transportista->tra_id?>" class="btn btn-primary"> <span class="fa fa-edit"></span></a>
										<?php 
										}
										
										?>
									</div>
								</td>
							</tr>
						<?php
							}
						}
						?>
						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</div>


</section>

<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Transportista</h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
</div>