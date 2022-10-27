<section class="content-header">
  <h1>
    <?php echo __('Photo'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Informações'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                        <dt><?= __('Page') ?></dt>
                                <dd>
                                    <?= $photo->has('page') ? $photo->page->title : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Article') ?></dt>
                                <dd>
                                    <?= $photo->has('article') ? $photo->article->title : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($photo->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Image') ?></dt>
                                        <dd>
                                            <?= h($photo->image) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Description') ?></dt>
                                        <dd>
                                            <?= h($photo->description) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                                                        <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $photo->status ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
