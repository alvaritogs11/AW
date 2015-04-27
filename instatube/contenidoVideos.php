<!DOCTYPE html>
<div id="contenedor">
	<div id="main">
		<div id = "espacio"></div>
		<div id = "seleccionar">
			<select id = "ordenarPor">
				<option value = "Por fecha" selected = "selected">Por fecha</option>
				<option value = "Por valoracion">Por valoración</option>		
			</select>
	</div>
	<div id = "contenido"> 			
		<div id = "elemento" > 
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/PC0XkjPCZG4" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" >  RISA CONTAGIOSA  </div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
				<div id = "descripcion"></div>
				<div id = "inferior">
					<div id = "info_elemento">
						<div id = "numvisitas">  Nº visitas: 1111111 </div>
						<div id = "subidopor">  Subido por: adfasdfasd </div>
					</div>
					<div  id = "tags"> 
						<?php if (!$_SESSION ['isAdmin']){
							echo '<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña"></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>';
						}
						else 
							echo '<a href = "indexAdmin.html"><input id = "borrar" type = "button" value = "Borrar contenido"></input></a>';
						?>
					</div>	
				</div>
			</div>
		</div>		
		
		<div id = "elemento" > 
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/XGSy3_Czz8k" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" > Ruth Lorenzo </div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
				<div id = "descripcion"> Ruth Lorenzo Knocking On Heavens Door X Factor 08 11 2008 (Safe and Through to the next Round!)</div>
				<div id = "inferior">
					<div id = "info_elemento">
						<div id = "numvisitas"> Nº visitas: 1111111 </div>
						<div id = "subidopor">  Subido por: adfasdfasd </div>
					</div>
					<div  id = "tags"> 
						<?php if (!$_SESSION ['isAdmin']){
							echo '<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña"></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>';
						}
						else 
							echo '<a href = "indexAdmin.html"><input id = "borrar" type = "button" value = "Borrar contenido"></input></a>';
						?>						
					</div>	
				</div>
			</div>
		</div>
	
		<div id = "elemento" > 
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/PC0XkjPCZG4" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" > MONTAÑA </div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
			
				<div id = "descripcion"> Ruth Lorenzo Knocking On Heavens Door X Factor 08 11 2008 (Safe and Through to the next Round!)</div>
				<div id = "inferior">
					<div id = "info_elemento">
						<div id = "numvisitas">  Nº visitas: 1111111  </div>
						<div id = "subidopor">  Subido por: adfasdfasd </div>
					</div>
					<div  id = "tags"> 
						<?php if (!$_SESSION ['isAdmin']){
							echo '<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña"></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>';
						}
						else 
							echo '<a href = "indexAdmin.html"><input id = "borrar" type = "button" value = "Borrar contenido"></input></a>';
						?>					
					</div>	
				</div>
			</div>
		</div>
		
		<div id = "elemento" > 
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/PC0XkjPCZG4" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
				<div id = "titulo" > OLA </div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
			
				<div id = "descripcion"> "Agua y aire, los dos elementos esenciales de los que depende toda vida, 
				se han convertido en dos contenedores globales de basura", Jacques-Yves Cousteau. 
				La fotografía, tomada en Java (Indonesia), la isla más poblada del mundo, muestra al surfista indonesio Dede Surinaya 
				tomando una ola que arrastra una gran cantidad de basura. El libro Overdevelopment, Overpopulation, Overshoot
				recoge instantáneas como esta para mostrar las "tragedias sociales y ecológicas" que generan el crecimiento de la 
				población mundial y el consumo. Las imágenes aparecen acompañadas de citas de científicos, escritores o ecologistas, 
				que aquí se reproducen, pues según explican sus autores, la imagen y el texto crean una "sinergia" que ayuda a comprender 
				ese impacto en el medio ambiente que la publicación pretende denunciar.</div>
				<div id = "inferior">
					<div id = "info_elemento">
						<div id = "numvisitas">  Nº visitas: 1111111  </div>
						<div id = "subidopor"> Subido por: adfasdfasd </div>
					</div>
					<div  id = "tags"> 
						<?php if (!$_SESSION ['isAdmin']){
							echo '<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña"></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>';
						}
						else 
							echo '<a href = "indexAdmin.html"><input id = "borrar" type = "button" value = "Borrar contenido"></input></a>';
						?>					
					</div>	
				</div>
			</div>
		</div>		


		<div id = "elemento" > 
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/PC0XkjPCZG4" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" > ESTATUILLAS</div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
				<div id = "descripcion"> Los escenarios donde se rueda Juego de tronos atraen cada vez a más curiosos. El Real Alcázar de Sevilla es el reino de Dorne en la quinta temporada.</div>
				<div id = "inferior">
					<div id = "info_elemento">
						<div id = "numvisitas">  Nº visitas: 1111111  </div>
						<div id = "subidopor"> Subido por: adfasdfasd </div>
					</div>
					<div  id = "tags"> 
						<?php if (!$_SESSION ['isAdmin']){
							echo '<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña"></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag"  type = "button" value = "montaña" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>
							<a href = "indexLogin.html"><input id = "tag" type = "button" value = "paisaje" ></input></a>';
						}
						else 
							echo '<a href = "indexAdmin.html"><input id = "borrar" type = "button" value = "Borrar contenido"></input></a>';
						?>					
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>'
