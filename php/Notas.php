<div id="Notas">
	<fieldset>
		<legend>Notas</legend>
		
		<div class="notas">
			<h3>Primer Trimestre</h3>
			
			<label for="PnotaUno">Primera nota</label>
			<br>
			<input type="text" name="PnotaUno">
			<br>
			
			<label for="PnotaDos">Segunda nota</label>
			<br>
			<input type="text" name="PnotaDos">
			<br>

			<label for="PnotaTres">Tercera nota</label>
			<br>
			<input type="text" name="PnotaTres">
		</div>
		
		<div class="notas">
			<h3>Segundo Trimestre</h3>

			<label for="SnotaUno">Primera nota</label>
			<br>
			<input type="text" name="SnotaUno">
			<br>

			<label for="SnotaDos">Segunda nota</label>
			<br>
			<input type="text" name="SnotaDos">
			<br>

			<label for="SnotaTres">Tercera nota</label>
			<br>
			<input type="text" name="SnotaTres">
			<br>
		</div>
		
		<div class="notas">
			<h3>Tercera Trimestre</h3>

			<label for="TnotaUno">Primera nota</label>
			<br>
			<input type="text" name="TnotaUno">
			<br>

			<label for="TnotaDos">Segunda nota</label>
			<br>
			<input type="text" name="TnotaDos">
			<br>

			<label for="TnotaTres">Tercera nota</label>
			<br>
			<input type="text" name="TnotaTres">
			<br>
		</div>
		<div style="clear: both;"></div>
		<br>
	</fieldset>
	
</div>

			txtID.setEnabled(true);
            txtnombre.setEnabled(true);
            txtapellido.setEnabled(true);
            txtnacimiento.setEnabled(true);
            txtdireccion.setEnabled(true);
            txttelefono.setEnabled(true);
            txtcorreo.setEnabled(true);
            cbcategoria.setEnabled(true);
            txtlimitecre.setEnabled(true);
            txtbalance.setEnabled(true);
            btnguardar.setEnabled(true);

	            txtnombre.setText(B.readLine());
	        txtapellido.setText(B.readLine());
	        txtnacimiento.setText(B.readLine());
	        txtdireccion.setText(B.readLine());
	        txttelefono.setText(B.readLine());
	        txtcorreo.setText(B.readLine());
	        cbcategoria.setSelectedIndex(0);
	        txtlimitecre.setText(B.readLine());
	        txtbalance.setText(B.readLine());