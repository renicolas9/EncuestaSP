<div class="paso" id="paso-2">
		<div class="paso-descripcion">
			<p><span>2</span>SISTEMAS</p>

		</div>

		<div class="paso-inputs xl">
			<div class="section-input">
				<label class="subtitle"><span>•</span>NOMBRE DEL SISTEMA</label><br>
				<input id="nombreSistema" class="form-control texto" placeholder="Nombre del sistema" maxlength="100" required>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>VERSION DEL SISTEMA</label><br>
				<input class="form-control texto" placeholder="Versión del sistema" maxlength="100">
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>AREAS QUE LO UTILIZAN</label><br>
				<textarea name="" id="0" cols="40" rows="5" class="form-control respuesta" placeholder="Ingrese su respuesta" maxlength="1000" onkeydown="contarCaracteres(this.id,1000)" onkeyup="contarCaracteres(this.id,1000)" onblur="contarCaracteres(this.id,1000)"></textarea>
				<div class="caracteres"><p><small>0 / 1000</small></p></div>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>¿TIENEN CONTROL DEL CODIGO FUENTE?</label><br>
				<select id="control_codigo" class="datalist">
					<?php include('combos/si_no.html'); ?>
				</select> <br>
				<textarea name="" id="1" cols="40" rows="8" class="form-control respuesta input-espaciado" style="display: none;" placeholder="Ingrese su respuesta" maxlength="2500" onkeydown="contarCaracteres(this.id,2500)" onkeyup="contarCaracteres(this.id,2500)" onblur="contarCaracteres(this.id,2500)"></textarea>
				<div class="caracteres"  style="display: none;"><p><small>0 / 2500</small></p></div>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>DESARROLLO PROPIO O DE TERCERO</label><br>
				<select id="tipo_desarrollo" class="datalist">
					<?php include('combos/desarrollo_propio_tercero.html'); ?>
				</select> <br>
				<input id="tipo_desarrollo_tercero" class="form-control texto input-espaciado" placeholder="Nombre del tercero" maxlength="100" style="display: none;">
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>FUNCIONALIDAD/DESCRIPCION</label><br>
				<textarea name="" id="2" cols="40" rows="5" class="form-control respuesta input-espaciado" placeholder="Ingrese su respuesta" maxlength="1000" onkeydown="contarCaracteres(this.id,1000)" onkeyup="contarCaracteres(this.id,1000)" onblur="contarCaracteres(this.id,1000)"></textarea>
				<div class="caracteres"><p><small>0 / 1000</small></p></div>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>LENGUAJE DE PROGRAMACION</label><br>
				<select id="lenguaje_programacion" class="datalist">
					<?php include('combos/lenguajes_programacion.html'); ?>
				</select>
				<input id="lenguaje_programacion_otro" class="form-control texto input-espaciado" placeholder="Nombre" maxlength="100" style="display: none;">
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>VERSIÓN DEL LENGUAJE DE PROGRAMACION</label><br>
				<input class="form-control texto" placeholder="Versión del lenguaje de programación" maxlength="100">
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>MOTOR DE BASE DE DATOS</label><br>
				<select id="motor_bd" class="datalist">
					<?php include('combos/motores_bd.html'); ?>
				</select>
				<input id="motor_bd_otro" class="form-control texto input-espaciado" placeholder="Nombre" maxlength="100" style="display: none;">
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>CANTIDAD ESTIMADA DE USUARIOS DEL SISTEMA</label><br>
				<select class="datalist">
					<?php include('combos/cantidad_estimada_usuarios.html'); ?>
				</select>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>¿POSEE MANUAL DE USUARIO?</label><br>
				<select class="datalist">
					<?php include('combos/si_no.html'); ?>
				</select>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>¿POSEE MANUAL TECNICO?</label><br>
				<select class="datalist">
					<?php include('combos/si_no.html'); ?>
				</select>
			</div>

			<div class="section-input">
				<label class="subtitle"><span>•</span>¿POSEE MANUAL DE INSTALACION?</label><br>
				<select class="datalist">
					<?php include('combos/si_no.html'); ?>
				</select>
			</div>

			<div class="section-input">
				<button id="btn-agg">Agregar sistema</button>
			</div>

			<div class="section-input">
				<label class="subtitle"><small>SISTEMAS CARGADOS:</small></label>
				<div id="sistemas-cargados">
					<small><p>Ninguno.</p></small>
				</div>
				<div id="hidden-sistemas-cargados" hidden>
				</div>
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