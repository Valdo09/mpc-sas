@extends('layout.app')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container text-center mt-5">
        <h2>Enquête de Satisfaction Client</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <div>
      @include('flash-message')
    </div>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nous aimerions avoir votre avis</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">

            @if ($satisfaction->statut=="sent")

            <!-- For desktop version -->
            <form action="{{ route('storesatisfaction') }}" class="onlargescreen"  method="post" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);padding: 30px;border-radius: 4px;">
                @csrf
              <div class="form-row row">
                <div class="col-md-4 form-group">
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                <div class="validate" style="margin-left: -40px;">Très satisfait</div>
                </div>
                <div class="col-md-2 form-group">
                  <div class="validate"  style="margin-left: -30px;">Satisfait</div>
                </div>
                <div class="col-md-2 form-group">
                  <div class="validate" style="margin-left: -40px;">Peu Satisfait</div>
                </div>
                <div class="col-md-2 form-group">
                  <div class="validate" style="margin-left: -30px;">Insatisfait</div>
                </div>
              </div>

              <hr>
              <div class="form-row row" style="height: 20px;">
                  <div class="col-md-4">
                      <p>Disponibilité</p>
                  </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Très Satisfait"  id="satisfaction" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Satisfait" id="satisfaction" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Peu Satisfait" id="satisfaction" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Insatisfait" id="satisfaction" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row" style="height: 20px;">
                <div class="col-md-4">
                    <p>Respect des délais</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Très Satisfait"  id="delais" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Satisfait" id="delais" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Peu Satisfait" id="delais" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Insatisfait" id="delais" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Respect du prix prévu</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Très Satisfait"  id="prix" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Satisfait" id="prix" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Peu Satisfait" id="prix" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Insatisfait" id="prix" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Qualité de la prestation</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Très Satisfait"  id="qualite" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Satisfait" id="qualite" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Peu Satisfait" id="qualite" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Insatisfait" id="qualite" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>
              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Propreté en fin de chantier</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Très Satisfait"  id="proprete" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Satisfait" id="proprete" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Peu Satisfait" id="proprete" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Insatisfait" id="proprete" required/>
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Protection des ouvrages, sécurité</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Très Satisfait"  id="protection" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Satisfait" id="protection" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Peu Satisfait" id="protection" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Insatisfait" id="protection" required/>
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Conseils techniques</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Très Satisfait"  id="conseils" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Satisfait" id="conseils" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Peu Satisfait" id="conseils" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Insatisfait" id="conseils" required/>
                  <div class="validate"></div>
                </div>
              </div>
               <hr>

              <div class="form-row row" >
                <div class="col-md-6">
                    <p>Recommanderiez-vous cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                  <label for="">Oui</label>
                  <input type="radio" name="recommandation" value="Oui" id="recommandation" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-1 form-group">
                  <label for="">Non</label>
                  <input type="radio" name="recommandation" value="Non" id="recommandation" required/>
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-6">
                    <p>Quelle note donneriez-vous à cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                  <input type="text" name="note" class="form-control" value="...../20"  id="note" required/>
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-row row">
                <div class="col-md-6">
                    <p>Remarques</p>
                </div>
                <div class="col-md-6 form-group">
                    <textarea class="form-control" name="avis" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message, Avis, Suggestions..."></textarea>
                    <div class="validate"></div>
                </div>
              </div>
              <input type="hidden" name="link" value="{{ URL::current() }}">
              <div class="text-right"><button type="submit">Envoyer</button></div>
            </form>

            <!-- For mobile version -->
            <form action="{{ route('storesatisfaction') }}" class="onsmallscreen"  method="post" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);padding: 30px;border-radius: 4px;">
                @csrf
              <hr>
              <div class="form-row row">
                  <div class="col-md-4">
                      <p>Disponibilité</p>
                  </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Très Satisfait"  id="satisfaction" required/>
                    <label for="">Très Satisfait</label>
                    <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Satisfait" id="satisfaction" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Peu Satisfait" id="satisfaction" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Insatisfait" id="satisfaction" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row">
                <div class="col-md-4">
                    <p>Respect des délais</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Très Satisfait"  id="delais" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Satisfait" id="delais" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Peu Satisfait" id="delais" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Insatisfait" id="delais" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row">
                <div class="col-md-4">
                    <p>Respect du prix prévu</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Très Satisfait"  id="prix" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Satisfait" id="prix" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Peu Satisfait" id="prix" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Insatisfait" id="prix" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row">
                <div class="col-md-4">
                    <p>Qualité de la prestation</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Très Satisfait"  id="qualite" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Satisfait" id="qualite" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Peu Satisfait" id="qualite" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Insatisfait" id="qualite" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>
              <div class="form-row row">
                <div class="col-md-4">
                    <p>Propreté en fin de chantier</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Très Satisfait"  id="proprete" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Satisfait" id="proprete" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Peu Satisfait" id="proprete" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Insatisfait" id="proprete" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row">
                <div class="col-md-4">
                    <p>Protection des ouvrages, sécurité</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Très Satisfait"  id="protection" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Satisfait" id="protection" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Peu Satisfait" id="protection" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Insatisfait" id="protection" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row">
                <div class="col-md-4">
                    <p>Conseils techniques</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Très Satisfait"  id="conseils" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Satisfait" id="conseils" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Peu Satisfait" id="conseils" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Insatisfait" id="conseils" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
               <hr>

              <div class="form-row row" >
                <div class="col-md-6">
                    <p>Recommanderiez-vous cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                  <label for="">Oui</label>
                  <input type="radio" name="recommandation" value="Oui" id="recommandation" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-1 form-group">
                  <label for="">Non</label>
                  <input type="radio" name="recommandation" value="Non" id="recommandation" required/>
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-6">
                    <p>Quelle note donneriez-vous à cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                  <input type="text" name="note" class="form-control" value="...../20"  id="note" required/>
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-row row">
                <div class="col-md-6">
                    <p>Remarques</p>
                </div>
                <div class="col-md-6 form-group">
                    <textarea class="form-control" name="avis" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message, Avis, Suggestions..."></textarea>
                    <div class="validate"></div>
                </div>
              </div>
              <input type="hidden" name="link" value="{{ URL::current() }}">
              <div class="text-right"><button type="submit">Envoyer</button></div>
            </form>
            @else

            <!-- For desktop version -->
            <form action="" class="onlargescreen"  method="post" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);padding: 30px;border-radius: 4px;">
                @csrf
              <div class="form-row row">
                <div class="col-md-4 form-group">
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                <div class="validate" style="margin-left: -40px;">Très satisfait</div>
                </div>
                <div class="col-md-2 form-group">
                  <div class="validate"  style="margin-left: -30px;">Satisfait</div>
                </div>
                <div class="col-md-2 form-group">
                  <div class="validate" style="margin-left: -40px;">Peu Satisfait</div>
                </div>
                <div class="col-md-2 form-group">
                  <div class="validate" style="margin-left: -30px;">Insatisfait</div>
                </div>
              </div>

              <hr>
              <div class="form-row row" style="height: 20px;">
                  <div class="col-md-4">
                      <p>Disponibilité</p>
                  </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->disponibilite=="Très Satisfait")
                        <input type="radio" name="disponibilite" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="disponibilite" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->disponibilite=="Satisfait")
                        <input type="radio" name="disponibilite" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="disponibilite" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->disponibilite=="Peu Satisfait")
                        <input type="radio" name="disponibilite" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="disponibilite" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->disponibilite=="Insatisfait")
                        <input type="radio" name="disponibilite" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="disponibilite" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row" style="height: 20px;">
                <div class="col-md-4">
                    <p>Respect des délais</p>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->delais=="Très Satisfait")
                        <input type="radio" name="delais" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="delais" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->delais=="Satisfait")
                        <input type="radio" name="delais" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="delais" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->delais=="Peu Satisfait")
                        <input type="radio" name="delais" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="delais" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->delais=="Insatisfait")
                        <input type="radio" name="delais" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="delais" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Respect du prix prévu</p>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->prix=="Très Satisfait")
                        <input type="radio" name="prix" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="prix" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->prix=="Satisfait")
                        <input type="radio" name="prix" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="prix" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->prix=="Peu Satisfait")
                        <input type="radio" name="prix" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="prix" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->prix=="Insatisfait")
                        <input type="radio" name="prix" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="prix" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Qualité de la prestation</p>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->qualite=="Très Satisfait")
                        <input type="radio" name="qualite" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="qualite" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->qualite=="Satisfait")
                        <input type="radio" name="qualite" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="qualite" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->qualite=="Peu Satisfait")
                        <input type="radio" name="qualite" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="qualite" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->qualite=="Insatisfait")
                        <input type="radio" name="qualite" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="qualite" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>
              <hr>
              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Propreté en fin de chantier</p>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->proprete=="Très Satisfait")
                        <input type="radio" name="proprete" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="proprete" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->proprete=="Satisfait")
                        <input type="radio" name="proprete" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="proprete" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->proprete=="Peu Satisfait")
                        <input type="radio" name="proprete" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="proprete" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->proprete=="Insatisfait")
                        <input type="radio" name="proprete" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="proprete" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Protection des ouvrages, sécurité</p>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->disponibilite=="Très Satisfait")
                        <input type="radio" name="disponibilite" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="disponibilite" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->disponibilite=="Satisfait")
                        <input type="radio" name="disponibilite" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="disponibilite" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->protection=="Peu Satisfait")
                        <input type="radio" name="protection" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="protection" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->protection=="Insatisfait")
                        <input type="radio" name="protection" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="protection" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row"  style="height: 20px;">
                <div class="col-md-4">
                    <p>Conseils techniques</p>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->protection=="Très Satisfait")
                        <input type="radio" name="protection" checked="checked" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="protection" value="Très Satisfait"  id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->protection=="Satisfait")
                        <input type="radio" name="protection" checked="checked" value="Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="protection" value="Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->protection=="Peu Satisfait")
                        <input type="radio" name="protection" checked="checked" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="protection" value="Peu Satisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                    @if ($satisfaction->protection=="Insatisfait")
                        <input type="radio" name="protection" checked="checked" value="Insatisfait" id="satisfaction" disabled required/>
                    @else
                        <input type="radio" name="protection" value="Insatisfait" id="satisfaction" disabled required/>
                    @endif
                  <div class="validate"></div>
                </div>
              </div>
               <hr>

              <div class="form-row row" >
                <div class="col-md-6">
                    <p>Recommanderiez-vous cette entreprise ?</p>
                </div>
                @if ($satisfaction->recommandation=="Oui")
                    <div class="col-md-1 form-group">
                    <label for="">Oui</label>
                    <input type="radio" name="recommandation" checked="checked"  value="Oui" id="recommandation" disabled required/>
                    <div class="validate"></div>
                    </div>

                    <div class="col-md-1 form-group">
                        <label for="">Non</label>
                        <input type="radio" name="recommandation" value="Non" id="recommandation" disabled required/>
                        <div class="validate"></div>
                    </div>
                @endif
                @if ($satisfaction->recommandation=="Non")
                    <div class="col-md-1 form-group">
                        <label for="">Oui</label>
                        <input type="radio" name="recommandation" value="Oui" id="recommandation" disabled required/>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-1 form-group">
                        <label for="">Non</label>
                        <input type="radio" name="recommandation" checked="checked" value="Non" id="recommandation" disabled required/>
                        <div class="validate"></div>
                    </div>
                @endif
              </div>

              <div class="form-row row">
                <div class="col-md-6">
                    <p>Quelle note donneriez-vous à cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                    <input type="text" name="note" class="form-control" value="{{ $satisfaction->note }}"  id="note" disabled required/>
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-row row">
                <div class="col-md-6">
                    <p>Remarques</p>
                </div>
                <div class="col-md-6 form-group">
                <textarea class="form-control" name="avis" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message, Avis, Suggestions..." disabled>{{ $satisfaction->avis }}</textarea>
                    <div class="validate"></div>
                </div>
              </div>
              <input type="hidden" name="link" value="{{ URL::current() }}">
              <div class="text-right"><button type="submit"  disabled="disabled">Envoyer</button></div>
            </form>

            <!-- For mobile version -->
            <form action="" class="onsmallscreen"  method="post" style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);padding: 30px;border-radius: 4px;">
                <div class="row">
                    <p>Vous avez déjà répondu à ce questionnaire !</p>
                </div>
                {{-- @csrf
              <hr>
              <div class="form-row row">
                  <div class="col-md-4">
                      <p>Disponibilité</p>
                  </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Très Satisfait"  id="satisfaction" required/>
                    <label for="">Très Satisfait</label>
                    <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Satisfait" id="satisfaction" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Peu Satisfait" id="satisfaction" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="disponibilite" value="Insatisfait" id="satisfaction" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row">
                <div class="col-md-4">
                    <p>Respect des délais</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Très Satisfait"  id="delais" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Satisfait" id="delais" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Peu Satisfait" id="delais" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="delais" value="Insatisfait" id="delais" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row">
                <div class="col-md-4">
                    <p>Respect du prix prévu</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Très Satisfait"  id="prix" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Satisfait" id="prix" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Peu Satisfait" id="prix" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="prix" value="Insatisfait" id="prix" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>

              <div class="form-row row">
                <div class="col-md-4">
                    <p>Qualité de la prestation</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Très Satisfait"  id="qualite" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Satisfait" id="qualite" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Peu Satisfait" id="qualite" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="qualite" value="Insatisfait" id="qualite" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
              <hr>
              <div class="form-row row">
                <div class="col-md-4">
                    <p>Propreté en fin de chantier</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Très Satisfait"  id="proprete" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Satisfait" id="proprete" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Peu Satisfait" id="proprete" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="proprete" value="Insatisfait" id="proprete" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row">
                <div class="col-md-4">
                    <p>Protection des ouvrages, sécurité</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Très Satisfait"  id="protection" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Satisfait" id="protection" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Peu Satisfait" id="protection" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="protection" value="Insatisfait" id="protection" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>

              <hr>
              <div class="form-row row">
                <div class="col-md-4">
                    <p>Conseils techniques</p>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Très Satisfait"  id="conseils" required/>
                  <label for="">Très Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Satisfait" id="conseils" required/>
                  <label for="">Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Peu Satisfait" id="conseils" required/>
                  <label for="">Peu Satisfait</label>
                  <div class="validate"></div>
                </div>
                <div class="col-md-2 form-group">
                  <input type="radio" name="conseils" value="Insatisfait" id="conseils" required/>
                  <label for="">Insatisfait</label>
                  <div class="validate"></div>
                </div>
              </div>
               <hr>

              <div class="form-row row" >
                <div class="col-md-6">
                    <p>Recommanderiez-vous cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                  <label for="">Oui</label>
                  <input type="radio" name="recommandation" value="Oui" id="recommandation" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-1 form-group">
                  <label for="">Non</label>
                  <input type="radio" name="recommandation" value="Non" id="recommandation" required/>
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row row">
                <div class="col-md-6">
                    <p>Quelle note donneriez-vous à cette entreprise ?</p>
                </div>
                <div class="col-md-1 form-group">
                  <input type="text" name="note" class="form-control" value="...../20"  id="note" required/>
                  <div class="validate"></div>
                </div>
              </div>


              <div class="form-row row">
                <div class="col-md-6">
                    <p>Remarques</p>
                </div>
                <div class="col-md-6 form-group">
                    <textarea class="form-control" name="avis" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message, Avis, Suggestions..."></textarea>
                    <div class="validate"></div>
                </div>
              </div>
              <input type="hidden" name="link" value="{{ URL::current() }}">
              <div class="text-right"><button type="submit" disabled="disabled">Envoyer</button></div> --}}
            </form>
            @endif

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

        <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container-fluid" data-aos="zoom-in">

         <div class="section-title">
            <h2>Nos partenaires</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="owl-carousel clients-carousel">
                <img src="public/assets/img/clients/ikea.jpg" alt="" style="min-height: 110px;">
                <img src="public/assets/img/clients/leroymerlin.jpg" alt="" style="min-height: 110px;">
                <img src="public/assets/img/clients/vinci.png" alt="" style="min-height: 110px;">
              </div>
            </div>
          </div>
        </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->
@endsection
