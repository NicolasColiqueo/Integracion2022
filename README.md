1. Descripción  general del proyecto
Perspectiva del producto.
La problemática principal es de tener un lugar que permita al usuario seleccionar las tablas, campos, crear condiciones y ordenar los
resultados según lo que se estime conveniente, adicionalmente, guardar las consultas para volver a ejecutarlas posteriormente.

Funcionalidad del producto.
Construir un módulo que permita administrar y configurar una base de datos (independiente de su MER) para generar de forma dinámica 
reportes SQL mediante asistentes guiados que faciliten al usuario final la construcción de sus consultas particulares que puedan ser exportados a 
formatos estándar de salida como Excel, PDF o JSON (para APIs). El sistema internamente conocerá cuáles son las tablas, y columnas que estarán 
disponibles para los reportes, permitirá internamente configurar o conocer cómo se realizan los cruces (JOINS) entre los campos seleccionados y 
permitirá establecer criterios para filtros, grupos o campos calculados de acuerdo con lo que el usuario requiera sin mayor conocimiento de 
SQL o la estructura de datos final.

Los objetivos que se van a realizar en este proyecto son los siguientes:

1.1.	Reportes de sueldo por departamento, debido a que existen las finanzas en las cuales son presentadas en una junta, reunión o informe para
 estas ser presentadas y descritas, muchas veces añaden información extensa de esta, por lo cual muchas veces se pasa por alto información precisa,
 la cual a la hora de necesitarla se tiene que releer el informe con los datos, perdiendo un tiempo necesario para el desarrollo de una actividad,
 por lo cual, presentado este problema, se concluyó en la solución de poder visualizar los sueldos necesarios por departamento de una manera
 sencilla y directa ofreciendo los datos precisos. 

1.2.	Reporte horas trabajadas por profesor, debido a que muchos profesores imparten más de un solo ramo se precisan la información sobre 
horas que este haya trabajado, si bien están las horas dictadas por clase o por día, estas tienen que ser calculadas para tener un panorama 
general de estos datos, y es por ello que se concluyó la solución de poder visualizar las horas trabajadas por cada profesor de una manera
sencilla y directa ofreciendo los datos precisos. 
1.3.	Reporte de gastos por carrera, Es unos de los problemas que identificamos debido a que es algo que requiere de mucho tiempo para su
 elaboración, esto debido a que cada facultad tiene diferentes gastos en distintas fechas, distintos motivos y en diferentes cantidades,
  entonces unas de las soluciones que daremos es crear bases de datos las cuales nos devolverán información según los diferentes filtros 
  que se crearán previamente, haciendo más sencillo la recopilación de los datos además de ser más eficientes y precisos para el usuario. 

1.4.	Reportes semestral y anual, si bien los reportes de información sobre cada gestión de una organización se presentan semestral o 
trimestralmente, estos son extensos y variados por cada área de este, por lo cual esta información es bastante abundante y extensa, es por 
ello que por lo general para obtener información siempre requieren cálculos de horas al mes o cálculo de sumas monetarias, entre otros, sumado
 a la búsqueda de los datos en los reportes presentados, lo cual dificulta el trabajo a desarrollar, es por ello por lo que se concluye en la solución
  de generar reportes semestrales y anuales, así agilizando el visualizar estos datos de manera eficiente, con cálculos ya programados, 
  el cual proporciona los datos específicos, en un menor costo de tiempo.

1.5.	Reportes de aprobación y reprobación de un ramo, debido a que cada carrera tiene diferentes ramos en los cuales dentro de estos
 existen diferentes alumnos que rinden distintos ramos y además estos tiene la posibilidad de aprobar o reprobar los ramos, encontramos una
  problemática la cual consiste en que se generar una gran cantidad de datos los cuales son difíciles de organizar para poder dar un reporte de
   forma completa y eficiente por cada carrera y ramo. Una de las soluciones a las que queremos llegar es generar reportes de manera eficiente 
   utilizando diferentes filtros, como el de separar cada alumno por años de ingreso, por carrera, dentro de estos serán separados según la 
   aprobación y reprobación de los ramos.


3. Requisitos de herramientas para el desarrollo

3.1 Laravel (Breve descripción) 
Laravel es un framework de PHP para ayudarnos en un tipo de desarrollo sobre aplicaciones escritas en este lenguaje de programación. 
Esté framework o más bien podría llamarlo compañero de ahora en adelante, nos ayuda en muchas cosas al desarrollar una aplicación,
 por medio de su sistema de paquetes y de ser un framework del tipo MVC (Modelo-Vista-Controlador) da como resultado que podamos “despreocuparnos”
(por así decirlo) en ciertas aspecto del desarrollo, cómo instanciar clases y métodos para usarlos en muchas partes de nuestra aplicación sin la necesidad
de escribirlo y repetirlos muchas veces con lo que eso conlleva a la hora de modificar algo en el código.
Funciona como muchos otros ya, desde la línea de comandos con el famoso Artisan que es el nombre que le dan a esta interfaz por comandos para 
ejecutar muchas funcionalidades como ver todas las rutas de la aplicación disponible, o poner a correr la aplicación o pararla. 


3.2 SQL Server mánager (Breve descripcion) 
SQL Server Management Studio (SSMS para abreviar) es un entorno de desarrollo integrado para administrar cualquier infraestructura SQL.
 Se utiliza para acceder, administrar, configurar y desarrollar todos los componentes de SQL Server y SQL Database. Microsoft lo ha optimizado
a lo largo de los años y es un programa de administración de servidores y bases de datos muy popular.

3.3 SQL2019 SSEI(Breve descripción) 
Microsoft SQL Server es uno de los principales sistemas de gestión de bases de datos relacional del mercado que presta servicio a un amplio
 abanico de aplicaciones de software destinadas a la inteligencia empresarial y análisis sobre entornos corporativos.

Basada en el lenguaje Transact-SQL, incorpora un conjunto de extensiones de programación propias de lenguaje estándar y su aplicación está
 disponible para usarse tanto a nivel on premise o bajo una modalidad cloud.

3.4 Composer(Breve descripcion) 
Composer es un manejador de paquetes para PHP que proporciona un estándar para administrar, descargar e instalar dependencias y librerías.
Similar a NPM en Node.js y Bundler en Ruby, Composer es la solución ideal cuando trabajamos en proyectos complejos que dependen de múltiples
fuentes de instalación. En lugar de tener que descargar cada dependencia de forma manual, Composer hace esto de forma automática por nosotros.

3.5 Php 7(Breve descripcion)
PHP es un lenguaje de programación muy popular utilizado especialmente para la creación de páginas web dinámicas. Es de código abierto y 
distribuido bajo la licencia PHP, lo que hace posible reutilizar o modificar el código fuente sin costes adicionales. La función básica de
 PHP es leer datos de formularios y convertirlos en variables PHP. Posteriormente, las variables pueden, por ejemplo, ser introducidas en una 
 base de datos o enviadas por correo electrónico. Las ventajas de PHP incluyen su integración con el protocolo de Internet y un amplio 
 soporte de diferentes modelos de bases de datos.

3.6 Xampp(Breve descripcion) 
 Xampp es un servidor web local multiplataforma que permite la creación y prueba de páginas web u otros elementos de programación. 
 Sin embargo, Xampp integra una serie de herramientas que potencian y facilitan la experiencia al desarrollador.
Es decir, Xampp en sí mismo no es un programa, sino un paquete de programas o software que contiene herramientas de gestión de base de datos.
Fue desarrollado por Apache Friends y su nombre es un acrónimo de cada una de las principales herramientas que contiene; 
esto nos sirve para hacernos una idea de cuáles son los principales programas que vienen en el paquete.

3.7 Uso de cualquier software para escritura de Código como por ejemplo Visual Studio Code, Sublimetext, Atom, etc.


4. Guía de instalación y configuración de las herramientas.
4.1: Xampp
1.Descargar el programa XAMPP de su sitio web oficial
2.Una vez descargado el paquete, ejecutamos el archivo .exe haciendo doble clic en él.
3.Una vez realizados los pasos, aparece una pantalla de inicio del asistente para instalar XAMPP. Para ajustar las configuraciones de la instalación se hace clic en Next.
4.En la rúbrica “Select components” se pueden excluir de la instalación componentes aislados del paquete de software de XAMPP. Se recomienda la configuración estándar para un servidor de prueba local, con la cual se instalan todos los componentes disponibles. Confirma la selección haciendo clic en Next.
5.En este paso se escoge el directorio donde se instalará el paquete. Si se ha escogido la configuración estándar se creará una carpeta con el nombre XAMPP en C:.
6.El asistente extrae los componentes seleccionados y los guarda en el directorio escogido en un proceso que puede durar algunos minutos
7.Durante el proceso de instalación es frecuente que el asistente avise del bloqueo de Firewall. En la ventana puedes marcar las casillas correspondientes para permitir la comunicación del servidor, Apache en una red privada o en una red de trabajo.
8.Una vez extraídos e instalados todos los componentes puedes cerrar el asistente de instalación.

Luego de completar la instalación debemos configurar unas extensiones de php dentro de Xampp para esto se debe realizar los siguientes pasos.
1.Entrar a la carpeta de XAMPP y buscar la carpeta llamada php.
2. Entramos a la carpeta php y buscamos el archivo php.ini para editarlo.
3. Una vez dentro de php.ini debemos buscar las extensiones en las  Notes for Windows environments y agregar las siguientes extensiones.
   extension=php_pdo_sqlsrv_74_ts_x64.dll      extension=php_sqlsrv_74_ts_x64.dll    guardamos, cerramos y reiniciamos el dispositivo.



4.2 Composer: 
1.Instala PHP en tu computadora. Recomendamos usar XAMPP con este propósito, ya que el proceso es sencillo y puedes completarlo en unos minutos.
2.Una vez que XAMPP esté instalado, descarga la última versión de Composer.
3.Ejecuta el asistente de instalación de Composer. Cuando te solicite que actives el modo desarrollador, ignóralo y continúa con el proceso de instalación.
4.Aparecerá otra ventana y te pedirá que ubiques la línea de comando PHP. Por defecto, está en C:/xampp/php/php.exe. Después de especificar la ubicación, haz clic en Siguiente.
5.Se te solicitará la configuración de proxy. Deja la casilla sin marcar y omite esta parte presionando Siguiente. Luego, en la última ventana, haz clic en Instalar.
6.Después de completar la instalación, abre el símbolo del sistema. Presiona CTRL + R, escribe «cmd» y haz clic en OK.
7.Ingresa el siguiente comando: composer para verificar que la instalación fue correcta.

4.3 Laravel: 
Una vez instalado composer debemos realizar los siguientes pasos para la instalación de Laravel:
1.Descargue el instalador de Laravel usando Composer con el siguiente comando en consola composer global requiere laravel/installer. 
2.Asegúrese de colocar el directorio bin de proveedores de todo el sistema de Composer en $PATHsu sistema para que su sistema pueda ubicar el ejecutable de laravel. 

Otra forma de instalar Laravel es creando un proyecto con composer:
1.Alternativamente, también puede instalar Laravel emitiendo el create-projectcomando Composer en su terminal: composer create-project --prefer-dist laravel/laravel:^7.0 blog
2.Si tiene PHP instalado localmente y le gustaría usar el servidor de desarrollo incorporado de PHP para servir su aplicación, puede usar
 el servecomando Artisan php artisan serve. Este comando iniciará un servidor de desarrollo en http://localhost:8000:

4.4 SQL Server Management Studio SSMS
1. Para descargar SSMS 19 Preview 3, visite Descargar SSMS 19 y descargamos el ejecutable Download SQL Server Management Studio (SSMS) 19 (Preview).
2.Ejecutamos el instalador y escogemos una ruta de instalación.
3. Esperamos a que finalice las descarga y cerremos el instalador.

4.5La configuración del SQL Server Management Studio SSMS

1.Para crear un nuevo usuario con derechos de administrador del sistema, realice los siguientes pasos:
2.En el Explorador de objetos de SQL Server Management Studio, vaya a la carpeta Seguridad y expándala.
3.Haga clic con el botón derecho en la carpeta Inicios de sesión y seleccione Nuevo inicio de sesión. Se abre el cuadro de diálogo Inicio de sesión - Nuevo.
4.Seleccione la página General y luego ingrese un nombre de usuario en el cuadro de texto Nombre de inicio de sesión.
5.Seleccione Autenticación de SQL Server e ingrese una contraseña.
6.Seleccione la base de datos predeterminada de la lista Base de datos predeterminada.
7.Seleccione la página Roles del servidor y luego marque la casilla de verificación sysadmin en la lista de Roles del servidor.
8.Seleccione la página Asignación de usuarios.
9.En la columna Mapa, marque la casilla de verificación de la base de datos a la que puede acceder el nuevo inicio de sesión. De forma predeterminada, el nombre de inicio de sesión aparece en la columna Usuario. Deje este valor.
10.En la lista Membresía de rol de base de datos para, marque la casilla de verificación db_owner.
11.Haga clic en Aceptar.

Una vez echo el login de administrador debemos ejecutar SQL Server Configuration Manager

1.Al ejecutarlo nos aparece una venta con diferentes opciones, pero nosotros escogemos SQL server Network Configuración, una vez seleccionada nos aparece una items llamado Protocolos for SQLEXPRESS le damos doble click y nos mostrara tres opciones y debemos abrir TCP/IP, al abrirlo nos dirigimos a IP Addresses, ubicamos IPAII editamos el TCP Dynamic Ports con la IP 1433 


5.Derechos de autor

Departamento de Ingeniería en Informática
