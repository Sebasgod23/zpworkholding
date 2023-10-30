<section id="" class="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>CONTACTO</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-20">
                <div class="map-container  py-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.456442421472!2d-100.4361135327208!3d20.8132670287774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d4a7d738603d37%3A0x845ab802009b9f54!2sZP+WORKHOLDING!5e0!3m2!1ses!2smx!4v1518122727792" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="col-md-6 contact-form">
            <form id="form_contactos">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Tu nombre" required="required">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Tu correo electrónico" required="required">
                </div>
                <div class="form-group">
                    <label for="subject">Asunto:</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto del mensaje" required="required">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input name="telefono" type="number" class="form-control" id="telefono" placeholder="Tu número de teléfono" required="required">
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea name="message" rows="4" class="form-control" id="message" placeholder="Escribe tu mensaje aquí" required="required"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-1">Enviar Mensaje</button>
            </form>
            <br><br><br><br>
        </div>

    </div>
    <section id=" " class="py-5 ">
        <div class="container">
            <div class="row">
            </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>DIRECCIÓN</h3>
                        <p>A la espera de saber de ti!</p>
                        <p><i class="bi bi-telephone me-2"></i> +52 442 348 1185 o 722 305 1811 </p>
                        <p><i class="bi bi-envelope-at me-2"></i> ventas@zpworkholding.com.mx </p>
                        <p><i class="bi bi-geo-alt me-2"></i> Carr. Estatal 500, No. 38700, Bodega 12, Puerto de Aguirre, Santa Rosa Jáuregui, Querétaro, Qro.</p>
                        <ul class="social-icon">
                                <h4>NUESTRAS REDES SOCIALES</h4>
                            <a href="https://www.facebook.com/zpworkholding" target="_blank" class="bi bi-facebook" style="color: white;"></a>
                            <a href="https://twitter.com/zp_workholding" target="_blank" class="bi bi-twitter-x" style="color: white;"></a> 
                            <a href="https://www.linkedin.com/in/zp-workholding-62a2a1149/" target="_blank" class="bi bi-linkedin" style="color: white;"></a> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<!-- end contact -->
<!-- MODAL correcta -->
<div class="modal fade" id="Modalsucces" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="text-dark modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Datos correctos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <i class="bi bi-check-circle me-2 text-success fw-bold"></i>datos enviados correctamente
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- end modal correcta -->
<!-- modal error -->
<div class="modal fade" id="Modalerror" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="text-dark modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Datos incorrectos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <i class="bi bi-x-circle me-2 text-danger fw-bold"></i>Datos ya registrados
            </div>
        </div>
    </div>
</div>