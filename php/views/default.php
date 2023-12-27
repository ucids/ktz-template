<!--begin::Content-->
    <!--begin::Menu-->
    <div class="position-relative mb-17">
        <!--begin::Overlay-->
        <div class="overlay overlay-show">
            <!--begin::Image-->
            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('/assets/media/stock/1600x800/img-1.jpg')">
            </div>
            <!--end::Image-->

            <!--begin::layer-->
            <div class="overlay-layer rounded bg-black" style="opacity: 0.4">
            </div>
            <!--end::layer-->
        </div>
        <!--end::Overlay-->

        <!--begin::Heading-->
        <div class="position-absolute text-white mb-8 ms-10 bottom-0">
            <!--begin::Title-->
            <h3 class="text-white fs-2qx fw-bold mb-3 m">Bienvenido</h3>
            <!--end::Title-->

            <!--begin::Text-->
            <div class="fs-2 fw-semibold">
                Selecciona tu departamento
            </div>
            <!--end::Text-->

        </div>

        <!--end::Heading-->
    </div>
    <!--end::Menu-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->

        <div class="col-xxl-12">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <?
                $consulta = "SELECT * FROM departamentos";
                $resultado = $pdo->query($consulta);

                if ($resultado) {
                    // Iterar a través de los resultados y mostrar cada departamento
                    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                        <!--begin::Col-->
                        
                        <div class="col-md-4">

                            <!--begin::Card widget 11-->
                            <a href="#">
                                <div class="card card-flush h-xl-100 hover-elevate-up" style="background-color:#<? echo $row['color']?>" >
                                    <!--begin::Header-->
                                    <div class="card-header flex-nowrap pt-5">
                                        <!--begin::Title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-4 text-gray-800"><? echo $row['departamento']?></span>
                                            <span class="mt-1 fw-semibold fs-7"><? echo $row['descripcion']?></span>
                                        </h3>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body text-center pt-5">
                                        <!--begin::Image-->
                                        <img src="<? echo $row['imagen'] ?>" class="h-125px mb-5" alt="">
                                        <!--end::Image-->

                                        <!--begin::Section-->
                                        <div class="text-start">
                                            <span class="d-block fw-bold fs-1 text-gray-800"><? echo $row['departamento']?></span>
                                            <span class="mt-1 fw-semibold fs-3">12%</span>
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </a>
                            <!--end::Card widget 11-->


                        </div>

                        <!--end::Col-->
                <? }
                } else {
                    echo "Error en la consulta: " . $pdo->errorInfo()[2];
                }
                ?>


            </div>
            <!--end::Row-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

<script>
    function updateCurrentTime() {
        const currentTimeElement = document.getElementById('current-time');
        const currentTime = new Date();

        const hours = currentTime.getHours().toString().padStart(2, '0');
        const minutes = currentTime.getMinutes().toString().padStart(2, '0');
        const seconds = currentTime.getSeconds().toString().padStart(2, '0');

        const formattedTime = `${hours}:${minutes}:${seconds}`;
        currentTimeElement.innerText = formattedTime;
    }

    // Actualizar la hora cada segundo
    setInterval(updateCurrentTime, 1000);

    // Llamar a la función inicialmente para mostrar la hora actual
    updateCurrentTime();
</script>
<script>
    function getGreetingMessage() {
        const currentTime = new Date();
        const currentHour = currentTime.getHours();

        let greetingMessage;

        if (currentHour >= 5 && currentHour < 12) {
            greetingMessage = "Buenos días";
        } else if (currentHour >= 12 && currentHour < 18) {
            greetingMessage = "Buenas tardes";
        } else {
            greetingMessage = "Buenas noches";
        }

        return greetingMessage;
    }

    const greetingMessageElement = document.getElementById('greeting-message');
    const message = getGreetingMessage();
    greetingMessageElement.innerText = message;
</script>