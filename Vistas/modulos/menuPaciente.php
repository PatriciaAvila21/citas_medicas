<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <ul class="sidebar-menu">
        
        <li>
          <a href="http://localhost/citas_medicas/inicio">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>

        <li>
          <a href="http://localhost/citas_medicas/Ver-consultorios">
            <i class="fa fa-medkit"></i>
            <span>Agendar Cita médicas</span>
          </a>
        </li>

        <li>
        <?php
        echo '  <a href="http://localhost/citas_medicas/historial/'.$_SESSION["id"].'">';
        ?>
            <i class="fa fa-calendar-check-o"></i>
            <span>Citas Médicas Agendadas</span>
          </a>
        </li>

      

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>