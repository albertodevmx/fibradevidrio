<footer>
    <div class="container-fluid bg-dark pie">
            <div id="contacto" class="container">
                <div class="row pt-3 pb-3">

                    <div class="col-md-4 mb-5 mb-md-3 pie__formulario">
                        <form action="enviar.php" method="post" enctype="multipart/form-data" id="hm-formulario">

                            <div class="form-group m-2">
                                <!-- <label for="nombre" class="col-sm-2 col-form-label">Nombre</label> -->
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php echo ($es) ? 'Ingrese nombre...' : 'Enter name ...'; ?>">
                            </div>

                            <div class="form-group m-2">
                                <!-- <label for="email">e-mail</label> -->
                                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo ($es) ? 'Ingrese e-mail...' : 'Enter e-mail ...'; ?>">
                            </div>

                            <div class="form-group m-2">
                                <!-- <label for="telefono">Teléfono</label> -->
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="<?php echo ($es) ? 'Ingrese teléfono...' : 'Enter phone ...'; ?>">
                            </div>

                            <div class="form-group m-2">
                                <!-- <label for="ciudad">Teléfono</label> -->
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="<?php echo ($es) ? 'Ingrese ciudad o estado...' : 'Enter city or state ...'; ?>">
                            </div>

                            <div class="form-group m-2">
                                <textarea id="mensaje" name="mensaje" rows="5" placeholder="<?php echo ($es) ? 'Mensaje' : 'Message'; ?>:" class="form-control"></textarea>
                            </div>

                            <div class="form-group m-2">
                                <div id="status" class="alert alert-success "></div>

                                <button type="button" class="btn btn-primary mb-2" onclick="procesarFormulario()" style="padding: 7px 18px; color: #fff; border: #fff 1px solid; background: #9B002A; border-radius: 5px;">
                                    <?php echo ($es) ? 'Enviar mensaje' : 'Send Message'; ?>
                                </button>
                            </div>
                        </form>
                    </div>


                    <div class="col-md-4 pie__mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.656850109799!2d-99.00868601718348!3d19.398847388072184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e32c057b63ad%3A0x4d9412db4a310bfa!2sINGENIER%C3%8DA+Y+PROYECTOS+EN+FIBRA+DE+VIDRIO!5e0!3m2!1ses!2smx!4v1451367122971" frameborder="0" allowfullscreen></iframe>
                    </div>



                    <div class="col-md-4">

                        <address class="d-block text-white text-center text-md-left p-3 mb-5 pie__direccion">
                            <p>
                                <i class="icon-map-marker"></i>
                                <?php echo ($es) ? 'Av. Vicente Villada No. 481, Col. Benito Juárez, C.P. 57000, Cd. Nezahualcóyotl. Estado de México.' : 'Vicente Villada Avenue No. 481, Colonia Benito Juárez, C.P. 57000, Nezahualcóyotl City. State of México.'; ?>
                            </p>

                            <p>
                                <i class="icon-phone"></i>
                                (01 55) 5731-6223, <br class="d-none d-md-block">
                                (01 55) 1108-4472<br class="d-none d-md-block">
                                <i class="icon-mobile"></i>04455 2334-2258
                            </p>
                        </address>

                        <div class="d-block text-center pie__redessociales">
                            <a target="_blank" href="https://www.facebook.com/FIBRADEVIDRIO14" class="icon-facebook-circled"></a>
                            <a target="_blank" href="https://twitter.com/fibradevidriomx" class="icon-twitter-circled"></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCWuMswUIiiTkNc7jDoS9SYg" class="icon-youtube-square"></a>
                        </div>

                    </div>



                </div>
            </div>
    </div>
</footer>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="js/procesar_formulario.js"></script>
</html>