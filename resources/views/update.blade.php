@extends('layouts.base')

@section('css', 'css/serviceStyle.css')


@section('title', 'Service')


@section('header')
    
@endsection

@section('content')
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post" action="/update-product">
        @method('PUT')
        @csrf


        <input type="hidden" name="id" value="{{ $product->id }}">
        <h3>Modifier votre statuette</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nom de la création" value="{{ $product->name }}" />
                </div>
                <div class="form-group">
                    <input type="text" name="date" class="form-control" placeholder="DD/MM/YY" value="{{ $product->date }}" />
                </div>
                <div class="form-group">
                    <input type="text" name="origin" class="form-control" placeholder="Origine (pays)" value="{{ $product->origin }}" />
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="prix (euro)" value="{{ $product->price }}" />
                </div>
                <div class="form-group">
                    <input type="text" name="artistname" class="form-control" placeholder="Auteur" value="{{ $product->artistname }}" />
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btnContact"  value="Confirmer" />
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </form>
</div>
@endsection