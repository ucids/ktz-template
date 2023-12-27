<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">

    <!--begin::Layout-->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
            <!--begin::Form-->
            <form class="form" method="post" action="functions/solicitud/guardar_solicitud.php" id="solicitud">
                <!--begin::Type -->
                <input type="hidden" name="tipo" value="po">
                <input type="hidden" name="user" value="<?echo $user_id?>">
                <!--end::Type -->
                <!--begin::Proveedor-->
                <div class="card card-flush pt-3 mb-5 mb-lg-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bold">Solicitud PO</h2>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <div class="card-body pt-0">
                        <!--begin::Heading-->
                        <div class="mb-3">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold">
                                <span class="required">Selecciona la moneda de la solicitud</span>

                                <span class="m2-1" data-bs-toggle="tooltip" title="Es importante seleccionar correctamente la moneda de la solicitud">
                                    <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </span>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Radio group-->
                        <div class="btn-group w-100 w-lg-50" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                            <!--begin::Radio-->
                            <label class="btn btn-outline btn-color-muted btn-active-success active" data-kt-button="true">
                                <!--begin::Input-->
                                <input class="btn-check" type="radio" checked="checked" name="currency" value="mxn"/>
                                <!--end::Input-->
                                MXN
                            </label>
                            <!--end::Radio-->

                            <!--begin::Radio-->
                            <label class="btn btn-outline btn-color-muted btn-active-primary" data-kt-button="true">
                                <!--begin::Input-->
                                <input class="btn-check" type="radio" name="currency" value="usd"/>
                                <!--end::Input-->
                                USD
                            </label>
                            <!--end::Radio-->
                        </div>
                        <!--end::Radio group-->
                    </div>
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        
                        <!--begin::Description-->
                        <div class="text-gray-500 fw-semibold fs-5 mb-5">
                            Selecciona un Proveedor
                        </div>
                        <!--end::Description-->

                        <!--begin::Selected customer-->
                        <div class="d-flex align-items-center p-3 mb-8">
                            <!--begin::Proveedor-->
                            <? 
                                $sql = "SELECT id, proveedor FROM proveedores";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <span class="input-group-text" id="basic-addon3">Proveedor</span>
                            <select name="proveedor" class="form-select" data-control="select2" data-placeholder="Selecciona un Proveedor">
                                <option></option>

                                <?php foreach ($proveedores as $proveedor) : ?>
                                    <option value="<?php echo $proveedor['id']; ?>"><?php echo $proveedor['proveedor']; ?></option>
                                <?php endforeach; ?>

                            </select>
                            <!--end::Proveedor-->
                        </div>
                        <!--end::Selected customer-->
                         <!--begin::Description-->
                         <div class="text-gray-500 fw-semibold fs-5 mb-5">
                            Describe el Proyecto
                        </div>
                        <!--end::Description-->
                        <div class="d-flex align-items-center p-3 mb-8">
                            <? 
                                $sql_categorias = "SELECT id, categoria FROM categorias WHERE departamento_id = '$departamentoId'";
                                $stmt = $pdo->prepare($sql_categorias);
                                $stmt->execute();
                                $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <span class="input-group-text" id="basic-addon3">Proyecto</span>
                            <select name="proyecto" class="form-select" data-control="select2" data-placeholder="Selecciona un Proyecto">
                                <option></option>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['categoria']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Nota Importante!</h4>

                                    <div class="fs-6 text-gray-700 ">Es importante escribir en nombre del Proyecto. <a href="#"
                                            class="fw-bold">Learn more</a>.</div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Proveedor-->
                <!--begin::Productos-->
                <div class="card card-flush pt-3 mb-5 mb-lg-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bold">Articulos</h2>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Description-->
                        <!--end::Description-->
                        <!--begin::Repeater-->
                        <tr class="border-top border-top-dashed align-top fs-6 fw-bolder text-gray-700">
                            <th class="text-primary">
                                <button type="button" class="btn btn-link py-1"
                                    id="agregar-articulo">Agregar Artículo
                                    <i class="ki-outline ki-add-folder text-primary fs-2x"></i></button>
                            </th>
                        </tr>
                        <tr class="align-top fw-bolder text-gray-700">
                            <th></th>
                            <th colspan="2" class="fs-4 ps-0">
                            </th>
                            <th colspan="2" class="text-end fs-4 text-nowrap">
                                <!-- <span class="total">Total: $<span class="total-value"></span></span> -->
                            </th>
                        </tr>
                        <!--end::Repeater-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Productos-->
                <!--begin::Motivo-->
                <div class="card card-flush pt-3 mb-5 mb-lg-10">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2 class="fw-bold">Motivo</h2>
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Description-->
                        <div class="text-gray-500 fw-semibold fs-5 mb-5">
                            Ingresa un Motivo
                        </div>
                        <!--end::Description-->

                        <!--begin::Selected customer-->
                        <div class="d-flex align-items-center p-3 mb-8">
                            <!--begin::Proveedor-->
                            <div class="input-group">
                                <span class="input-group-text">Motivo</span>
                                <textarea name="motivo" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <!--end::Proveedor-->
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Motivo-->
                <button type="submit" hidden>Enviar</button>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->

        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
            <!--begin::Card-->
            <div class="card card-flush pt-3 mb-0" data-kt-sticky="true"
                data-kt-sticky-name="subscription-summary"
                data-kt-sticky-offset="{default: false, lg: '200px'}"
                data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto"
                data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95"
                style="">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Detalles</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0 fs-6">
                    <!--begin::Section-->
                    <div class="mb-7">

                        <!--begin::Details-->
                        <div class="d-flex align-items-center mb-1">
                            <!--begin::Name-->
                            <a href="#"
                                class="fw-bold text-gray-800 text-hover-primary me-2">
                                <? echo $full_name; ?> </a>
                            <!--end::Name-->

                            <!--begin::Status-->
                            <span class="badge badge-light-success"><? echo $rol;?></span>
                            <!--end::Status-->
                        </div>
                        <!--end::Details-->

                        <!--begin::Email-->
                        <a href="#"
                            class="fw-semibold text-gray-600 text-hover-primary"><? echo $email; ?></a>
                        <!--end::Email-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Seperator-->
                    <div class="separator separator-dashed mb-7"></div>
                    <!--end::Seperator-->

                    <!--begin::Section-->
                    <div class="mb-7">
                        <!--begin::Title-->
                        <h5 class="mb-3">Detalles de la Solicitud</h5>
                        <!--end::Title-->

                        <!--begin::Details-->
                        <div class="mb-0">
                            <!--begin::Plan-->
                            <span class="badge badge-light-info me-2"><? echo $username; ?></span>
                            <!--end::Plan-->

                            <!--begin::Price-->
                            <span class="fw-semibold text-gray-600"><span class="total ">Total: $<span class="total-value"></span></span>
                            <!--end::Price-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Seperator-->
                    <div class="separator separator-dashed mb-7"></div>
                    <!--end::Seperator-->

                    <!--begin::Section-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <h5 class="mb-3">Detalles Departamento</h5>
                        <!--end::Title-->

                        <!--begin::Details-->
                        <div class="mb-0">
                            <!--begin::Card info-->
                            <div class="fw-semibold text-gray-600 d-flex align-items-center">
                                <? echo $nombreDepartamento; ?>

                                <img src="/metronic8/demo35/assets/media/svg/card-logos/mastercard.svg"
                                    class="w-35px ms-2" alt="">
                            </div>
                            <!--end::Card info-->

                            <!--begin::Card expiry-->
                            <!-- <div class="fw-semibold text-gray-600">Expires Dec 2024<Q  /div> -->
                            <!--end::Card expiry-->
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Actions-->
                    <div class="mb-0">
                        <button type="button" class="btn btn-primary"
                            id="btnEnviar">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Crear Solicitud</span>
                            <!--end::Indicator label-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
    </div>
    <!--end::Layout-->
</div>
<!--end::Content-->
<script>
    document.getElementById('btnEnviar').addEventListener('click', function() {
        // Mostrar el botón dentro del formulario
        document.querySelector('#solicitud button').removeAttribute('hidden');
        
        // Enviar el formulario
        document.getElementById('solicitud').submit();
    });
</script>
<!-- script:: Agregar Item -->
<script>
    document.getElementById("agregar-articulo").addEventListener("click", function() {
        var articuloDiv = document.createElement("div");
        articuloDiv.className = "articulo";
        var html = `
            <div class="row gx-10 mb-9">
                            <!-- Campos existentes de los artículos -->
                                <div class="col-lg-6">
                                    <div class="mb-9">
                                        <label for="articulo_numero_parte" class="required form-label">Número de Parte:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="Número de Parte"
                                        name="articulo_numero_parte[]" required/>
                                    </div>
                                    <div class="mb-9">
                                        <label for="articulo_descripcion" class="required form-label">Descripcion:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="descripcion"
                                        name="articulo_descripcion[]" required/>
                                    </div>
                                    <div class="mb-9">
                                        <label for="articulo_unidad" class="required form-label">unidad:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="unidad"
                                        name="articulo_unidad[]" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-9">
                                        <label for="articulo_cantidad" class="required form-label">Cantidad:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="cantidad"
                                        name="articulo_cantidad[]" required/>
                                    </div>
                                    <div class="mb-19">
                                        <label for="for="articulo_precio" " class="required form-label">Precio:</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="precio"
                                        name="articulo_precio[]" required/>
                                    </div>
                                    <div class="mb-9">
                                        <a class="btn btn-outline btn-outline-dashed btn-outline-info btn-active-light-info">
                                            <span class="subtotal">Subtotal: $<span class="subtotal-value"></span></span>
                                        </a>
                                    </div>
                                    <div class="mb-9">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="eliminar-articulo btn btn-light-danger">Eliminar Artículo</button>

                </div>
                <div class="separator separator-dashed my-10"></div>

                `;
        articuloDiv.innerHTML = html;

        document.getElementById("agregar-articulo").before(articuloDiv);
    });
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("eliminar-articulo")) {
            event.target.parentNode.remove();
        }
    });

    function calcularSubtotal(articuloDiv) {
        var cantidad = parseFloat(articuloDiv.querySelector('input[name="articulo_cantidad[]"]').value);
        var precio = parseFloat(articuloDiv.querySelector('input[name="articulo_precio[]"]').value);
        var subtotal = cantidad * precio;

        articuloDiv.querySelector('.subtotal-value').textContent = subtotal.toFixed(2);
    }
    // Función para recalcular los subtotales de todos los artículos
    function recalcularSubtotales() {
        var articulos = document.getElementsByClassName('articulo');
        for (var i = 0; i < articulos.length; i++) {
            calcularSubtotal(articulos[i]);
        }
    }
    // Evento para calcular el subtotal al cargar la página
    window.addEventListener('load', function() {
        recalcularSubtotales();
    });
    // Evento para calcular el subtotal al cambiar la cantidad o el precio
    document.addEventListener('change', function(event) {
        if (
            event.target.name === 'articulo_cantidad[]' ||
            event.target.name === 'articulo_precio[]'
        ) {
            var articuloDiv = event.target.closest('.articulo');
            calcularSubtotal(articuloDiv);
        }
    });

    function calcularTotal() {
        var subtotales = document.getElementsByClassName('subtotal-value');
        var total = 0;
        for (var i = 0; i < subtotales.length; i++) {
            total += parseFloat(subtotales[i].textContent);
        }
        document.querySelector('.total-value').textContent = total.toFixed(2);
    }
    // Evento para calcular el total al cargar la página
    window.addEventListener('load', function() {
        calcularTotal();
    });
    // Evento para recalcular el total al cambiar cualquier cantidad o precio
    document.addEventListener('change', function(event) {
        if (
            event.target.name === 'articulo_cantidad[]' ||
            event.target.name === 'articulo_precio[]'
        ) {
            calcularTotal();
        }
    });
</script>