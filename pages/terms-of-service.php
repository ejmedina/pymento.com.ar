<?php
require_once __DIR__ . '/../constants.php';
require_once __DIR__ . '/../config.php';

$page_title = "Términos y Condiciones | PyMENTO";
$nav_variant = "default";

include __DIR__ . '/../partials/header.php';
?>

<section class="page-title" style="padding: 120px 0 60px;">
    <div class="auto-container">
        <h1>Términos y Condiciones</h1>
        <p>Última actualización: 25 de marzo de 2026</p>
    </div>
</section>

<section class="sidebar-page-container" style="padding: 0 0 80px;">
    <div class="auto-container">
        <div class="content-side">
            <div class="service-detail">
                <div class="inner-box">

                    <div class="text">
                        <p>
                            Bienvenido a PyMENTO. Estos Términos y Condiciones regulan el acceso, navegación y uso del sitio web
                            <strong>https://www.pymento.com.ar/</strong> y de los canales de contacto asociados.
                        </p>
                        <p>
                            Al acceder o utilizar este sitio, aceptás estos Términos y Condiciones. Si no estás de acuerdo, por favor no utilices el sitio.
                        </p>
                    </div>

                    <h3>1. Titular del sitio</h3>
                    <div class="text">
                        <p>
                            Titular / Responsable: <strong>Razon social pymento s.a. en trámite.</strong><br>
                            Email de contacto: <strong>consultas@pymento.com.ar</strong><br>
                            País de operación: <strong>Argentina</strong>
                        </p>
                    </div>

                    <h3>2. Objeto del sitio</h3>
                    <div class="text">
                        <p>
                            PyMENTO brinda información sobre servicios vinculados a consultoría, marketing, automatización,
                            desarrollo de software, integraciones, soluciones digitales e implementación de tecnologías aplicadas a negocios.
                        </p>
                        <p>
                            El contenido del sitio tiene fines informativos y comerciales generales. La publicación de servicios, descripciones,
                            ejemplos o casos de uso no constituye por sí misma una oferta contractual cerrada.
                        </p>
                    </div>

                    <h3>3. Uso permitido</h3>
                    <div class="text">
                        <p>El usuario se compromete a utilizar el sitio de forma lícita, responsable y respetuosa, y a no:</p>
                        <ul>
                            <li>Usarlo para fines ilegales, fraudulentos o engañosos</li>
                            <li>Interferir en la seguridad, disponibilidad o funcionamiento del sitio</li>
                            <li>Intentar acceder a áreas restringidas o sistemas relacionados sin autorización</li>
                            <li>Copiar, replicar o explotar comercialmente contenidos del sitio sin autorización previa</li>
                            <li>Enviar mensajes maliciosos, spam o contenido ofensivo a través de los canales de contacto</li>
                        </ul>
                    </div>

                    <h3>4. Propiedad intelectual</h3>
                    <div class="text">
                        <p>
                            Salvo indicación en contrario, los contenidos del sitio, incluyendo textos, estructura, diseño, marcas,
                            logotipos, recursos visuales y materiales publicados por PyMENTO, se encuentran protegidos por la normativa aplicable
                            de propiedad intelectual y son de titularidad de PyMENTO o de sus respectivos titulares.
                        </p>
                    </div>

                    <h3>5. Servicios y propuestas</h3>
                    <div class="text">
                        <p>
                            La contratación de servicios podrá requerir evaluación previa, diagnóstico, intercambio de información,
                            propuesta comercial, aceptación expresa y/o acuerdo específico entre las partes.
                        </p>
                        <p>
                            PyMENTO se reserva el derecho de aceptar o rechazar solicitudes, definir alcance, cronograma,
                            modalidad de trabajo y condiciones comerciales según cada caso.
                        </p>
                    </div>

                    <h3>6. Contenido de terceros y herramientas externas</h3>
                    <div class="text">
                        <p>
                            El sitio puede contener enlaces o accesos a servicios de terceros, incluyendo WhatsApp, plataformas de mensajería,
                            redes sociales, herramientas analíticas, formularios, servicios de hosting y otras soluciones externas.
                            PyMENTO no controla de forma total esos servicios y su uso puede quedar sujeto a los términos y políticas de cada proveedor.
                        </p>
                    </div>

                    <h3>7. Disponibilidad del sitio</h3>
                    <div class="text">
                        <p>
                            Hacemos esfuerzos razonables para mantener el sitio disponible y actualizado, pero no garantizamos
                            funcionamiento ininterrumpido, ausencia de errores o disponibilidad permanente.
                        </p>
                    </div>

                    <h3>8. Limitación de responsabilidad</h3>
                    <div class="text">
                        <p>
                            En la máxima medida permitida por la legislación aplicable, PyMENTO no será responsable por daños directos o indirectos
                            derivados del uso o imposibilidad de uso del sitio, de interrupciones del servicio, errores, caídas, demoras,
                            contenido de terceros o decisiones tomadas en base a información publicada de manera general en el sitio.
                        </p>
                    </div>

                    <h3>9. Información provista por el usuario</h3>
                    <div class="text">
                        <p>
                            El usuario es responsable por la veracidad y legitimidad de la información que envíe por formularios,
                            correo electrónico, WhatsApp u otros canales de contacto.
                        </p>
                    </div>

                    <h3>10. Protección de datos</h3>
                    <div class="text">
                        <p>
                            El tratamiento de datos personales realizado a través del sitio y sus canales vinculados se rige por nuestra
                            <a href="<?= $base_url ?>/privacy-policy/">Política de Privacidad</a>.
                        </p>
                    </div>

                    <h3>11. Modificaciones</h3>
                    <div class="text">
                        <p>
                            PyMENTO podrá modificar estos Términos y Condiciones en cualquier momento. La versión vigente será la publicada
                            en esta página, con indicación de su fecha de actualización.
                        </p>
                    </div>

                    <h3>12. Ley aplicable y jurisdicción</h3>
                    <div class="text">
                        <p>
                            Estos Términos y Condiciones se regirán por las leyes de la República Argentina.
                            Toda controversia será sometida a la jurisdicción de los tribunales ordinarios competentes de
                            <strong>[COMPLETAR CIUDAD / JURISDICCIÓN]</strong>, salvo disposición legal en contrario.
                        </p>
                    </div>

                    <h3>13. Contacto</h3>
                    <div class="text">
                        <p>
                            Para cualquier consulta relacionada con estos Términos y Condiciones, podés escribirnos a:
                            <strong>consultas@pymento.com.ar</strong>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>