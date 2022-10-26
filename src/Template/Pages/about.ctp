<?php echo $this->Html->css('about'); ?>
<?php echo $this->Html->css('about_responsive'); ?>
<?php echo $this->Html->css('services'); ?>
<?php echo $this->Html->css('services_responsive'); ?>
<div class="home">
    <!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
    <div class="parallax_background parallax-window" data-parallax="scroll"
         data-image-src="/files/About/bg_topo/<?php echo h($about->bg_topo) ?>"
         data-speed="0.8"></div>
    <!-- Header -->
    <div class="home_container page-internal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">Institucional</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">Conheça um pouco mais sobre a Odonto Herrera</div>
                <div class="section_subtitle">Sua saúde bucal em boas mãos</div>
            </div>
        </div>
        <div class="row about_row row-eq-height">
            <div class="col-lg-8">
                <div class="about_text_2">
                    <p><?php echo h($about->descricao) ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about_image"><img src="/files/About/imagem/<?php echo h($about->imagem) ?>"
                                              alt="Sobre a Odonto Herrera"></div>
            </div>
        </div>
    </div>
</div>
<?php if (!empty($about->missao || $about->visao || $about->valores)) { ?>
    <!-- Boxes -->
    <div class="boxes d-flex flex-lg-row flex-column align-items-start justify-content-start">

        <?php if (!empty($about->missao)) { ?>
            <!-- Box -->
            <div class="box">
                <div class="background_image"
                     style="background-image:url(/files/About/bg_visao/<?php echo h($about->bg_visao) ?>)"></div>
                <div class="box_title">Missão</div>
                <!--        <div class="box_subtitle">take a look</div>-->
                <div class="box_text">
                    <?php echo h($about->missao) ?>
                </div>
            </div>
        <?php } ?>
        <!-- Box -->
        <?php if (!empty($about->visao)) { ?>
            <div class="box">
                <div class="background_image"
                     style="background-image:url(/files/About/bg_missao/<?php echo h($about->bg_missao) ?>)"></div>
                <div class="box_title">Visão</div>
                <!--        <div class="box_subtitle">take a look</div>-->
                <div class="box_text">
                    <?php echo h($about->visao) ?>
                </div>
            </div>
        <?php } ?>

        <?php if (!empty($about->valores)){ ?>
        <!-- Box -->
        <div class="box">
            <div class="background_image"
                 style="background-image:url(/files/About/bg_valores/<?php echo h($about->bg_valores) ?>)"></div>
            <div class="box_title">Valores</div>
            <!--        <div class="box_subtitle">take a look</div>-->
            <div class="box_text">
                <?php echo h($about->valores) ?>
            </div>
            <?php } ?>
        </div>

    </div>
<?php } ?>
<?php if (!empty($about->diastrabalhados || $about->pacientesatendidos)) { ?>
    <div class="milestones">
        <div class="container">
            <div class="row">
                <!-- Milestone -->
                <?php if (!empty($about->diastrabalhados)) { ?>
                    <div class="col-lg-6 milestone_col">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
                                <img
                                    src="images/icon_7.svg" alt=""></div>
                            <div class="milestone_content">
                                <div class="milestone_counter"
                                     data-end-value="<?php echo h($about->diastrabalhados) ?>">0
                                </div>
                                <div class="milestone_text">Dias Trabalhados</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if (!empty($about->pacientesatendidos)) { ?>
                    <!-- Milestone -->
                    <div class="col-lg-6 milestone_col">
                        <div class="milestone d-flex flex-row align-items-center justify-content-center">
                            <div class="milestone_icon d-flex flex-column align-items-center justify-content-center">
                                <img
                                    src="images/icon_6.svg" alt=""></div>
                            <div class="milestone_content">
                                <div class="milestone_counter"
                                     data-end-value="<?php echo h($about->pacientesatendidos) ?>">0
                                </div>
                                <div class="milestone_text">Pacientes Atendidos</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- Milestone -->
                <!-- <div class="col-lg-3 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_8.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="125">0</div>
                            <div class="milestone_text">Amazing Doctors</div>
                        </div>

                    </div>
                </div> -->

                <!-- Milestone -->
                <!-- <div class="col-lg-3 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/icon_9.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="12" data-sign-after="k">0</div>
                            <div class="milestone_text">Lab Results</div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
<?php } ?>
<?php if ($verificaFotos > 0) { ?>
    <?php if (!empty($fotos)) { ?>
        <div class="section-gallery-images">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h3 class="title-galeria">Galeria de Imagens</h3>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <?php foreach ($fotos as $foto) { ?>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <a href="/files/Fotos/imagem/<?php echo h($foto->imagem); ?>" class="card-link"
                               data-fancybox="<?php echo h($foto->descricao); ?>"
                               title="<?php echo h($foto->descricao); ?>">
                                <img src="/files/Fotos/imagem/<?php echo h($foto->imagem); ?>"
                                     alt="<?php echo h($foto->descricao); ?>">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
