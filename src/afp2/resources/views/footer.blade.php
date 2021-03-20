
        <div class="footer_div">
                <center>Copyright &copy; 2021 <b> IMPACT ZONE </b> TEAM </center>
        

        <div class="container">
            <section class="row footer-rows">
                <div class="col-12 footer-position">
                        <!-- cached -->
                <div id="module_newsletter_subscribe_wrapper" class="module-newsletter_subscribe-wrapper">
                <div id="newsletter_subscribe" class="newsletter-subscribe-module module content-module footer-position">
                    <div class="module-head">
                                <div class="module-head-title">Iratkozz fel hírlevelünkre!</div>
                    </div>
                    <div class="module-body">
                        <p class="newsletter-pretext">Iratkozz fel hírlevelünkre, hogy az elsők között értesülhess az akciókról és különleges ajánlatokról!</p>
                        <form id="newsletter-emailsubscribe" class="needs-subscribe-validation" action="" method="post" accept-charset="utf-8" enctype="application/x-www-form-urlencoded" novalidate="novalidate">
                        @csrf
                            <div class="row subscribe-input-row flex-column flex-md-row">
                                <div class="col col-auto mb-3">
                                    <input type="text" name="subscriber_lastname" id="subscriber-lastname" class="form-control" placeholder="Keresztnév" tabindex="1" value="">
                                        <div class="invalid-feedback">
                                            Hibás vagy hiányzó adatok!
                                        </div>
                                </div>       
                                <div class="col col-auto mb-3">
                                    <input type="email" name="subscriber_email" id="newsletter-mail-input" class="form-control email" placeholder="E-mail cím" tabindex="1" value="" required="">
                                        <div class="invalid-feedback">
                                            Hibás vagy hiányzó adatok!
                                        </div>
                                </div>
                                <div class="col col-auto form-submit mb-3">
                                    <button class="btn btn-primary" type="submit">
                                            Feliratkozom
                                            <span class="button-arrow-icon">
                                                <svg width="17" height="9.35" viewBox="0 0 25 14" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                    <path d="M0 7.84448L22.249 7.84448L17.1099 12.9837L18.1262 14L25 7.12622L18.1262 0.252434L17.1099 1.26878L22.249 6.40795L0 6.40795L0 7.84448Z"></path>
                                                </svg>
                                            </span>
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" value="1" name="subscriber_policy" id="newsletter-subscriber-policy" class="custom-control-input" tabindex="1" required="">
                                        <label for="newsletter-subscriber-policy" class="custom-control-label">
                                            Hozzájárulok ahhoz, hogy a <b>ITStore</b> a nevemet és e-mail címemet hírlevelezési céllal kezelje és a részemre gazdasági reklámot is tartalmazó email hírleveleket küldjön. 
                                        </label>
                                        <div class="invalid-feedback">
                                            Amennyiben szeretne feliratkozni hírlevelünkre kérjük pipálja be az adatkezelési checkboxot!
                                        </div>
                                </div>
                            </div>
                            <div class="form-element form-element-topyenoh d-none">
                                <label for="form-element-re-email">re-email</label>
                                    <br class="lsep">
                                <input type="text" name="re-email" id="form-element-re-email" class="input input-topyenoh" value="">
                            </div>
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="language_id" value="1">
                        </form>
                    </div>
                </div>
               
                <div id="section-contact_paris" class="section-wrapper ">
                    <div class="module content-module section-module section-contact shoprenter-section">
                        <div class="module-body section-module-body">
                            <div class="contact-wrapper-box">
                                <div class="contact-wrapper-box-line">
                                    <span class="footer-contact-col footer-contact-address">
                                        4200 Hakansükür, Kurta út 1.
                                    </span>
                                    <span class="footer-contact-col footer-contact-mail">
                                        <a href="mailto:itstore@itsore.hu">itstore@itsore.hu</a>
                                    </span>
                                </div>
                                <div class="contact-wrapper-box-line social">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    