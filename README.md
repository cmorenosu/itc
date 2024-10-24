# Guía de Uso de Git y GitHub
## Clase Electiva Técnica de PHP
### Escuela Tecnológica Instituto Técnico Central

![Logo de la Escuela](imagenes_genericas/logo.png)

Este documento proporciona instrucciones sobre cómo instalar Git y GitHub desde la línea de comandos (CMD), cómo usar GitHub en línea sin necesidad de instalar software adicional, y la URL donde se puede ver desplegado todo el contenido.

## 1. Instalación de Git y GitHub desde CMD

Para instalar Git en tu sistema, sigue estos pasos:

### Windows

1. **Descarga Git**:
   - Ve a la [página de descargas de Git](https://git-scm.com/downloads).
   - Selecciona la versión adecuada para tu sistema operativo (Windows).

2. **Instala Git**:
   - Ejecuta el instalador descargado.
   - Sigue las instrucciones del asistente de instalación. Asegúrate de seleccionar "Git from the command line and also from 3rd-party software" cuando se te pregunte sobre la configuración de la PATH.

3. **Verifica la Instalación**:
   - Abre el símbolo del sistema (CMD).
   - Escribe `git --version` y presiona Enter. Deberías ver la versión de Git instalada.

### GitHub

No necesitas instalar GitHub como aplicación. GitHub es una plataforma en línea que puedes usar a través de un navegador web. Sin embargo, para gestionar tus proyectos desde CMD, solo necesitas Git.

## 2. Usar GitHub en Línea Sin Instalar Nada

Puedes usar GitHub directamente desde tu navegador web. Aquí tienes cómo hacerlo:

1. **Crea una Cuenta**:
   - Visita [GitHub](https://github.com).
   - Haz clic en "Sign up" y sigue las instrucciones para crear una cuenta gratuita.

2. **Crear un Repositorio**:
   - Una vez que inicies sesión, haz clic en el botón "+" en la esquina superior derecha y selecciona "New repository".
   - Completa la información requerida y haz clic en "Create repository".

3. **Subir Archivos**:
   - En tu nuevo repositorio, haz clic en "Upload files".
   - Arrastra y suelta tus archivos o haz clic en "choose your files" para seleccionarlos desde tu computadora.

4. **Gestionar el Repositorio**:
   - Puedes crear ramas, realizar pull requests, y más, todo desde la interfaz web de GitHub.

## 3. Ver el Contenido Desplegado

Puedes ver el contenido desplegado en la siguiente URL:

[http://sistemasinformacioncet2.rf.gd](http://sistemasinformacioncet2.rf.gd)
Vista pagina web:

![web](imagenes_genericas/pagina2.jpeg)

### Visualizando Archivos en `index.php`

El archivo `index.php` sirve como punto de entrada para tu aplicación PHP. Para ver los archivos listados en este archivo, asegúrate de seguir estos pasos:

1. **Estructura de Carpetas**:
   - Asegúrate de que tu `index.php` esté en el directorio raíz de tu proyecto y que contenga código para listar otros archivos o directorios.

2. **Código Ejemplo en `index.php`**:
   ```php
   <?php
   $dir = '.';
   $files = scandir($dir);
   echo "<h1>Archivos en el directorio</h1>";
   echo "<ul>";
   foreach ($files as $file) {
       if ($file !== '.' && $file !== '..') {
           echo "<li>$file</li>";
       }
   }
   echo "</ul>";
   ?>
