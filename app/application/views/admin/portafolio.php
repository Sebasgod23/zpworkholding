<div class="container py-4">
     <section id="" class="conocenos">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Portafolio - ADMIN</span></h2>
                     <p align="center">En ZERO POINT WORK HOLDING contamos con un equipo de trabajo capacitado para cubrir las necesidades de nuestros clientes.</p>
                 </div>
                 <div class="col-md-2 mb-4 mt-5">
                     <div class="card text-center">
                         <button style="width: 40px;" data-bs-toggle="modal" data-bs-target="#modal_img_portafolio" class="btn btn-warning btn-block"><i class="bi bi-pencil-square"></i></button>
                         <div class="card-header">
                             Cargar Imagen
                         </div>
                         <div class="card-body cont_agrega_img" data-bs-toggle="modal" data-bs-target="#agrega_img_portafolio">
                             <i class="bi bi-plus-lg fa-2x"></i>
                         </div>
                     </div>
                 </div>
                 <div class="row justify-content-center" id="img_portafolio">

                 </div>
             </div
         </div><!--/row-->
     </section><!--/conocenos-->
 </div><!--/container-->
 <!-- modal1 -->
 <div class="modal fade" id="modal_img_portafolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog  modal-xl">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Imagen</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="row" id="imangenes"></div>
             </div>
             <div class="modal-footer">

             </div>
         </div>
     </div>
 </div>
<!-- Modal 2 -->

 <div class="modal fade" id="agrega_img_portafolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header ">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Carga imagen portafolio</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="form_carrga_img_portafolio" method="POST" enctype="multipart/form-data">
                     <div class="input-group" id="group-modal-img">
                         <span class="input-group-text"><i class="bi bi-card-image"></i></span>
                         <input type="file" id="modal-img" name="modal-img" class="form-control" placeholder="Nombre del Menú">
                     </div>
                     <div class="input-group mt-3" id="group-modal-desc">
                         <span class="input-group-text"><i class="bi bi-chat-right-dots"></i></span>
                         <textarea id="modal-desc" name="modal-desc" class="form-control" rows="3"></textarea>
                     </div>
                     <div class="form-group py-4">
                         <button type="submit" class="btn btn-info btn-block me-3">Subir imagen</button>
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
             </div>
         </div>
     </div>
 </div>