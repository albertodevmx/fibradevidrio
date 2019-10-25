<footer class="container-fluid bg-dark pie">
    <div id="contacto" class="container">
        <div class="row pt-3 pb-3">

            <div class="col-md-4 mb-5 mb-md-3 p-0 p-md-3 pie__formulario">
                <form action="#" method="post" enctype="multipart/form-data" id="hm-formulario">

                    <div class="form-group m-2">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php echo ($es) ? 'Ingrese nombre...' : 'Enter name ...'; ?>">
                    </div>

                    <div class="form-group m-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo ($es) ? 'Ingrese e-mail...' : 'Enter e-mail ...'; ?>">
                    </div>

                    <div class="form-group m-2">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="<?php echo ($es) ? 'Ingrese teléfono...' : 'Enter phone ...'; ?>">
                    </div>

                    <div class="form-group m-2">
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="<?php echo ($es) ? 'Ingrese ciudad o estado...' : 'Enter city or state ...'; ?>">
                    </div>

                    <div class="form-group m-2">
                        <textarea id="mensaje" name="mensaje" rows="5" placeholder="<?php echo ($es) ? 'Mensaje' : 'Message'; ?>:" class="form-control"></textarea>
                    </div>

                    <div class="form-group m-2">
                        <div id="status" class="alert alert-success"></div>

                        <button type="button" class="btn btn-danger border-light mb-2" onclick="procesarFormulario()">
                            <?php echo ($es) ? 'Enviar mensaje' : 'Send Message'; ?>
                        </button>
                    </div>
                </form>
            </div>


            <div class="col-md-4 p-0 p-md-3 pie__mapa">
                <iframe class="w-100 p-2 bg-light" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.656850109799!2d-99.00868601718348!3d19.398847388072184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e32c057b63ad%3A0x4d9412db4a310bfa!2sINGENIER%C3%8DA+Y+PROYECTOS+EN+FIBRA+DE+VIDRIO!5e0!3m2!1ses!2smx!4v1451367122971" frameborder="0" allowfullscreen></iframe>
            </div>



            <div class="col-md-4">

                <address class="d-block text-white text-center text-md-left p-3 mb-5 pie__direccion">
                    <p>
                        <i class="icon-map-marker"></i>
                        <?php echo ($es) ? 'Av. Vicente Villada No. 481, Col. Benito Juárez, C.P. 57000, Cd. Nezahualcóyotl. Estado de México.' : 'Vicente Villada Avenue No. 481, Colonia Benito Juárez, C.P. 57000, Nezahualcóyotl City. State of México.'; ?>
                    </p>

                    <p>
                        <i class="icon icon-call-phone"></i> (55) 5731-6223, <br class="d-none d-md-block">
                        <i class="icon icon-call-phone"></i> (55) 1108-4472 <br class="d-none d-md-block">
                        <i class="icon-mobile"></i> (55) 2334-2258<br>
                        <i class="icon icon-envelope"></i> cesar_3r@hotmail.com
                    </p>
                </address>

                <div class="d-block text-center pie__redessociales">
                    <a class="text-center" target="_blank" href="https://www.facebook.com/FIBRADEVIDRIO14">
                        <i class="icon icon-facebook-square"></i>
                    </a>
                    <a class="text-center" target="_blank" href="https://twitter.com/fibradevidriomx">
                        <i class="icon icon-twitter"></i>
                    </a>
                    <a class="text-center" target="_blank" href="https://www.youtube.com/channel/UCWuMswUIiiTkNc7jDoS9SYg">
                        <i class="icon icon-youtube-square"></i>
                    </a>
                    <a class="text-center" target="_blank" href="https://api.whatsapp.com/send?phone=5215523342258">
                        <i class="icon icon-whatsapp"></i>
                    </a>
                </div>





            </div>



        </div>
    </div>
</footer>

</body>

<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/js/procesar_formulario.js"></script>
<script src="./assets/js/scripts.js"></script>

</html>