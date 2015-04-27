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
			<div id = "x">
				<a href = " vistaCompletaFoto.html"><img  id = "imagen" src = "img/estatuillasEgipcias.png"></img>	</a>						
			</div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" > <a href = "vistaCompletaFoto.html"> ESTATUILLAS </a> </div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
				<div id = "descripcion"> Estatuillas de Montu, Señor de Medamud, de la Diosa Uadyet de Buto,  y de Horus con cabeza de halcón.</div>
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
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/PC0XkjPCZG4" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" > <a href = "vistaCompletaVideo.html"> RISA CONTAGIOSA </a>  </div>
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
			<div id = "x"><a href = " vistaCompletaFoto.html"><img id = "imagen" src = "img/montaña.png"></img></a> </div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" ><a href = "vistaCompletaFoto.html"> MONTAÑA </a></div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
			
				<div id = "descripcion"> Esta es la foto de una montaña nevada, de los Alpes</div>
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
			<div id = "x"><iframe id = "imagen" type="text/html" src="http://www.youtube.com/embed/itGUx8dHDcg" frameborder="0"></iframe> </div>
			<div id = "informacion">
				<div id = "superior">
				<div id = "titulo" > <a href = " vistaCompletaVideo.html">Pablo Iglesias - JOAQUÍN REYES </a> </div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
					</div>
				</div>
			
				<div id = "descripcion"> Joaquín Reyes encarna al líder de Podemos Pablo Iglesias al que últimamente 
					se le pude ver en casi todas las cadenas de televisión. “Una jornada en la vida de Pablo Iglesias es tele, 
					tele, mitin, mitin, tele, mitin, comprar camisas para salir en la tele, mitin, mitin, tele”, explica el eurodiputado. 
					El ‘faro del proletariado’ se dirige a sus seguidores: “Os gusta Podemos, ¿eh? Normal, si somos la polla con cebolla”, 
					comenta antes de recordar cómo comenzó todo… en la Puerta del Sol, un 15-M. “Montamos el partido y gustamos a todos. 
					Ahora me arrepiento de haber llamado al partido Podemos, le tenía que haber puesto Petemos”, asegura.</div>
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
			<div id = "x"><a href = "vistaCompletaVideo.html"><img id = "imagen" src = "img/instatube.png"></img> </a></div>
			<div id = "informacion">
				<div id = "superior">
					<div id = "titulo" > <a href = " vistaCompletaVideo.html">ESTATUILLAS </a></div>
					<div id = "calificacion" > 
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaA.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
						<div id = "estrella"><img id = "logo_estrella" src = "img/estrellaN.png"></img> </div>
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
</div>