@extends('layouts.dashboardLayout')

@section('title', 'ApprentisRecrutor2000 Bulletin')
@section('content')


<div id="my-tab-content" class="tab-content text-center">
    <div class="tab-pane active">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="toolbar">
                            <p>Edité le: {{$bulletins[0]->created_at}}</p>
                        </div>
                        <table id="bootstrap-table" class="table">
                            <thead>
                                <th data-field="name">DISCIPLINES</th>
                                <th data-field="salary">COEF</th>
                                <th data-field="country">MOYENNES</th>
                                <th data-field="city">EVALUATIONS</th>
                                <th data-field="city">APPRECIATION</th>
                                
                            </thead>
                            <tbody>
                                @foreach($bulletins[0]->matieres as $matiere)
                                <tr>
                                    <td class="text-left">{{$matiere->nomMatiere}}</td>
                                    <td class="text-left">{{$matiere->pivot->coefGlobal}}</td>
                                    <td class="text-left">0</td>
                                    <td class="text-left">
                                        <div class="row">
                                            <div class="col-md">
                                                @foreach($matiere->matiereToNotes as $note)
                                                    <p>{{$note->notes}}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">{{$matiere->pivot->appreciation}}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="text-left">Moyenne générale:</p>
                            </div>
                            <div class="col-md-3">
                                <p  class="text-left">0</p>
                            </div>
                        </div>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
</div>

@endsection