<section class="content-header">
  <h1>
    <?php echo __('Banner'); ?>
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
                                                                                                                <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($banner->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Position') ?></dt>
                                        <dd>
                                            <?= h($banner->position) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Image') ?></dt>
                                        <dd>
                                            <?= h($banner->image) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Image Mobile') ?></dt>
                                        <dd>
                                            <?= h($banner->image_mobile) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Visualization') ?></dt>
                                        <dd>
                                            <?= h($banner->visualization) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Title Banner') ?></dt>
                                        <dd>
                                            <?= h($banner->title_banner) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Url Youtube') ?></dt>
                                        <dd>
                                            <?= h($banner->url_youtube) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Url Page') ?></dt>
                                        <dd>
                                            <?= h($banner->url_page) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Url Text') ?></dt>
                                        <dd>
                                            <?= h($banner->url_text) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                                                        <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $banner->status ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Description Banner') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($banner->description_banner)); ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Articles']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($banner->articles)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Seo Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Category Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Author Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description
                                    </th>
                                        
                                                                    
                                    <th>
                                    Image
                                    </th>
                                        
                                                                    
                                    <th>
                                    Slug
                                    </th>
                                        
                                                                    
                                    <th>
                                    Visualization
                                    </th>
                                        
                                                                    
                                    <th>
                                    Publication Date
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Type
                                    </th>
                                        
                                                                    
                                    <th>
                                    Url External
                                    </th>
                                        
                                                                    
                                    <th>
                                    Url Text
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($banner->articles as $articles): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($articles->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->seo_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->category_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->author_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->status) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->description) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->image) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->slug) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->visualization) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->publication_date) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($articles->type) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->url_external) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($articles->url_text) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Articles', 'action' => 'view', $articles->id], ['class'=>'btn btn-info btn-sm']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Articles', 'action' => 'edit', $articles->id], ['class'=>'btn btn-warning btn-sm']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Deseja mesmo Excluir?  # {0}?', $articles->id), 'class'=>'btn btn-danger btn-sm']) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Pages']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($banner->pages)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Seo Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Type
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description
                                    </th>
                                        
                                                                    
                                    <th>
                                    Slug
                                    </th>
                                        
                                                                    
                                    <th>
                                    Url Custom
                                    </th>
                                        
                                                                    
                                    <th>
                                    Image
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Visualization
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($banner->pages as $pages): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($pages->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->seo_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->status) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->type) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->description) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->slug) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->url_custom) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($pages->image) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($pages->visualization) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Pages', 'action' => 'view', $pages->id], ['class'=>'btn btn-info btn-sm']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Pages', 'action' => 'edit', $pages->id], ['class'=>'btn btn-warning btn-sm']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Pages', 'action' => 'delete', $pages->id], ['confirm' => __('Deseja mesmo Excluir?  # {0}?', $pages->id), 'class'=>'btn btn-danger btn-sm']) ?>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
