<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Config $config
 */
?>
<section class="content-header">
    <h1>
        Configuração
        <small><?= __('Editar') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-danger text-white btn-sm']) ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Formulário') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($config, ['type' => 'file', 'role' => 'form']) ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Informações/Configuração do site</h4>
                            <?php
                            echo $this->Form->control('manutencao',['label' => 'Site em Manutenção ?']);
                            echo $this->Form->control('nome_site');
                            echo $this->Form->control('endereco');
                            echo $this->Form->control('telefone');
                            ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <?php
                                    echo $this->Form->control('logo_site', ['label' => 'Logo do Site', 'type' => 'file']);
                                    ?>
                                    <?php if (!empty($config->logo_site)) { ?>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <a href="/files/Configs/logo_site/<?php echo $config->logo_site; ?>"
                                                       data-fancybox="images"
                                                       data-caption="Imagem Logo do site Atual"
                                                       title="Visualizar Imagem Logo do site Atual">
                                                        <img
                                                            src="/files/Configs/logo_site/<?php echo $config->logo_site; ?>"
                                                            alt='Imagem Logo do site Atual' class='img-view'>
                                                    </a>
                                                </div>
                                                <?php if (!empty($config->logo_site)) {
                                                    echo $this->Html->link("<i class='fa fa-times'></i> Remover Logo", ['action' => 'removelogo', $config->id], ['confirm' => __('Deseja mesmo excluir a Imagem ?'), 'escape' => false, 'class' => 'btn btn-danger', 'title' => 'Remover Logo']);
                                                } ?>
                                                <br>
                                                <br>
                                            </div>

                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    echo $this->Form->control('favicon_site', ['label' => 'Favicon do site', 'type' => 'file']);
                                    ?>
                                    <?php if (!empty($config->favicon_site)){ ?>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <a href="/files/Configs/favicon_site/<?php echo $config->favicon_site; ?>"
                                                   data-fancybox="images"
                                                   data-caption="Imagem Favicon do site Atual"
                                                   title="Visualizar Favicon do site Atual">
                                                    <img
                                                        src="/files/Configs/favicon_site/<?php echo $config->favicon_site; ?>"
                                                        alt='Imagem Favicon do site Atual' class='img-view'>
                                                </a>
                                            </div>
                                            <?php
                                            if (!empty($config->favicon_site)) {
                                                echo $this->Html->link("<i class='fa fa-times'></i> Remover Favicon", ['action' => 'removefavicon', $config->id], ['confirm' => __('Deseja mesmo excluir a Imagem ?'), 'escape' => false, 'class' => 'btn btn-danger', 'title' => 'Remover Logo']);
                                            }
                                            ?>
                                            <?php } ?>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo $this->Form->control('codigo_google_analytics', [
                                'type' => 'textarea'
                            ]);
                            echo $this->Form->control('codigo_facebook_pixel', [
                                'type' => 'textarea'
                            ]);
                            echo $this->Form->control('site_key');
                            echo $this->Form->control('secrete_key');
                            ?>
                        </div>
                        <div class="col-md-6">
                            <h4>Redes Sociais</h4>
                            <?php
                            echo $this->Form->control('facebook');
                            echo $this->Form->control('instagram');
                            echo $this->Form->control('twitter');
                            echo $this->Form->control('celular');
                            ?>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
