@extends('web.layouts.home')

@section('content')


<section class="main-content-w3layouts-agileits">
	<div class="container">
		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
			    <h3 class="tittle">Calendario de Actividades</h3>	
                <div class="agenda">
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th>Fecha</th>											
                                    <th>Evento</th>
                                </tr>
                            </thead>
                            <tbody>                            
                                <tr>
                                    <td class="agenda-date" class="active" rowspan="1">
                                        <div class="dayofmonth">26</div>
                                        <div class="dayofweek">Lunes</div>
                                        <div class="shortdate text-muted">Nov, 2019</div>
                                    </td>											
                                    <td class="agenda-events">
                                        <div class="agenda-event">
                                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                                            Charla para Padres
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="agenda-date" class="active" rowspan="3">
                                        <div class="dayofmonth">28</div>
                                        <div class="dayofweek">miercoles</div>
                                        <div class="shortdate text-muted">Nov, 2019</div>
                                    </td>											
                                    <td class="agenda-events">
                                        <div class="agenda-event">
                                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                                            Salida de Campo al Predio
                                        </div>
                                    </td>									
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
			<!--//left-->
			<!--right-->
			@include('web.partials.aside')
			<!--//right-->
			</div>
		</div>
</section>

@endsection