@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Bulletin')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Notes et Moyennes</h4>
        </div>
        <div class="card-content">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        @foreach($bulletins as $bulletin)
                        <li class=""><a href="#{{$bulletin->nomBulletin}}" data-toggle="tab">{{$bulletin->nomBulletin}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="my-tab-content" class="tab-content text-center">
                @foreach($bulletins as $bulletin)
                <div class="tab-pane active" id="{{$bulletin->nomBulletin}}">
                    <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="toolbar">
	                                    <!--Here you can write extra buttons/actions for the toolbar-->
	                                </div>
	                                <table id="bootstrap-table" class="table">
	                                    <thead>
	                                        <th data-field="state" data-checkbox="true"></th>
	                                        <th data-field="id" class="text-center">ID</th>
	                                    	<th data-field="name" data-sortable="true">Name</th>
	                                    	<th data-field="salary" data-sortable="true">Salary</th>
	                                    	<th data-field="country" data-sortable="true">Country</th>
	                                    	<th data-field="city">City</th>
	                                    	<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
	                                    </thead>
	                                    <tbody>
                                            @foreach($bulletin->matieres as $matiere)
	                                        <tr>
	                                            <td></td>
	                                        	<td>1</td>
	                                        	<td>{{$matiere->nomMatiere}}</td>
	                                        	<td>$36,738</td>
	                                        	<td>Niger</td>
	                                        	<td>Oud-Turnhout</td>
	                                        	<td></td>
	                                        </tr>
                                            @endforeach
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div><!--  end card  -->
	                    </div> <!-- end col-md-12 -->
	                </div> <!-- end row -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection