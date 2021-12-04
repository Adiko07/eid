@extends('app.base')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('form/montserrat-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('form/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('form/style.css')}}"/>
    <div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Informations générales</h2>
					<div class="form-row">
						<select name="service" required>
						    <option class="option" value="">Voulez-vous un ?</option>
						    <option class="option" value="">E-commerce</option>
						    <option class="option" value="">Site web vitrine</option>
						    <option class="option" value="">Site web de gestion de contenu</option>
                            <option class="option" value="">Site web dynamique</option>
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
@endsection
