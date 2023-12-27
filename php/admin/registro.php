<?
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // El usuario no ha iniciado sesión, redirige a la página de inicio de sesión o muestra un mensaje de error
    header("Location: admin/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

    <head>
        <base href=<?php echo $base; ?> />
        <title>Katzkin</title>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="katzkin dashboard" />
        <meta property="og:url" content="#" />
        <meta property="og:site_name" content="login" />
        <link rel="canonical" href="#" />
        <link rel="shortcut icon" href="assets/media/ktz/ki.png" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <!-- <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
            <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> -->
        <!--end::Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Stylesheets Bundle-->
    </head>

    <body id="kt_body" class="app-blank">
        <!-- <form method="post" action="registrar_usuario.php">
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="role">Rol:</label>
            <select name="role" id="role" required>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
            <br>
            <button type="submit">Registrar</button>
        </form> -->


        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            
            <!--begin::Logo-->
            <a href="index.php" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="../assets/media/ktz/cow1.png" class="theme-light-show h-100px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        
                        <!--begin::Back link-->
                        <div class="me-2">
                            <a href="index.php" class="btn btn-icon bg-light rounded-circle">
                                <i class="ki-outline ki-black-left fs-2 text-gray-800"></i>
                            </a>
                        </div>
                        <!--end::Back link-->
                        <!--begin::Sign Up link-->
                        <div class="m-0">
                            <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Regresar al</span>
                            <a href="index.php" class="link-primary fw-bold fs-5" data-kt-translate="sign-up-head-link">Inicio</a>
                        </div>
                        <!--end::Sign Up link=-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="py-20">
                    <?php
                        session_start(); 
                        $mensaje = isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : '';
                        $class = isset($_SESSION['class']) ? $_SESSION['class'] : '';
                        if ($mensaje && $class) {
                        ?>
                        <!--begin::Alert-->
                        <div class="alert alert-dismissible bg-light-<?php echo $class ?> d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
                            <!--begin::Close-->
                            <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" data-bs-dismiss="alert">
                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                            <!--end::Close-->

                            <!--begin::Icon-->
                            <i class="ki-solid ki-message-notif fs-5tx text-<?php echo $class;?> mb-5"></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="text-center">
                                <!--begin::Title-->
                                <h1 class="fw-bold mb-5"><?php echo $mensaje; ?></h1>
                                <!--end::Title-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-<?php echo $class;?> opacity-25 mb-5"></div>
                                <!--end::Separator-->

                                <!--begin::Buttons-->
                                <div class="d-flex flex-center flex-wrap">
                                    <a data-bs-dismiss="alert" class="btn btn-outline btn-outline-<?php echo $class;?> btn-active-<?php echo $class;?> m-2">OK</a>
                                    <a href="index.php" class="btn btn-<?php echo $class;?> m-2">Regresar al Inicio</a>
                                </div>
                                <!--end::Buttons-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Alert-->
                    <?php
                        } 
                        unset($_SESSION['mensaje']);
                        unset($_SESSION['class']);
                    ?>

                        <!--begin::Form-->
                        <form id="tutuFormulario" class="form w-100" method="post" action="../functions/admin/registrar_usuario.php">
                            <!--begin::Heading-->
                            <div class="text-start mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-up-title">Dar de alta un Usuario</h1>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Crea un usuario</div>
                                <!--end::Link-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="row fv-row mb-7">
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Nombre" name="name" autocomplete="off" data-kt-translate="sign-up-input-first-name" required />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6">
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Apellido" name="lastname" autocomplete="off" data-kt-translate="sign-up-input-last-name" required/>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                            <input class="form-control form-control-lg form-control-solid" 
                                type="text" 
                                placeholder="Numero Empleado" 
                                name="username" 
                                autocomplete="off" 
                                data-kt-translate="sign-up-input-email" 
                                required
                            />
                            <div id="mensajeError" style="color: red;"></div> <!-- Elemento para mostrar el mensaje de error -->

                            </div>
                            <div class="fv-row mb-10">
                                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-up-input-email" />
                            </div>
                            <!--end::Input group-->
                            <?php
                            include '../data/db.php';
                            // Consulta para obtener roles
                            $consultaRoles = "SELECT id, rol FROM roles";
                            $stmtRoles = $pdo->prepare($consultaRoles);
                            $stmtRoles->execute();
                            $roles = $stmtRoles->fetchAll(PDO::FETCH_ASSOC);

                            // Consulta para obtener departamentos
                            $consultaDepartamentos = "SELECT id, departamento FROM departamentos";
                            $stmtDepartamentos = $pdo->prepare($consultaDepartamentos);
                            $stmtDepartamentos->execute();
                            $departamentos = $stmtDepartamentos->fetchAll(PDO::FETCH_ASSOC);
                            ?>

                            <!-- begin::Input Rol -->
                            <div class="fv-row mb-10">
                                <select class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Selecciona un Rol" name="rol" required>
                                    <option></option>
                                    <?php
                                    foreach ($roles as $rol) {
                                        echo "<option value=\"{$rol['id']}\">{$rol['rol']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- end::Input Rol -->

                            <!-- begin::Input Departamento -->
                            <div class="fv-row mb-10">
                                <select class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Selecciona un Departamento" name="departamento" required>
                                    <option></option>
                                    <?php
                                    foreach ($departamentos as $departamento) {
                                        echo "<option value=\"{$departamento['id']}\">{$departamento['departamento']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- end::Input Departamento -->

                            <!--begin::Input group-->
                            <div class="fv-row mb-10" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-up-input-password" required />
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="ki-outline ki-eye-slash fs-2"></i>
                                            <i class="ki-outline ki-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    <!--end::Input wrapper-->
                                    <!--begin::Meter-->
                                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Hint-->
                                <div class="text-muted" data-kt-translate="sign-up-hint">Nivel de Seguridad de la Contraseña.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Submit-->
                                <button type="submit" class="btn btn-primary" data-kt-translate="sign-up-submit">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Enviar</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                                <!--end::Submit-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="m-0">
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(assets/media/auth/bg11.png)"></div>
            <!--begin::Body-->
        </div>
        
        <script>
            console.log('jQuery cargado');
        </script>

        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used for this page only)-->
        <!-- <script src="assets/js/custom/authentication/sign-up/general.js"></script> -->
        <!-- <script src="assets/js/custom/authentication/sign-in/i18n.js"></script> -->
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>