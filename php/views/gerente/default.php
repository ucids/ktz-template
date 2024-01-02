<?
$sql = "SELECT * FROM View_Solicitudes";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$solicitudes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="card ">
    <div class="card-header card-header-stretch">
        <h3 class="card-title">Solicitudes</h3>
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_7">Pendientes de Aprobar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_8">Entregadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_9">Rechazadas</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kt_tab_pane_7" role="tabpanel">
                <? include 'tablas/solicitudes_nuevas.php'?>
            </div>

            <div class="tab-pane fade" id="kt_tab_pane_8" role="tabpanel">
                <? include 'tablas/solicitudes_aprobadas.php'?>
            </div>

            <div class="tab-pane fade" id="kt_tab_pane_9" role="tabpanel">
                <? include 'tablas/solicitudes_rechazadas.php'?>
            </div>
        </div>
    </div>
</div>
