<div>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="mx-auto">
                                <img src="{{ URL::asset('assets/images/logo-sm.png')}}">
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="mx-auto">
                                <h5 class="mt-0">Bienvenido a PictsApp</h5>
                                <h6 class="mt-0">Hoy es el:
                                    <?php 
                                        $diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                        
                                        echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
                                        ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    <div class="icon-info">
                                        <i class="mdi mdi-account-group text-warning"></i>
                                    </div> 
                                </div>
                                <div class="col-8 align-self-center text-right">
                                    <div class="ml-2">
                                        <p class="mb-1 text-muted">Total Pacientes</p>
                                        <h4 class="mt-0 mb-1 text-warning font-22">0</h4>                                                                                                                                           
                                    </div>
                                </div>                    
                            </div>
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    <div class="icon-info">
                                        <i class="mdi mdi-account-group text-danger"></i>
                                    </div> 
                                </div>
                                <div class="col-8 align-self-center text-right">
                                    <div class="ml-2">
                                        <p class="mb-1 text-muted">Total Usuarios</p>
                                        <h4 class="mt-0 mb-1 text-danger font-22">0</h4>                                                                                                                                           
                                    </div>
                                </div>                    
                            </div>
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    <div class="icon-info">
                                        <i class="fas fa-home text-info"></i>
                                    </div> 
                                </div>
                                <div class="col-8 align-self-center text-right">
                                    <div class="ml-2">
                                        <p class="mb-1 text-muted">Total Organizaciones</p>
                                        <h4 class="mt-0 mb-1 text-info font-22">0</h4>                                                                                                                                           
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body  met-pro-bg" id="notify-tour-1">
                    <div class="met-profile">
                        <div class="row">
                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                <div class="met-profile-main">
                                    <div class="met-profile_user-detail">
                                        <h5 class="met-user-name">{{ Auth::user()->nombre }}</h5>
                                        <p class="mb-0 met-user-name-post">Email: {{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>