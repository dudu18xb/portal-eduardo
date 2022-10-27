<section class="content-header">
  <h1>
    <?php echo __('Article'); ?>
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
                                                                                                        <dt><?= __('Seo') ?></dt>
                                <dd>
                                    <?= $article->has('seo') ? $article->seo->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Category') ?></dt>
                                <dd>
                                    <?= $article->has('category') ? $article->category->title : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Author') ?></dt>
                                <dd>
                                    <?= $article->has('author') ? $article->author->title : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($article->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Image') ?></dt>
                                        <dd>
                                            <?= h($article->image) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Slug') ?></dt>
                                        <dd>
                                            <?= h($article->slug) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Visualization') ?></dt>
                                        <dd>
                                            <?= h($article->visualization) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Type') ?></dt>
                                        <dd>
                                            <?= h($article->type) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Publication Date') ?></dt>
                                <dd>
                                    <?= h($article->publication_date) ?>
                                </dd>
                                                                                                                                                                                                            
                                                                        <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $article->status ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Description') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($article->description)); ?>
                            </dd>
                                                    <dt><?= __('Url External') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($article->url_external)); ?>
                            </dd>
                                                    <dt><?= __('Url Text') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($article->url_text)); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Photos']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($article->photos)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Page Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Article Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Image
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($article->photos as $photos): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($photos->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($photos->page_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($photos->article_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($photos->status) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($photos->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($photos->image) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($photos->description) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Photos', 'action' => 'view', $photos->id], ['class'=>'btn btn-info btn-sm']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Photos', 'action' => 'edit', $photos->id], ['class'=>'btn btn-warning btn-sm']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Deseja mesmo Excluir?  # {0}?', $photos->id), 'class'=>'btn btn-danger btn-sm']) ?>

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
                    <h3 class="box-title"><?= __('Related {0}', ['Banners']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($article->banners)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Position
                                    </th>
                                        
                                                                    
                                    <th>
                                    Image
                                    </th>
                                        
                                                                    
                                    <th>
                                    Image Mobile
                                    </th>
                                        
                                                                    
                                    <th>
                                    Visualization
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title Banner
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description Banner
                                    </th>
                                        
                                                                    
                                    <th>
                                    Url Youtube
                                    </th>
                                        
                                                                    
                                    <th>
                                    Url Page
                                    </th>
                                        
                                                                    
                                    <th>
                                    Url Text
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($article->banners as $banners): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($banners->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->status) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->position) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->image) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->image_mobile) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->visualization) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->title_banner) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->description_banner) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->url_youtube) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->url_page) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($banners->url_text) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Banners', 'action' => 'view', $banners->id], ['class'=>'btn btn-info btn-sm']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Banners', 'action' => 'edit', $banners->id], ['class'=>'btn btn-warning btn-sm']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Banners', 'action' => 'delete', $banners->id], ['confirm' => __('Deseja mesmo Excluir?  # {0}?', $banners->id), 'class'=>'btn btn-danger btn-sm']) ?>

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
                    <h3 class="box-title"><?= __('Related {0}', ['Tags']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($article->tags)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Status
                                    </th>
                                        
                                                                    
                                    <th>
                                    Title
                                    </th>
                                        
                                                                    
                                    <th>
                                    Slug
                                    </th>
                                        
                                                                                                                                            
                                    <th>
                                    Seo Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Ações'); ?>
                                </th>
                            </tr>

                            <?php foreach ($article->tags as $tags): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($tags->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tags->status) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tags->title) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($tags->slug) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($tags->seo_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Tags', 'action' => 'view', $tags->id], ['class'=>'btn btn-info btn-sm']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Tags', 'action' => 'edit', $tags->id], ['class'=>'btn btn-warning btn-sm']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Deseja mesmo Excluir?  # {0}?', $tags->id), 'class'=>'btn btn-danger btn-sm']) ?>

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
