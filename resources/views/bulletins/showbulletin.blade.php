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
                            <p>Notes pour la periode {{$bulletin2->periode[0]->id}} du: {{$bulletin2->periode[0]->dateDebut}} au {{$bulletin2->periode[0]->dateFin}}</p>
                        </div>
                        <table id="bootstrap-table" class="table">
                            <thead>
                                <th data-field="name">Matière</th>
                                <th data-field="salary">Coefficient</th>
                                <th data-field="country">Moyenne</th>
                                <th data-field="city">Notes</th>
                                <th data-field="city">Commentaire</th>
                                
                            </thead>
                            <tbody>
                                @foreach($bulletin2->matieres->sortBy('nomMatiere') as $matiere)
                                <tr>
                                    <td class="text-left">{{$matiere->nomMatiere}}</td>
                                    <td class="text-left">{{$matiere->pivot->coefGlobal}}</td>
                                    <td class="text-left">0</td>
                                    <td class="text-left">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>{{ \App\Models\note::where(['id' => $matiere->pivot->note_id])->get('notes')[0]->notes }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">{{$matiere->pivot->commentaire}}</td>
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
                        <div class="row">
                            <div class="col-md-3">
                                <p class="text-left">Appreciation General:</p>
                            </div>
                            <div class="col-md-3">
                                <p class="text-left">{{$bulletin2->appreciation}}</p>
                            </div>
                        </div>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>
</div>

@endsection