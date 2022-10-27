<section class="content-header">
  <h1>
    <?php echo __('Tag'); ?>
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
                                            <?= h($tag->title) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Slug') ?></dt>
                                        <dd>
                                            <?= h($tag->slug) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Seo') ?></dt>
                                <dd>
                                    <?= $tag->has('seo') ? $tag->seo->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                                                                                                                
                                                                        <dt><?= __('Status') ?></dt>
                            <dd>
                            <?= $tag->status ? __('Yes') : __('No'); ?>
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

                <?php if (!empty($tag->articles)): ?>

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

                            <?php foreach ($tag->articles as $articles): ?>
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
</section>
