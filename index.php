<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Desarrollo - Angelow E-commerce</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="download-container">
        <button class="download-btn" onclick="generatePDF()">Descargar Contrato en PDF</button>
        <button class="download-btn word-btn" onclick="generateWord()">Descargar Contrato en Word</button>
    </div>

    <div class="contract-container" id="contract-content">
        <div class="header">
            <div class="logo">
                <span class="logo-icon"><img src="images/logo2.png" alt="Logo Angelow"></span>
                <span class="logo-text">Angelow</span>
            </div>
            <div class="company-info">
                <div><strong>Centro Textil y de Gestión Industrial - SENA</strong></div>
                <div>NIT: 800.123.456-7</div>
                <div>Medellín, Colombia</div>
                <div>Ficha: 3147208 - Programa ADSO</div>
            </div>
        </div>

        <h1 class="contract-title">CONTRATO DE DESARROLLO DE SOFTWARE E-COMMERCE - ANGELOW</h1>

        <div class="section">
            <h2 class="section-title">PARTES CONTRATANTES</h2>
            <div class="two-columns">
                <div class="column">
                    <h3>PRESTADOR DEL SERVICIO</h3>
                    <p><strong>Equipo de Desarrollo Angelow</strong></p>
                    <p>Ficha: 3147208 - Análisis y Desarrollo de Software</p>
                    <p>Centro Textil y de Gestión Industrial - SENA</p>
                    <p>Instructores: Edilfredo Pineda, Héctor Maya</p>
                    <p>Aprendices: Braian Oquendo, Sara Hernández, Julián Cárdenas, Sofía Guisao</p>
                </div>
                <div class="column">
                    <h3>CLIENTE</h3>
                    <p><strong>Angelow Ropa Infantil</strong></p>
                    <p>NIT: 900.123.456-7</p>
                    <p>Dirección: Calle 120 # 49 B 24, Medellín</p>
                    <p>Teléfono: +57 313 595 1664</p>
                    <p>Email: anelhiguita@hotmail.com</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">OBJETO DEL CONTRATO</h2>
            <p>El presente contrato tiene por objeto establecer los términos y condiciones bajo los cuales el <strong>Equipo de Desarrollo Angelow</strong> desarrollará una plataforma de comercio electrónico (E-commerce) especializada en ropa infantil para <strong>Angelow Ropa Infantil</strong>, de acuerdo con las especificaciones técnicas detalladas en los anexos de este documento y los requerimientos funcionales establecidos.</p>
        </div>

        <div class="section">
            <h2 class="section-title">ALCANCE DEL PROYECTO</h2>
            <table class="contract-table">
                <thead>
                    <tr>
                        <th>Módulo</th>
                        <th>Descripción</th>
                        <th>Entregables</th>
                        <th>Plazo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gestión de Usuarios</td>
                        <td>Registro, autenticación y perfiles de usuario con roles diferenciados</td>
                        <td>Sistema completo con OAuth Google</td>
                        <td>30 días</td>
                    </tr>
                    <tr>
                        <td>Catálogo de Productos</td>
                        <td>Gestión de productos con variantes (talla/color) y categorización</td>
                        <td>Backoffice y frontend con filtros avanzados</td>
                        <td>45 días</td>
                    </tr>
                    <tr>
                        <td>Carrito y Checkout</td>
                        <td>Sistema de carrito persistente y proceso de compra</td>
                        <td>Flujo completo con cálculo de envíos</td>
                        <td>40 días</td>
                    </tr>
                    <tr>
                        <td>Sistema de Pagos</td>
                        <td>Integración con transferencia bancaria y pago contra entrega</td>
                        <td>Pasarelas funcionales con validación</td>
                        <td>35 días</td>
                    </tr>
                    <tr>
                        <td>Panel Administrativo</td>
                        <td>Gestión completa de productos, pedidos, inventario y reportes</td>
                        <td>Dashboard con métricas y controles</td>
                        <td>60 días</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2 class="section-title">ESPECIFICACIONES TÉCNICAS</h2>
            <table class="contract-table">
                <thead>
                    <tr>
                        <th>Componente</th>
                        <th>Tecnología</th>
                        <th>Versión</th>
                        <th>Estándar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Frontend</td>
                        <td>HTML5, CSS3, JavaScript</td>
                        <td>ES6+</td>
                        <td>W3C</td>
                    </tr>
                    <tr>
                        <td>Backend</td>
                        <td>PHP</td>
                        <td>8.0+</td>
                        <td>PSR Standards</td>
                    </tr>
                    <tr>
                        <td>Base de datos</td>
                        <td>MySQL</td>
                        <td>8.0+</td>
                        <td>Normalización 3NF</td>
                    </tr>
                    <tr>
                        <td>Seguridad</td>
                        <td>SSL, password_hash</td>
                        <td>TLS 1.3</td>
                        <td>OWASP Top 10</td>
                    </tr>
                    <tr>
                        <td>Facturación</td>
                        <td>API DIAN</td>
                        <td>Última versión</td>
                        <td>Resolución 192/2020</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2 class="section-title">LICENCIAMIENTO Y PROPIEDAD</h2>
            <div class="two-columns">
                <div class="column">
                    <h3>LICENCIA DEL SOFTWARE</h3>
                    <ul>
                        <li>Tipo: Licencia MIT (Open Source)</li>
                        <li>Acceso completo al código fuente</li>
                        <li>Libertad de modificación y distribución</li>
                        <li>Sin garantías explícitas</li>
                        <li>Atribución al equipo desarrollador</li>
                    </ul>
                </div>
                <div class="column">
                    <h3>DERECHOS DE PROPIEDAD</h3>
                    <ul>
                        <li>Cliente: Propietario del código personalizado</li>
                        <li>Desarrollador: Derecho de uso de librerías generales</li>
                        <li>Documentación: Incluida en la entrega final</li>
                        <li>Branding: Logotipos y marca propiedad del cliente</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">ENTREGABLES PRINCIPALES</h2>
            <table class="contract-table">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Descripción</th>
                        <th>Formato</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Documento de Requerimientos</td>
                        <td>Especificaciones funcionales y no funcionales completas</td>
                        <td>PDF</td>
                        <td>15/03/2025</td>
                    </tr>
                    <tr>
                        <td>Diseño de Base de Datos</td>
                        <td>Modelo ER y script de implementación</td>
                        <td>PDF/SQL</td>
                        <td>10/05/2025</td>
                    </tr>
                    <tr>
                        <td>Mockups de Interfaz</td>
                        <td>Diseño de todas las pantallas del sistema</td>
                        <td>PDF/PNG</td>
                        <td>25/06/2025</td>
                    </tr>
                    <tr>
                        <td>Código Fuente</td>
                        <td>Software completo con documentación interna</td>
                        <td>Git Repository</td>
                        <td>30/09/2026</td>
                    </tr>
                    <tr>
                        <td>Manuales de Usuario</td>
                        <td>Documentación para administradores y clientes</td>
                        <td>PDF</td>
                        <td>15/10/2026</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2 class="section-title">CRONOGRAMA DE ENTREGAS</h2>
            <table class="contract-table">
                <thead>
                    <tr>
                        <th>Fase</th>
                        <th>Actividades</th>
                        <th>Duración</th>
                        <th>Fecha Entrega</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Análisis y Planificación</td>
                        <td>Definición de requerimientos, diseño de BD</td>
                        <td>4 semanas</td>
                        <td>15/03/2025</td>
                    </tr>
                    <tr>
                        <td>Desarrollo Frontend</td>
                        <td>Interfaces de usuario, catálogo, carrito</td>
                        <td>12 semanas</td>
                        <td>15/08/2025</td>
                    </tr>
                    <tr>
                        <td>Desarrollo Backend</td>
                        <td>Lógica de negocio, APIs, integración BD</td>
                        <td>16 semanas</td>
                        <td>15/09/2025</td>
                    </tr>
                    <tr>
                        <td>Pruebas y Ajustes</td>
                        <td>Testing, corrección de bugs, optimización</td>
                        <td>8 semanas</td>
                        <td>15/12/2025</td>
                    </tr>
                    <tr>
                        <td>Implementación Final</td>
                        <td>Despliegue en producción, capacitación</td>
                        <td>2 semanas</td>
                        <td>30/09/2026</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2 class="section-title">TÉRMINOS DE GARANTÍA</h2>
            <div class="clause">
                <div class="clause-title">Período de Garantía</div>
                <p>El equipo desarrollador garantiza el correcto funcionamiento del software por un período de 6 meses posteriores a la entrega final (30/09/2026). Durante este período se corregirán sin costo adicional todos los defectos de funcionamiento que no sean consecuencia de modificaciones realizadas por terceros.</p>
            </div>

            <div class="clause">
                <div class="clause-title">Soporte Técnico</div>
                <p>Se incluyen 40 horas de soporte técnico post-implementación para resolver dudas de uso y configuración. Soporte adicional será cotizado por separado según tarifas preestablecidas.</p>
            </div>

            <div class="clause">
                <div class="clause-title">Exclusiones de Garantía</div>
                <p>Quedan excluidos de la garantía los problemas derivados de: modificaciones no autorizadas, uso inadecuado del software, fallas en hardware o software de terceros, y casos de fuerza mayor.</p>
            </div>
        </div>

        <div class="signature-area">
            <div class="signature-box">
                <p>Por el Equipo de Desarrollo Angelow</p>
                <div class="signature-line"></div>
                <p>Nombre: _________________________</p>
                <p>Cargo: Representante del Equipo</p>
                <p>Fecha: 30/09/2026</p>
            </div>
            <div class="signature-box">
                <p>Por Angelow Ropa Infantil</p>
                <div class="signature-line"></div>
                <p>Nombre: _________________________</p>
                <p>Cargo: Representante Legal</p>
                <p>Fecha: 30/09/2026</p>
            </div>
        </div>
    </div>

    <script>
        function generateWord() {
            // Mostrar mensaje de carga
            const originalText = document.querySelector('.word-btn').textContent;
            document.querySelector('.word-btn').textContent = 'Generando Word...';
            document.querySelector('.word-btn').disabled = true;

            // Descargar
            setTimeout(() => {
                window.location.href = 'generate-word.php';

                // Restaurar botón después de 3 segundos
                setTimeout(() => {
                    document.querySelector('.word-btn').textContent = originalText;
                    document.querySelector('.word-btn').disabled = false;
                }, 3000);
            }, 500);
        }

        function generatePDF() {
            // Crear un clon del contenido para no afectar la visualización original
            const element = document.getElementById('contract-content');

            // Configuración de html2pdf optimizada para A4
            const opt = {
                margin: [10, 10, 10, 10], // márgenes: [top, left, bottom, right]
                filename: 'Contrato_Angelow_Ecommerce.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true,
                    logging: false
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait',
                    compress: true
                },
                pagebreak: {
                    mode: ['avoid-all', 'css', 'legacy'],
                    avoid: ['.section', '.contract-table', '.two-columns']
                }
            };

            // Generar PDF
            html2pdf().set(opt).from(element).save();
        }
    </script>
</body>

</html>