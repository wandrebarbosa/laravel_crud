@extends('layouts.app') @section('content') <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="POST" action="{{ route('voo.update', $voo->id) }}"> @csrf <div class="form-group row">
          <div class="col-md-12">
            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Numero do Voo') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="codigo" value="{{ $voo->codigo }}" required autocomplete="name" autofocus> @error('name') <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span> @enderror 
          </div>

          <div class="col-md-12">
            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Portao') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="gate" value="{{ $voo->gate }}" required autocomplete="name" autofocus> @error('name') <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span> @enderror 
          </div>

          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Aeronaves</label>
              </div>
              <select class="custom-select" name=id_aeronave id="inputGroupSelect01"> 
                  @foreach($aeronaves as $aeronave) 
                  <option "{{ $voo->hasAeronave->id == $aeronave->id ? 'selected' : '' }}" value="{{$aeronave->id}}">{{ $aeronave->name }}</option> 
                  @endforeach 
                </select>
            </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Aeroporto</label>
            </div>
            <select class="custom-select" name="id_aeroporto" id="inputGroupSelect01"> 
                @foreach($aeropotos as $aeropoto) 
                <option "{{ $voo->hasAeroporto->id == $aeropoto->id ? 'selected' : '' }}" value="{{$aeropoto->id}}">{{ $aeropoto->name }}</option> 
                @endforeach 
            </select>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary"> Cadastrar </button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div> @endsection