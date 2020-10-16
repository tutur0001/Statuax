@extends('layouts.base')
@section('css', 'css/statuetteStyle.css')

@section('title', 'statuette')


@section('header')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">

            @foreach ($products as $product)
                
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					<img src="img/téléchargement.jpeg" class="img-responsive">
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6">
                                <h3>{{ $product->name }}</h3>
							</div>
							<div class="col-md-6 col-xs-6 price">
								<h3><label>${{ $product->price }}</label></h3>
							</div>
						</div>
						<p>création: {{ $product->date }}<br>Origine: {{ $product->origin }}<br>Artiste: {{ $product->artistname }}</p>
						<div class="row">
							<div class="col-md-6">
                                <form action="/edit" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="submit" class="btn btn-primary btn-product" value="Modifier">
                                </form> 
							</div>
							<div class="col-md-6">
                                <form action="/delete" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="submit" class="btn btn-success btn-product" value="Supprimer">
                                </form>
                            </div>
						</div>

						<p> </p>
					</div>
				</div>
            </div>


            @endforeach
            
        </div> 

	</div>
</div>
@endsection




