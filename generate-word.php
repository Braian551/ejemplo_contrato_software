<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\Style\Font;
use PhpOffice\PhpWord\Style\Table;
use PhpOffice\PhpWord\Style\Cell;
use PhpOffice\PhpWord\Style\Section;
use PhpOffice\PhpWord\SimpleType\Jc;
use PhpOffice\PhpWord\SimpleType\TblWidth;

// Crear nuevo documento Word
$phpWord = new PhpWord();

// Configurar página con márgenes similares al CSS
$sectionStyle = [
    'marginLeft' => 850,    // ~30px en twips
    'marginRight' => 850,
    'marginTop' => 850,
    'marginBottom' => 850,
    'pageSizeW' => 11906,   // A4 width en twips
    'pageSizeH' => 16838    // A4 height en twips
];
$section = $phpWord->addSection($sectionStyle);

// Definir estilos personalizados mejorados
$phpWord->addFontStyle('headerStyle', ['bold' => true, 'size' => 16, 'color' => '4A89DC', 'name' => 'Arial']);
$phpWord->addFontStyle('titleStyle', ['bold' => true, 'size' => 18, 'color' => '4A89DC', 'name' => 'Arial']);
$phpWord->addFontStyle('sectionTitleStyle', ['bold' => true, 'size' => 14, 'color' => 'FFFFFF', 'name' => 'Arial']);
$phpWord->addFontStyle('columnTitleStyle', ['bold' => true, 'size' => 12, 'color' => '4A89DC', 'name' => 'Arial']);
$phpWord->addFontStyle('normalStyle', ['size' => 11, 'name' => 'Arial']);
$phpWord->addFontStyle('smallStyle', ['size' => 10, 'name' => 'Arial']);
$phpWord->addFontStyle('tableHeaderStyle', ['bold' => true, 'size' => 11, 'color' => 'FFFFFF', 'name' => 'Arial']);
$phpWord->addFontStyle('tableCellStyle', ['size' => 10, 'name' => 'Arial']);
$phpWord->addFontStyle('clauseTitleStyle', ['bold' => true, 'size' => 12, 'color' => '4A89DC', 'name' => 'Arial']);

// Estilo de párrafo centrado
$phpWord->addParagraphStyle('centerParagraph', ['alignment' => Jc::CENTER, 'spaceAfter' => 200]);
$phpWord->addParagraphStyle('justifyParagraph', ['alignment' => Jc::BOTH, 'spaceAfter' => 200]);
$phpWord->addParagraphStyle('rightParagraph', ['alignment' => Jc::END]);

// ENCABEZADO CON LOGO Y INFORMACIÓN DE LA EMPRESA
$headerTable = $section->addTable([
    'borderSize' => 0,
    'cellMargin' => 80,
    'alignment' => Jc::CENTER,
    'width' => 100 * 50, // 100% del ancho
    'unit' => TblWidth::PERCENT
]);
$headerTable->addRow(1000); // Altura fija para el encabezado

// Celda del logo y nombre Angelow
$logoCell = $headerTable->addCell(3500, ['borderSize' => 0, 'valign' => 'center']);
// Intentar agregar logo si existe
if (file_exists(__DIR__ . '/images/logo2.png')) {
    try {
        $logoCell->addImage(__DIR__ . '/images/logo2.png', [
            'width' => 50,
            'height' => 50,
            'alignment' => Jc::LEFT
        ]);
    } catch (Exception $e) {
        // Si falla la imagen, solo mostrar texto
        $logoCell->addText('🏢', ['size' => 20, 'color' => '4A89DC']);
    }
} else {
    $logoCell->addText('🏢', ['size' => 20, 'color' => '4A89DC']);
}
$logoCell->addText('Angelow', 'headerStyle');

// Celda de información de la empresa
$companyCell = $headerTable->addCell(6500, ['borderSize' => 0, 'valign' => 'center']);
$companyCell->addText('Centro Textil y de Gestión Industrial - SENA', 'normalStyle', 'rightParagraph');
$companyCell->addText('NIT: 800.123.456-7 | Medellín, Colombia', 'smallStyle', 'rightParagraph');
$companyCell->addText('Ficha: 3147208 - Programa ADSO', 'smallStyle', 'rightParagraph');

// Línea divisoria
$section->addTextBreak(1);
$section->addLine([
    'weight' => 3,
    'width' => 450, // Ancho de línea
    'height' => 0,
    'color' => '4A89DC'
]);
$section->addTextBreak(1);

// TÍTULO DEL CONTRATO
$section->addText('CONTRATO DE DESARROLLO DE SOFTWARE E-COMMERCE - ANGELOW', 'titleStyle', 'centerParagraph');
$section->addTextBreak(1);

// PARTES CONTRATANTES
$section->addText('PARTES CONTRATANTES', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$partesTable = $section->addTable([
    'borderSize' => 0,
    'cellMargin' => 100,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);
$partesTable->addRow();

// Columna Prestador
$prestadorCell = $partesTable->addCell(5000, ['borderSize' => 0, 'bgColor' => 'F8F9FA']);
$prestadorCell->addText('PRESTADOR DEL SERVICIO', 'columnTitleStyle');
$prestadorCell->addTextBreak();
$prestadorCell->addText('Equipo de Desarrollo Angelow', ['bold' => true, 'size' => 11, 'name' => 'Arial']);
$prestadorCell->addText('Ficha: 3147208 - Análisis y Desarrollo de Software', 'normalStyle');
$prestadorCell->addText('Centro Textil y de Gestión Industrial - SENA', 'normalStyle');
$prestadorCell->addText('Instructores: Edilfredo Pineda, Héctor Maya', 'normalStyle');
$prestadorCell->addText('Aprendices: Braian Oquendo, Sara Hernández, Julián Cárdenas, Sofía Guisao', 'normalStyle');

// Columna Cliente
$clienteCell = $partesTable->addCell(5000, ['borderSize' => 0, 'bgColor' => 'F8F9FA']);
$clienteCell->addText('CLIENTE', 'columnTitleStyle');
$clienteCell->addTextBreak();
$clienteCell->addText('Angelow Ropa Infantil', ['bold' => true, 'size' => 11, 'name' => 'Arial']);
$clienteCell->addText('NIT: 900.123.456-7', 'normalStyle');
$clienteCell->addText('Dirección: Calle 120 # 49 B 24, Medellín', 'normalStyle');
$clienteCell->addText('Teléfono: +57 313 595 1664', 'normalStyle');
$clienteCell->addText('Email: anelhiguita@hotmail.com', 'normalStyle');

$section->addTextBreak(2);

// OBJETO DEL CONTRATO
$section->addText('OBJETO DEL CONTRATO', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$objetoText = "El presente contrato tiene por objeto establecer los términos y condiciones bajo los cuales el Equipo de Desarrollo Angelow desarrollará una plataforma de comercio electrónico (E-commerce) especializada en ropa infantil para Angelow Ropa Infantil, de acuerdo con las especificaciones técnicas detalladas en los anexos de este documento y los requerimientos funcionales establecidos.";
$section->addText($objetoText, 'normalStyle', 'justifyParagraph');

// ALCANCE DEL PROYECTO
$section->addText('ALCANCE DEL PROYECTO', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$alcanceTable = $section->addTable([
    'borderSize' => 6,
    'borderColor' => 'CCCCCC',
    'cellMargin' => 80,
    'alignment' => Jc::CENTER,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);

// Encabezado de la tabla
$alcanceTable->addRow(600);
$alcanceTable->addCell(2000, ['bgColor' => '4A89DC'])->addText('Módulo', 'tableHeaderStyle');
$alcanceTable->addCell(3500, ['bgColor' => '4A89DC'])->addText('Descripción', 'tableHeaderStyle');
$alcanceTable->addCell(2500, ['bgColor' => '4A89DC'])->addText('Entregables', 'tableHeaderStyle');
$alcanceTable->addCell(1500, ['bgColor' => '4A89DC'])->addText('Plazo', 'tableHeaderStyle');

// Datos de la tabla
$modulos = [
    ['Gestión de Usuarios', 'Registro, autenticación y perfiles de usuario con roles diferenciados', 'Sistema completo con OAuth Google', '30 días'],
    ['Catálogo de Productos', 'Gestión de productos con variantes (talla/color) y categorización', 'Backoffice y frontend con filtros avanzados', '45 días'],
    ['Carrito y Checkout', 'Sistema de carrito persistente y proceso de compra', 'Flujo completo con cálculo de envíos', '40 días'],
    ['Sistema de Pagos', 'Integración con transferencia bancaria y pago contra entrega', 'Pasarelas funcionales con validación', '35 días'],
    ['Panel Administrativo', 'Gestión completa de productos, pedidos, inventario y reportes', 'Dashboard con métricas y controles', '60 días']
];

foreach ($modulos as $modulo) {
    $alcanceTable->addRow();
    $alcanceTable->addCell(2000, ['bgColor' => 'F8F9FA'])->addText($modulo[0], 'tableCellStyle');
    $alcanceTable->addCell(3500)->addText($modulo[1], 'tableCellStyle');
    $alcanceTable->addCell(2500, ['bgColor' => 'F8F9FA'])->addText($modulo[2], 'tableCellStyle');
    $alcanceTable->addCell(1500)->addText($modulo[3], 'tableCellStyle');
}

$section->addTextBreak(2);

// ESPECIFICACIONES TÉCNICAS
$section->addText('ESPECIFICACIONES TÉCNICAS', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$especTable = $section->addTable([
    'borderSize' => 6,
    'borderColor' => 'CCCCCC',
    'cellMargin' => 80,
    'alignment' => Jc::CENTER,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);

$especTable->addRow(600);
$especTable->addCell(2000, ['bgColor' => '4A89DC'])->addText('Componente', 'tableHeaderStyle');
$especTable->addCell(2500, ['bgColor' => '4A89DC'])->addText('Tecnología', 'tableHeaderStyle');
$especTable->addCell(1500, ['bgColor' => '4A89DC'])->addText('Versión', 'tableHeaderStyle');
$especTable->addCell(1500, ['bgColor' => '4A89DC'])->addText('Estándar', 'tableHeaderStyle');

$especificaciones = [
    ['Frontend', 'HTML5, CSS3, JavaScript', 'ES6+', 'W3C'],
    ['Backend', 'PHP', '8.0+', 'PSR Standards'],
    ['Base de datos', 'MySQL', '8.0+', 'Normalización 3NF'],
    ['Seguridad', 'SSL, password_hash', 'TLS 1.3', 'OWASP Top 10'],
    ['Facturación', 'API DIAN', 'Última versión', 'Resolución 192/2020']
];

foreach ($especificaciones as $espec) {
    $especTable->addRow();
    $especTable->addCell(2000, ['bgColor' => 'F8F9FA'])->addText($espec[0], 'tableCellStyle');
    $especTable->addCell(2500)->addText($espec[1], 'tableCellStyle');
    $especTable->addCell(1500, ['bgColor' => 'F8F9FA'])->addText($espec[2], 'tableCellStyle');
    $especTable->addCell(1500)->addText($espec[3], 'tableCellStyle');
}

$section->addTextBreak(2);

// LICENCIAMIENTO Y PROPIEDAD
$section->addText('LICENCIAMIENTO Y PROPIEDAD', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$licenciaTable = $section->addTable([
    'borderSize' => 0,
    'cellMargin' => 100,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);
$licenciaTable->addRow();

// Columna Licencia
$licenciaCell = $licenciaTable->addCell(5000, ['borderSize' => 0, 'bgColor' => 'F8F9FA']);
$licenciaCell->addText('LICENCIA DEL SOFTWARE', 'columnTitleStyle');
$licenciaCell->addTextBreak();
$licenciaCell->addText('• Tipo: Licencia MIT (Open Source)', 'normalStyle');
$licenciaCell->addText('• Acceso completo al código fuente', 'normalStyle');
$licenciaCell->addText('• Libertad de modificación y distribución', 'normalStyle');
$licenciaCell->addText('• Sin garantías explícitas', 'normalStyle');
$licenciaCell->addText('• Atribución al equipo desarrollador', 'normalStyle');

// Columna Propiedad
$propiedadCell = $licenciaTable->addCell(5000, ['borderSize' => 0, 'bgColor' => 'F8F9FA']);
$propiedadCell->addText('DERECHOS DE PROPIEDAD', 'columnTitleStyle');
$propiedadCell->addTextBreak();
$propiedadCell->addText('• Cliente: Propietario del código personalizado', 'normalStyle');
$propiedadCell->addText('• Desarrollador: Derecho de uso de librerías generales', 'normalStyle');
$propiedadCell->addText('• Documentación: Incluida en la entrega final', 'normalStyle');
$propiedadCell->addText('• Branding: Logotipos y marca propiedad del cliente', 'normalStyle');

$section->addTextBreak(2);

// ENTREGABLES PRINCIPALES
$section->addText('ENTREGABLES PRINCIPALES', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$entregablesTable = $section->addTable([
    'borderSize' => 6,
    'borderColor' => 'CCCCCC',
    'cellMargin' => 80,
    'alignment' => Jc::CENTER,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);

$entregablesTable->addRow(600);
$entregablesTable->addCell(2200, ['bgColor' => '4A89DC'])->addText('Documento', 'tableHeaderStyle');
$entregablesTable->addCell(3200, ['bgColor' => '4A89DC'])->addText('Descripción', 'tableHeaderStyle');
$entregablesTable->addCell(1300, ['bgColor' => '4A89DC'])->addText('Formato', 'tableHeaderStyle');
$entregablesTable->addCell(1800, ['bgColor' => '4A89DC'])->addText('Fecha', 'tableHeaderStyle');

$entregables = [
    ['Documento de Requerimientos', 'Especificaciones funcionales y no funcionales completas', 'PDF', '15/03/2025'],
    ['Diseño de Base de Datos', 'Modelo ER y script de implementación', 'PDF/SQL', '10/05/2025'],
    ['Mockups de Interfaz', 'Diseño de todas las pantallas del sistema', 'PDF/PNG', '25/06/2025'],
    ['Código Fuente', 'Software completo con documentación interna', 'Git Repository', '30/09/2026'],
    ['Manuales de Usuario', 'Documentación para administradores y clientes', 'PDF', '15/10/2026']
];

foreach ($entregables as $entrega) {
    $entregablesTable->addRow();
    $entregablesTable->addCell(2200, ['bgColor' => 'F8F9FA'])->addText($entrega[0], 'tableCellStyle');
    $entregablesTable->addCell(3200)->addText($entrega[1], 'tableCellStyle');
    $entregablesTable->addCell(1300, ['bgColor' => 'F8F9FA'])->addText($entrega[2], 'tableCellStyle');
    $entregablesTable->addCell(1800)->addText($entrega[3], 'tableCellStyle');
}

$section->addTextBreak(2);

// CRONOGRAMA DE ENTREGAS
$section->addText('CRONOGRAMA DE ENTREGAS', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$cronogramaTable = $section->addTable([
    'borderSize' => 6,
    'borderColor' => 'CCCCCC',
    'cellMargin' => 80,
    'alignment' => Jc::CENTER,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);

$cronogramaTable->addRow(600);
$cronogramaTable->addCell(2000, ['bgColor' => '4A89DC'])->addText('Fase', 'tableHeaderStyle');
$cronogramaTable->addCell(3500, ['bgColor' => '4A89DC'])->addText('Actividades', 'tableHeaderStyle');
$cronogramaTable->addCell(1500, ['bgColor' => '4A89DC'])->addText('Duración', 'tableHeaderStyle');
$cronogramaTable->addCell(2000, ['bgColor' => '4A89DC'])->addText('Fecha Entrega', 'tableHeaderStyle');

$cronograma = [
    ['Análisis y Planificación', 'Definición de requerimientos, diseño de BD', '4 semanas', '15/03/2025'],
    ['Desarrollo Frontend', 'Interfaces de usuario, catálogo, carrito', '12 semanas', '15/08/2025'],
    ['Desarrollo Backend', 'Lógica de negocio, APIs, integración BD', '16 semanas', '15/09/2025'],
    ['Pruebas y Ajustes', 'Testing, corrección de bugs, optimización', '8 semanas', '15/12/2025'],
    ['Implementación Final', 'Despliegue en producción, capacitación', '2 semanas', '30/09/2026']
];

foreach ($cronograma as $fase) {
    $cronogramaTable->addRow();
    $cronogramaTable->addCell(2000, ['bgColor' => 'F8F9FA'])->addText($fase[0], 'tableCellStyle');
    $cronogramaTable->addCell(3500)->addText($fase[1], 'tableCellStyle');
    $cronogramaTable->addCell(1500, ['bgColor' => 'F8F9FA'])->addText($fase[2], 'tableCellStyle');
    $cronogramaTable->addCell(2000)->addText($fase[3], 'tableCellStyle');
}

$section->addTextBreak(2);

// TÉRMINOS DE GARANTÍA
$section->addText('TÉRMINOS DE GARANTÍA', 'sectionTitleStyle', [
    'alignment' => Jc::LEFT,
    'spaceAfter' => 200,
    'shading' => ['fill' => '4A89DC']
]);

$section->addText('Período de Garantía', 'clauseTitleStyle');
$garantiaText = "El equipo desarrollador garantiza el correcto funcionamiento del software por un período de 6 meses posteriores a la entrega final (30/09/2026). Durante este período se corregirán sin costo adicional todos los defectos de funcionamiento que no sean consecuencia de modificaciones realizadas por terceros.";
$section->addText($garantiaText, 'normalStyle', 'justifyParagraph');

$section->addText('Soporte Técnico', 'clauseTitleStyle');
$soporteText = "Se incluyen 40 horas de soporte técnico post-implementación para resolver dudas de uso y configuración. Soporte adicional será cotizado por separado según tarifas preestablecidas.";
$section->addText($soporteText, 'normalStyle', 'justifyParagraph');

$section->addText('Exclusiones de Garantía', 'clauseTitleStyle');
$exclusionText = "Quedan excluidos de la garantía los problemas derivados de: modificaciones no autorizadas, uso inadecuado del software, fallas en hardware o software de terceros, y casos de fuerza mayor.";
$section->addText($exclusionText, 'normalStyle', 'justifyParagraph');

// FIRMAS - Nueva página para mejor presentación
$section->addPageBreak();

$section->addText('FIRMAS', 'sectionTitleStyle', [
    'alignment' => Jc::CENTER,
    'spaceAfter' => 400,
    'shading' => ['fill' => '4A89DC']
]);

$firmasTable = $section->addTable([
    'borderSize' => 0,
    'cellMargin' => 100,
    'alignment' => Jc::CENTER,
    'width' => 100 * 50,
    'unit' => TblWidth::PERCENT
]);
$firmasTable->addRow(2000);

// Firma Prestador
$firmaPrestador = $firmasTable->addCell(5000, ['borderSize' => 0, 'valign' => 'center']);
$firmaPrestador->addText('Por el Equipo de Desarrollo Angelow', ['bold' => true, 'size' => 12, 'name' => 'Arial'], 'centerParagraph');
$firmaPrestador->addTextBreak(2);
$firmaPrestador->addText('_____________________________', 'normalStyle', 'centerParagraph');
$firmaPrestador->addText('Nombre: _________________________', 'normalStyle', 'centerParagraph');
$firmaPrestador->addText('Cargo: Representante del Equipo', 'normalStyle', 'centerParagraph');
$firmaPrestador->addText('Fecha: 30/09/2026', 'normalStyle', 'centerParagraph');

// Firma Cliente
$firmaCliente = $firmasTable->addCell(5000, ['borderSize' => 0, 'valign' => 'center']);
$firmaCliente->addText('Por Angelow Ropa Infantil', ['bold' => true, 'size' => 12, 'name' => 'Arial'], 'centerParagraph');
$firmaCliente->addTextBreak(2);
$firmaCliente->addText('_____________________________', 'normalStyle', 'centerParagraph');
$firmaCliente->addText('Nombre: _________________________', 'normalStyle', 'centerParagraph');
$firmaCliente->addText('Cargo: Representante Legal', 'normalStyle', 'centerParagraph');
$firmaCliente->addText('Fecha: 30/09/2026', 'normalStyle', 'centerParagraph');

// Configurar headers para descarga
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename="Contrato_Angelow_Ecommerce.docx"');
header('Cache-Control: max-age=0');

// Generar y descargar documento
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('php://output');
exit;
?>