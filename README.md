# ⌨️ KBEVI - Catálogo de Teclados Custom

<p align="left">
  <img src="https://img.shields.io/badge/-PHP-777BB4?style=flat&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/-HTML5-E34F26?style=flat&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/-CSS3-1572B6?style=flat&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/-MySQL-4479A1?style=flat&logo=mysql&logoColor=white" />
</p>

> 🌱 **Nota de progreso:** Este proyecto representa mi **primer desarrollo web funcional**. Fue creado desde cero durante mi periodo de prácticas como desarrollador en la empresa **EVIROM**. Es un CRUD sencillo desarrollado sin frameworks complejos, pero le tengo un cariño especial porque marca el punto de partida de mi carrera y mi primera toma de contacto real con el código en un entorno empresarial.

**KBEVI** es un catálogo web diseñado para administrar productos y componentes del ecosistema de los teclados mecánicos personalizados (*custom keyboards*).

---

## 🚀 Características Principales

- ⚙️ **Operaciones CRUD:** Gestión completa del inventario (Crear, Leer, Actualizar y Eliminar productos).
- 🛡️ **Panel de Administración:** Interfaz de gestión privada y accesible de forma independiente (`/admin/index.php`).
- 🗄️ **Base de Datos Relacional:** Estructura MySQL predefinida e incluida en el proyecto (`kbevi.sql`).
- 📱 **Diseño Responsive:** Interfaz adaptable a diferentes tamaños de pantalla estructurada con HTML y CSS.

---

## 🛠️ Tecnologías Utilizadas

| Capa | Tecnologías |
| :--- | :--- |
| **Frontend** | HTML5, CSS3 |
| **Backend** | PHP |
| **Base de Datos** | MySQL |

---

## 📦 Instalación y Despliegue Local

Si deseas probar el proyecto en tu propio equipo, sigue estos pasos:

**1. Clonar el repositorio:**
```bash
git clone https://github.com/SLOPTRI/KBEVI.git
```

**2. Configurar el entorno del servidor:**
Asegúrate de tener un entorno de servidor web local en funcionamiento (como **XAMPP**, **MAMP** o **LAMP**) que soporte PHP y MySQL. Coloca los archivos clonados en el directorio raíz público de tu servidor (por ejemplo, la carpeta `htdocs` en XAMPP o `www` en WAMP).

**3. Configurar la Base de Datos:**
Abre tu gestor de base de datos (por ejemplo, phpMyAdmin) e importa el archivo SQL incluido en la raíz del proyecto para generar la base de datos y sus tablas automáticamente:
```text
Importar el archivo: kbevi.sql
```

**4. Acceder a la aplicación:**
Abre tu navegador web y navega a las siguientes rutas *(Nota: asegúrate de que el nombre de la carpeta coincida y ajusta el puerto si no usas el 80)*:
- 🛒 **Catálogo principal:** `http://localhost/KBEVI/index.php`
- ⚙️ **Panel de administración:** `http://localhost/KBEVI/admin/index.php`

---
*Desarrollado por Salvador López Trigueros.*
