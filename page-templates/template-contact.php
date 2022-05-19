<?php
/*Template Name:contact*/
get_header(); ?>

<section class="breadcrums-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: white;">
                            <li class="breadcrumb-item"><a href="#">SOBRE NÓS </a></li>
                            <li class="breadcrumb-item active" style="    color: #fe7c20;" aria-current="page">INSTITUCIONAL</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-form orange section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="section-title orange-border">
                        <h2>FALE CONOSCO</h2>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nome completo</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Empresa </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Mensagem</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="submit">
                                    <button type="submit" class="btn-submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="onda-estamos section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="section-title">
                        <h2>ONDE ESTAMOS</h2>
                    </div>
                    <div class="address-location">
                        <p>
                            <strong> Albrecht Equipamentos Industriais Ltda.</strong> <br>
                            BR 101, km 29 – Caixa Postal 7171<br>
                            CEP 89239-052 - Pirabeiraba<br>
                            Joinville/SC
                        </p>
                        <p>
                            PABX: +55 (47) 4009-3300 <br>
                            <a href="mailto:albrecht@albrecht.com.br">albrecht@albrecht.com.br</a>
                        </p>
                        <p>
                            <strong> Expediente: </strong> <br>
                            Segunda à sexta<br>
                            7h30 - 12h<br>
                            13h - 17h30
                        </p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21016.040401442777!2d2.45100533880156!3d48.819965081013905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60d0f4ce33b83%3A0xe6c94d8bdb122f8e!2sJoinville-le-Pont%2C%20France!5e0!3m2!1sen!2sin!4v1650805896274!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php get_footer();?>
    <?php wp_footer(); ?>
