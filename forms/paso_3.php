<div class="paso" id="paso-3">
		<div class="paso-descripcion">
			<p><span>3</span>REQUERIMIENTOS DE SOFTWARE</p>

		</div>

		<div class="paso-inputs xl">

			<div class="section-input">
				<label class="subtitle"><span>•</span>¿EXISTE LA NECESIDAD DE ALGÚN NUEVO SOFTWARE?</label><br><br>
				<select id="nuevo_software" class="datalist">
					<?php include('combos/si_no.html'); ?>
				</select><br>
				<textarea name="" id="3" style="display: none;" cols="40" rows="8" class="form-control respuesta input-espaciado" placeholder="¿Cuál?" maxlength="2500" onkeydown="contarCaracteres(this.id,2500)" onkeyup="contarCaracteres(this.id,2500)" onblur="contarCaracteres(this.id,2500)"></textarea>
				<div class="caracteres"  style="display: none;"><p><small>0 / 2500</small></p></div>
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