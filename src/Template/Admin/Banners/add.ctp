<section class="content-header">
  <h1>
    Banner
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
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
          <?php echo $this->Form->create($banner, ['type' => 'file','role' => 'form']); ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('status',[
                'checked' => true,
            ]);
            echo $this->Form->input('title');
            echo $this->Form->input('position',[
                'type' => 'select',
                'label' => 'Posição',
                'required' => true,
                'options' => $positions
            ]);
            echo $this->Form->input('image',['label' => 'Imagem','type' => 'file', 'required' => true]);
            echo $this->Form->input('image_mobile',['label' => 'Imagem Mobile','type' => 'file', 'required' => false]);
            echo $this->Form->input('visualization');
            echo $this->Form->input('title_banner');
            echo $this->Form->input('description_banner');
            echo $this->Form->input('url_youtube');
            echo $this->Form->input('url_page');
            echo $this->Form->input('url_text');
//            echo $this->Form->input('articles._ids', ['options' => $articles]);
//            echo $this->Form->input('pages._ids', ['options' => $pages]);
          ?>
              <?php if(!empty($banner->image)){ ?>
                  <div class="col-xs-12 col-sm-4 col-md-4">
                      <div class="form-group">
                          <label class="control-label">Imagem Atual</label>
                          <a href="/files/Banners/imagem/site-<?php echo h($banner->image); ?>" data-fancybox="images" title="View Image" class="link-imagem" style="margin-bottom: 15px;">
                              <?php echo $this->Html->image('../files/Banners/imagem/mini-' . $banner->image, ['class' => 'img-thumbnail img-max']); ?>
                          </a>
                      </div>
                  </div>
              <?php } ?>
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

