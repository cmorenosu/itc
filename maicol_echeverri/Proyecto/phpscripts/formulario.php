1 <? php
2 // Usuarios a insertar
3 $usuarios = [
4 [’nombre ’ = > ’Juan Perez ’, ’email ’ = > ’ juan@example .com ’] ,
5 [’nombre ’ = > ’Maria Lopez ’, ’email ’ = > ’ maria@example .com ’
] ,
6 [’nombre ’ = > ’Carlos Gomez ’, ’email ’ = > ’ carlos@example .com
’] ,
7 [’nombre ’ = > ’Ana Martinez ’, ’email ’ = > ’ana@example .com ’] ,
8 [’nombre ’ = > ’Pedro Sanchez ’, ’email ’ = > ’ pedro@example .com
’]
9 ];
10
11 // Insertar usuarios
12 foreach ( $usuarios as $usuario ) {
13 $nombre = $usuario [’nombre ’];
14 $email = $usuario [’email ’];
3
15
16 $sql = " INSERT INTO usuario (nombre , email ) VALUES ( ’
$nombre ’, ’$email ’)";
17
18 if ($conn - > query ( $sql ) === TRUE ) {
19 echo " Usuario $nombre registrado exitosamente . <br >";
20 } else {
21 echo " Error : " . $sql . "<br >" . $conn - > error ;
22 }
23 }
24
25 // Cerrar la c o n e x i n
26 $conn - > close () ;
27 ? >