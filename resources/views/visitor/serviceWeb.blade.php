@extends('app.base')

@section('content')
    <!--div class="container-fluid" style="z-index: 1000;">
        <div class="row">
            <div class="col-12">
                <div class="hero-service h-50">
                    <h1>création de site internet</h1>
                </div>
                <div class="hero-image">
                    <div class="hero-text">
                        <h1 style="font-size:50px">Création de site internet</h1>
                        <p>And I'm a Photographer</p>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    {{--@include('visitor.starter')--}}

    <link rel="stylesheet" type="text/css" href="{{ asset('form/montserrat-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('form/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('form/style.css')}}"/>

    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="hero-image">
                    <div class="hero-text">
                        <h1 style="font-size:50px">Création de site internet</h1>
                        <!--p>Un site internet ou site web est ce que l'on appelle dans le jargon informatique l'identé visuelle d'une entreprise, d'une personne, d'une ONG, ... Cependant le logo et d'autres facteurs rentrent dans le milieu de l'identité visuelle d'une entité.</p-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin: 2em 0;">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="service-web-2">
                    <div class="content-web">
                        <h3>Site Web Vitrine</h3>
                        <p>Un site vitrine est un site web qui se résume à la présentation d'une entreprise, d'une organisation, d'un produit, etc. Il s'oppose au site marchand ou à la boutique en ligne qui offrent, de leur côté, la possibilité de réaliser des transactions en ligne.
                        </p>
                        <a href="#myform" class="btn-service">Créer mon Site Vitrine</a>
                    </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="service-web-3">
                    <div class="content-web">
                        <h3>Site Dynamique</h3>
                        <p>Un site Web dynamique est un site Web dont le contenu change en fonction de la demande de l'utilisateur. Ce n'est pas juste pour lire. Au lieu de cela, il fournit plus d'intéraction utilisateur et de fonctionnalités.
                        </p>
                        <a href="#myform" class="btn-service">Créer mon Site dynamique</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="service-web-1">
                    <div class="content-web">
                        <h3>Site e-commerce</h3>
                        <p>Un site e-commerce, est un site internet de vente en ligne c'est-à-dire
                            un espace où le commerçant a la possibilité d’exposer ses produits et de toucher à un public plus important que celui qu’il pourrait trouver dans son magasin réel.
                        </p>
                        <a href="#myform" class="btn-service">Créer mon e-commerce</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-3">
                <div class="service-web-4">
                    <div class="content-web">
                        <h3>Site de gestion de contenu</h3>
                        <p>Il s'agit d'un site dynamique qui permet la:
                            Gestion des contenus d’un site web, avec application automatique de la mise en forme prédéfinie,
                            Création collaborative, publication de contenus et Gestion des utilisateurs.
                        </p>
                        <a href="#myform" class="btn-service">Créer mon Site de gestion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <div class="header">
                    <header><h6>Remplissez ce formulaire pour obtenir votre devis gratuitement</h6></header>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Informations générales</h2>
					<div class="form-row">
						<select name="service" required>
						    <option class="option" value="">Voulez-vous un ?</option>
						    <option class="option" value="">Site web vitrine</option>
                            <option class="option" value="">Site web dynamique</option>
                            <option class="option" value="">E-commerce</option>
						    <option class="option" value="">Site web de gestion de contenu</option>
                            <option class="option" value="">Autres</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Nom" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Prénoms" required>
						</div>
					</div>
					<div class="form-row">
						<select name="position">
						    <option value="position">Vous êtes</option>
						    <option value="director">Le Directeur</option>
						    <option value="manager">Le Manager</option>
						    <option value="employee">Un Employé(e)</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Nom de votre entréprise">
					</div>
                    <div class="form-row">
                        <input type="text" name="business" class="company" id="business" placeholder="Secteur d'activité" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="business" class="company" id="business" placeholder="Décrivez brievement votre projet" required>
                    </div>
				</div>
				<div class="form-right">
					<h2>Vos Coordonnées</h2>
					<div class="form-row">
						<input type="text" name="Ville" class="street" id="street" placeholder="Ville" required>
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Addresse" required>
					</div>
					<!--div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
						</div>
						<div class="form-row form-row-2">
							<select name="place">
							    <option value="place">Place</option>
							    <option value="Street">Street</option>
							    <option value="District">District</option>
							    <option value="City">City</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div-->
					<div class="form-row">
						<select name="country">
						    <option value="country">Pays</option>
						    <option value="ci">Côte d'Ivoire</option>
						    <!--option value="Malaysia">Malaysia</option>
						    <option value="India">India</option-->
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
                    <div class="form-row">
                        <input type="tel" name="phone" class="phone" id="phone" placeholder="Numéro de téléphone" required>
                    </div>
					<div class="form-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Votre Email">
					</div>
					<div class="form-checkbox">
						<label class="container"><p>J'accepte les <a href="#" class="text">Conditions générales d'utilisation</a> de votre site.</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Envoyer">
					</div>
				</div>
			</form>
		</div>
	</div>

    @include('visitor.footer')

    <style>
        /*body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }*/

        .hero-image {
        background-color: #2db6fa;
        height: 25rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        }

        .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
        }

        .hero-text button:hover {
        background-color: #555;
        color: white;
        }

        .service-web-1{
            padding: 1em;
            background-color: #2db6fa;
            color: #fff;
            border-radius: 1em;
            position: relative;
            height: 100%;
        }

        .service-web-2{
            padding: 1em;
            background-color: #2db6fa;
            color: #fff;
            border-radius: 1em;
            position: relative;
            height: 100%;
        }

        .service-web-3{
            padding: 1em;
            background-color: #2db6fa;
            color: #fff;
            border-radius: 1em;
            position: relative;
            height: 100%;
        }

        .service-web-4{
            padding: 1em;
            background-color: #2db6fa;
            color: #fff;
            border-radius: 1em;
            position: relative;
            height: 100%;
        }

        .content-web{
            text-align: center;
            /*position: absolute;*/
            /**top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);*/
        }

        .content-web h3{
            padding: 0.3em;
            background-color: #000;
            border-radius: 0.7em;
        }

        .btn-service{
            padding: 0.3em;
            background-color: #2db6fa;
            border-radius: 0.7em;
            color: #fff;
            border: solid 1px #000;
        }

        .btn-service:hover{
            padding: 0.3em;
            background-color: #fff;
            border-radius: 0.7em;
            color: #2db6fa;
            border: solid 1px #000;
        }
    </style>
@endsection
