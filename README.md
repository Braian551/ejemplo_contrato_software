# 📄 Plantilla de Contrato de Desarrollo de Software E-commerce

## 📋 Descripción del Proyecto

Este proyecto es una **plantilla completa** para generar contratos de desarrollo de software especializados en comercio electrónico (E-commerce). La plantilla está diseñada específicamente para el proyecto "Angelow" - una plataforma de ropa infantil, pero puede ser fácilmente adaptada para otros proyectos de desarrollo de software.

## 🎯 Características Principales

### ✨ Funcionalidades
- **Generación de PDF**: Exportación del contrato a formato PDF optimizado para impresión
- **Generación de Word**: Creación de documentos .docx con formato profesional
- **Diseño Responsivo**: Interfaz adaptable a diferentes dispositivos
- **Plantilla Personalizable**: Fácil modificación de datos del cliente y proyecto

### 🛠️ Tecnologías Utilizadas
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 8.0+
- **Librerías**:
  - `html2pdf.js` - Generación de PDFs desde HTML
  - `PhpOffice/PhpWord` - Generación de documentos Word
  - `mPDF` - Procesamiento de PDFs

## 📁 Estructura del Proyecto

```
ejemplo_contrato_software/
├── index.php              # Página principal con el contrato
├── generate-word.php      # Script para generar documento Word
├── style.css             # Estilos CSS del contrato
├── images/               # Imágenes del proyecto (logo, etc.)
├── temp/                 # Archivos temporales
├── vendor/               # Dependencias de Composer
├── composer.json         # Configuración de dependencias
└── README.md            # Este archivo
```

## 🚀 Instalación y Configuración

### Requisitos Previos
- PHP 8.0 o superior
- Composer
- Servidor web (Apache/Nginx)

### Pasos de Instalación

1. **Clonar o descargar el proyecto**
   ```bash
   git clone [url-del-repositorio]
   cd ejemplo_contrato_software
   ```

2. **Instalar dependencias**
   ```bash
   composer install
   ```

3. **Configurar el servidor web**
   - Apuntar el DocumentRoot a la carpeta del proyecto
   - Asegurar que PHP esté habilitado

4. **Acceder a la aplicación**
   - Abrir `http://localhost/ejemplo_contrato_software` en el navegador

## 📝 Cómo Usar la Plantilla

### 1. Personalización Básica
Para adaptar la plantilla a tu proyecto:

1. **Editar `index.php`**:
   - Cambiar datos del cliente (líneas 47-52)
   - Modificar información del equipo desarrollador (líneas 38-44)
   - Actualizar especificaciones técnicas según tu proyecto
   - Ajustar cronograma y entregables

2. **Personalizar estilos**:
   - Modificar `style.css` para cambiar colores, fuentes, etc.
   - Actualizar logo en la carpeta `images/`

### 2. Generación de Documentos

#### PDF
- Hacer clic en "Descargar Contrato en PDF"
- El documento se generará automáticamente con formato optimizado

#### Word
- Hacer clic en "Descargar Contrato en Word"
- Se descargará un archivo .docx editable

## 📋 Secciones del Contrato

La plantilla incluye las siguientes secciones profesionales:

1. **Partes Contratantes** - Información del cliente y desarrollador
2. **Objeto del Contrato** - Descripción del proyecto
3. **Alcance del Proyecto** - Módulos y funcionalidades detalladas
4. **Especificaciones Técnicas** - Stack tecnológico y estándares
5. **Licenciamiento y Propiedad** - Términos de uso del software
6. **Entregables Principales** - Documentos y entregas
7. **Cronograma de Entregas** - Fases del proyecto con fechas
8. **Términos de Garantía** - Período de soporte y garantías
9. **Área de Firmas** - Espacios para firmas de ambas partes

## 🎨 Personalización Avanzada

### Modificar Datos del Proyecto
```php
// En index.php, líneas 47-52
$clienteCell->addText('Tu Empresa S.A.S', ['bold' => true, 'size' => 11, 'name' => 'Arial']);
$clienteCell->addText('NIT: 900.123.456-7', 'normalStyle');
$clienteCell->addText('Dirección: Tu Dirección', 'normalStyle');
$clienteCell->addText('Teléfono: +57 300 000 0000', 'normalStyle');
$clienteCell->addText('Email: tu@email.com', 'normalStyle');
```

### Cambiar Especificaciones Técnicas
```php
// En generate-word.php, líneas 203-209
$especificaciones = [
    ['Frontend', 'React, TypeScript', '18.0+', 'W3C'],
    ['Backend', 'Node.js', '18.0+', 'REST API'],
    ['Base de datos', 'PostgreSQL', '14.0+', 'Normalización 3NF'],
    // ... más especificaciones
];
```

## 🔧 Configuración Técnica

### Dependencias de Composer
```json
{
    "require": {
        "mpdf/mpdf": "^8.2",
        "phpoffice/phpword": "^0.18.0"
    }
}
```

### Configuración de PDF
- Formato: A4
- Orientación: Vertical
- Márgenes: 10mm
- Calidad de imagen: 98%

## 📱 Responsive Design

La plantilla está optimizada para:
- **Desktop**: Formato completo con dos columnas
- **Tablet**: Adaptación de tablas y espaciado
- **Mobile**: Diseño de una columna con navegación optimizada

## 🎯 Casos de Uso

Esta plantilla es ideal para:
- **Desarrolladores freelance** que necesitan contratos profesionales
- **Agencias de desarrollo** que trabajan con múltiples clientes
- **Equipos de desarrollo** en instituciones educativas
- **Consultores de software** que requieren documentación formal

## 📄 Licencia

Este proyecto está bajo licencia MIT. Puedes:
- ✅ Usar comercialmente
- ✅ Modificar y distribuir
- ✅ Usar en proyectos privados
- ✅ Incluir en software propietario

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para contribuir:

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📞 Soporte

Si tienes preguntas o necesitas ayuda:

- 📧 Email: [tu-email@ejemplo.com]
- 🐛 Issues: [Crear un issue en GitHub]
- 📖 Documentación: [Enlace a documentación adicional]

## 🔄 Changelog

### v1.0.0 (2024)
- ✨ Versión inicial de la plantilla
- 📄 Generación de PDF y Word
- 🎨 Diseño responsive
- 📋 Secciones completas del contrato

---

**Nota**: Esta es una plantilla de ejemplo. Asegúrate de revisar y adaptar todos los términos legales según las leyes de tu jurisdicción antes de usar en proyectos reales.
