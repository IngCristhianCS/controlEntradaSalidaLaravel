
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Registro Actividades</a></li>
    <li><a data-toggle="tab" href="#menu1">Historial De asistencia</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <h3>Registro Actividades</h3>
        @include('form.reporte')
    </div>
    <div id="menu1" class="tab-pane fade">
        <h3>Historial De Asistencia</h3>
        <table id="TablaAsistencias" class="display" width="90%">            
            <thead>
                <tr>
                    <th data-priority="1">Fecha</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Horas</th>
                    <th>Actividades</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
  </div>
