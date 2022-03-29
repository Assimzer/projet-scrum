@extends('layouts.adminLayout')

@section('title', 'ApprentisRecrutor2000 Admin')
@section('content')

<style>
    a {
    text-decoration: none; 
    }

.jst-material-input-file {
  margin-top: 70px;
  
}

.container{
  width: 400px;
  padding: 40px 20px;
  right: 0;
  left: 0;
  background: #fff;
  margin: auto; }

h2{
  margin-bottom: -30px;
  text-align: center;}

h6{
  margin-bottom: 30px;
  color: gray;
  text-align: center;
  padding: 10px; }

.file-upload {
	margin: 0 10px 0 25px;
}
.file-upload input.upload {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
    z-index: 10;
	font-size: 20px;
	cursor: pointer;
	height: 36px;
	opacity: 0;
	filter: alpha(opacity=0); }

#fileuploadurl{
  border: none;
  font-size: 12px;
  padding-left: 0;
  width: 250px;
  text-align: center;
 }
.mdl-shadow--6dp{
    text-align: center;
    border-radius: 10%; 
}
.laceholder{}
</style>
 
<div class="row">
    <div class="col-md-12">
            <table class="table">
                <thead>            
                    <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ route('pdf_offre') }}" >
                    @csrf                
                        <div class="row ">
                            <div class="col-md-12">
                            <div class="jst-material-input-file">
                                <div class="container mdl-shadow--6dp">
                                      <h2>Inserer un fichier </h2>
                                  <h6>
                                  </h6>
                                        <div class="file-upload mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                            <span for="file">BROWSE</span>
                                            <input type="file" name="file" id="file" class="upload" >
                                        </div>
                                  <input type="text" id="fileuploadurl" readonly placeholder="fichier pdf uniquement accepter">
                                  <button type="submit" class="btn btn-primary btn-lg" id="submit">Submit</button>
                                    @error('FileAttachment')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror 
                                </div> 
                                  </div>
                                </div>
                            <div class="col-md-12">
                                
                            </div>
                        </div> 
                                  
                    </form>
                    </tr>
                </thead>
    </div>
</div>
<script>

</script>
    
@endsection