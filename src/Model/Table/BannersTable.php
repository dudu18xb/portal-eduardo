<?php
namespace App\Model\Table;

use App\Model\Entity\Banner;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;

/**
 * Banners Model
 *
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsToMany $Articles
 * @property \App\Model\Table\PagesTable|\Cake\ORM\Association\BelongsToMany $Pages
 *
 * @method \App\Model\Entity\Banner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Banner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Banner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Banner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Banner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Banner findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BannersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('banners');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Articles', [
            'foreignKey' => 'banner_id',
            'targetForeignKey' => 'article_id',
            'joinTable' => 'articles_banners'
        ]);
        $this->belongsToMany('Pages', [
            'foreignKey' => 'banner_id',
            'targetForeignKey' => 'page_id',
            'joinTable' => 'banners_pages'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'image' => [
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return strtolower($data['name']);
                },
                'transformer' => function ($table, $entity, $data, $field, $settings) {
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(1280, 768);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();

                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                        ->thumbnail($size, $mode)
                        ->save($tmp);

                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
                    ];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field},
                    ];
                },
                'keepFilesOnDelete' => false,
            ],
            'image_mobile' => [
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return strtolower($data['name']);
                },
                'transformer' => function ($table, $entity, $data, $field, $settings) {
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(1280, 768);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();

                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                        ->thumbnail($size, $mode)
                        ->save($tmp);

                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
                    ];
                },
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field},
                    ];
                },
                'keepFilesOnDelete' => false,
            ],
        ]);

        $this->addBehavior('Search.Search', [
            'emptyValues' => [''],
        ]); // adicionando o comportamento

        $searchManager = $this->behaviors()->Search->searchManager();
        $searchManager
            ->value('title')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
            ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['title'],
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                },
            ]);
        return $searchManager;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->boolean('status')
            ->allowEmpty('status');

        $validator
            ->scalar('title')
            ->maxLength('title', 255,'Este campo não pode exceder 255 caracteres')
            ->requirePresence('title', 'create','Este campo é obrigatório')
            ->notEmpty('title','Este campo é obrigatório');

        $validator
            ->scalar('position')
            ->maxLength('position', 2)
            ->allowEmpty('position');

        $validator
            ->add('image', [
                'uploadError' => [
                    'rule' => 'uploadError',
                    'message' => ' Falha no upload da imagem.',
                    'allowEmpty' => true,
                ],
                'mimeType' => [
                    'rule' => ['mimeType', ['image/png', 'image/jpg', 'image/jpeg']],
                    'message' => ' Por favor, insira a imagem no formato (png, jpg, jpeg).',
                    'allowEmpty' => true,
                ],
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '1MB'],
                    'message' => ' O tamanho da imagem não pode exceder 1 MB',
                    'allowEmpty' => true,
                ],
            ])
            ->allowEmpty('image');

        $validator
            ->add('image_mobile', [
                'uploadError' => [
                    'rule' => 'uploadError',
                    'message' => ' Falha no upload da imagem.',
                    'allowEmpty' => true,
                ],
                'mimeType' => [
                    'rule' => ['mimeType', ['image/png', 'image/jpg', 'image/jpeg']],
                    'message' => ' Por favor, insira a imagem no formato (png, jpg, jpeg).',
                    'allowEmpty' => true,
                ],
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '1MB'],
                    'message' => ' O tamanho da imagem não pode exceder 1 MB',
                    'allowEmpty' => true,
                ],
            ])
            ->allowEmpty('image_mobile');

        $validator
            ->scalar('visualization')
            ->maxLength('visualization', 255,'Este campo não pode exceder 255 caracteres')
            ->allowEmpty('visualization');

        $validator
            ->scalar('title_banner')
            ->maxLength('title_banner', 255,'Este campo não pode exceder 255 caracteres')
            ->allowEmpty('title_banner');

        $validator
            ->scalar('description_banner')
            ->allowEmpty('description_banner');

        $validator
            ->scalar('url_youtube')
            ->maxLength('url_youtube', 255,'Este campo não pode exceder 255 caracteres')
            ->allowEmpty('url_youtube');

        $validator
            ->scalar('url_page')
            ->maxLength('url_page', 255,'Este campo não pode exceder 255 caracteres')
            ->allowEmpty('url_page');

        $validator
            ->scalar('url_text')
            ->maxLength('url_text', 255,'Este campo não pode exceder 255 caracteres')
            ->allowEmpty('url_text');

        return $validator;
    }

    /**
     * @param Event $event
     * @param Banner $entity
     * @param \ArrayObject $options
     */
    public function beforeSave(Event $event, Banner $entity, \ArrayObject $options)
    {
        if (!empty($entity->image) && $entity->isDirty('image') && !$entity->isNew()) {
            $caminho = 'files/Banners/image/';
            $foto = ($entity->extractOriginal(['image'])['image']);

            if (!empty($foto) && file_exists($caminho . $foto)) {
                unlink($caminho . $foto);
                unlink($caminho . 'thumbnail-' . $foto);
            }
        }

        if (!empty($entity->image_mobile) && $entity->isDirty('image_mobile') && !$entity->isNew()) {
            $caminho = 'files/Banners/image_mobile/';
            $foto = ($entity->extractOriginal(['image_mobile'])['image_mobile']);

            if (!empty($foto) && file_exists($caminho . $foto)) {
                unlink($caminho . $foto);
                unlink($caminho . 'thumbnail-' . $foto);
            }
        }
    }

    /**
     * @return array
     */
    public function position()
    {
        $position = [
            '1' => 'Posição: Destaque',
            '2' => 'Posição: Secundário',
            '3' => 'Posição: Lateral Retrato',
        ];

        return $position;
    }
}
