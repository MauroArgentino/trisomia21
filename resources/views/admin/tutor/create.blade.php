@extends('admin.layouts.app')

@section('main-content')
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title text-center">DATOS DE TUTORES</h5>
                    </div>

                    <!-- inicio formulario -->
                    <form action="">
                        <div class="card-body">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Datos Personales</a>
                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Domicilio</a>

                                      <a class="nav-item nav-link" id="nav-complementarios-tab" data-toggle="tab" href="#nav-complementarios" role="tab" aria-controls="nav-complementarios" aria-selected="false">Datos Complementarios</a>
                                    </div>
                                </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- datos personales -->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <!-- nombre -->
                                            <div class="form-group">
                                                <label for=""><b>Nombre</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese Nombre">
                                                </div>
                                            </div>

                                            <!-- apellido -->
                                            <div class="form-group">
                                                <label for=""><b>Apellido</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese Apellido">
                                                </div>
                                            </div>

                                            <!-- dni -->
                                            <div class="form-group">
                                                <label for=""><b>DNI</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-address-card"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese DNI">
                                                </div>
                                            </div>

                                            <!-- fecha nacimiento -->
                                            <div class="form-group">
                                                <label for=""><b>Fecha de Nacimiento</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control" value="" id="">
                                                </div>
                                            </div>

                                            <!-- sexo/género -->
                                            <div class="form-group">
                                                <label for=""><b>Género</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-venus-mars"></i>
                                                        </span>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                        <label class="form-check-label" for="inlineRadio3">Otro</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- estado civil -->
                                            <div class="form-group">
                                                <label for=""><b>Estado Civil</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-alt"></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01">
                                                        <option selected>Seleccione</option>
                                                        <option value="1">Soltero</option>
                                                        <option value="2">En Relación</option>
                                                        <option value="3">Casado</option>
                                                        <option value="4">Divorciado</option>
                                                        <option value="5">Viudo</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- ocupación -->
                                            <div class="form-group">
                                                <label for=""><b>Ocupación</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-briefcase"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese Ocupación">
                                                </div>
                                            </div>


                                        </div>

                                        <!-- Situación Residencial / Domicilio -->
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <!-- localidad -->
                                            <div class="form-group">
                                                <label for=""><b>Localidad</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                                <i class="fas fa-map-marked-alt"></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01">
                                                        <option selected>Seleccione una Localidad</option>
                                                        <option value="1">Villa Ángela</option>
                                                        <option value="2">Resistencia</option>
                                                        <option value="3">Charata</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- situacion residencial -->
                                            <div class="form-group">
                                                <label for=""><b>Situación Residencial</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-home"></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01">
                                                        <option selected>Seleccione una opción</option>
                                                        <option value="1">Vivienda familiar</option>
                                                        <option value="2">Hogar de menores/orfanato</option>
                                                        <option value="3">Hogar de adultos mayores</option>
                                                        <option value="4">Situación de calle</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- direccion -->
                                            <div class="form-group">
                                                <label for=""><b>Dirección</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese Dirección">
                                                </div>
                                            </div>

                                            <!-- relacion con el censado -->
                                            <div class="form-group">
                                                <label for=""><b>Relación con el censado</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-users"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese con quien vive">
                                                </div>
                                            </div>

                                            <!-- telefono -->
                                            <div class="form-group">
                                                <label for=""><b>Teléfono</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="" name="" placeholder="Ingrese Número de Teléfono">
                                                </div>
                                            </div>

                                        </div>

                                        <!-- ObraSocial/ -->
                                        <div class="tab-pane fade" id="nav-complementarios" role="tabpanel" aria-labelledby="nav-complementarios-tab">

                                            <!-- obra social -->
                                            <div class="form-group">
                                                <label for=""><b>Obra Social</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-id-card"></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01">
                                                            <option selected>Seleccione una obra social</option>
                                                            <option value="1">ObraSocial1</option>
                                                            <option value="2">ObraSocial2</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- observaciones -->
                                            <div class="form-group">
                                                <label for=""><b>Observaciones</b></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-edit"></i>
                                                        </span>
                                                    </div>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                 </div>
                                            </div>

                                        </div>
                                    </div>
                        </div>
                        <!-- footer del card con boton -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    <!-- termina formulario -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
