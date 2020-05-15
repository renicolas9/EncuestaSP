<div class="paso" id="paso-1">
		<div class="paso-descripcion">
			<p><span>1</span>INFORMACIÓN DEL ORGANISMO</p>

		</div>

		<div class="paso-inputs">
			<div class="section-input">
				<label class="subtitle"><span>•</span>ORGANISMO INFORMANTE</label><br>
				<select id="organismo_informante" class="datalist">
					<?php include('combos/organismo_informante.html'); ?>
				</select> <br>
				<input id="organismo_informante_otro" class="form-control texto input-espaciado" placeholder="Organismo informante" maxlength="255" style="display: none;">
			</div>
 

			<div class="section-input">
				<label class="subtitle"><span>•</span>ÁREA RESPONSABLE</label><br>
				<input class="form-control texto" placeholder="Area responsable" maxlength="100" required>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>AUTORIDAD RESPONSABLE</label><br>
				<input class="form-control texto" placeholder="Autoridad responsable" maxlength="100" required>
			</div>

			
		</div>

		<div class="section-input-boton">
			<div class="abs">
				<div>
				<img src="img/flechas.png">
				<button class="btn-sig">Continuar</button>
				</div>
			</div>
		</div>
	</div>		