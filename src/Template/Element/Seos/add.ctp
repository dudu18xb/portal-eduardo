<br>
<div class="box-header with-border" style="background-color: #dedede;">
    <div class="content-seo">
        <h4 class="box-title mb-0 pd-15">
            <?php echo __('Adicionar SEO') ?>
        </h4>
    </div>
</div>
<div class="box-body pd-0">
    <div class="container-fluid"
         style="padding-top: 15px; border:1px solid #ddd; border-top: 0">
        <div class="row">
            <?php
            echo $this->Form->control('seo.meta_title', [
                'label' => 'Título',
                'type' => 'text',
                'required' => true,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-12 col-lg-12',
                ],
            ]);
            echo $this->Form->control('seo.meta_description', [
                'label' => 'Descrição',
                'type' => 'text',
                'required' => true,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                    'after' => $this->Html->tag(
                        'span',
                        'Descrição curta para o Google | Max. 156 caracteres',
                        [
                            'class' => 'help-block',
                        ]
                    ),
                ],
            ]);
            echo $this->Form->control('seo.meta_keywords', [
                'label' => 'Palavras Chaves',
                'required' => true,
                'type' => 'text',
                'data-role' => 'tagsinput',
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                    'after' => $this->Html->tag(
                        'span',
                        'Palavras chaves para o Google | Max. 12 palavras, separadas por vírgula',
                        [
                            'class' => 'help-block',
                        ]
                    ),
                ],
            ]);
            echo $this->Form->control('seo.meta_imagem', [
                'label' => 'Meta Imagem',
                'type' => 'file',
                'required' => true,
                'templateVars' => [
                    'classContainer' => 'col-xs-12 col-sm-12 col-md-6 col-lg-6',
                    'after' => $this->Html->tag(
                        'span',
                        'Tam. máx: 800kb - 1280px x 768px',
                        [
                            'class' => 'help-block',
                        ]
                    ),
                ],
            ]);
            ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("form").keypress(function(e) {
            //Enter key
            if (e.which == 13) {
                return false;
            }
        });
    });
</script>
