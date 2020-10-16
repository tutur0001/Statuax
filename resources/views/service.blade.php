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
    <form method="post" action="/add-products">
        @csrf
        <h3>Vendez votre statuette</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nom de la création" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="date" class="form-control" placeholder="DD/MM/YY" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="origin" class="form-control" placeholder="Origine (pays)" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="prix (dollars)" value="" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="artistname" class="form-control" placeholder="Auteur" value="" required/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btnContact"  value="Vendre" required/>
                </div>
            </div>
            <div class="col-md-6"> 
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

