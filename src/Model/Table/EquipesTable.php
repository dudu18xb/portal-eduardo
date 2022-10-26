<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipes Model
 *
 * @method \App\Model\Entity\Equipe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipe findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EquipesTable extends Table
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

        $this->setTable('equipes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Search.Search', [
            'emptyValues' => [''],
        ]);
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'imagem' => [
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return strtolower($data['name']);
                },
                'transformer' => function ($table, $entity, $data, $field, $settings) {
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(40, 40);
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

        $searchManager = $this->behaviors()->Search->searchManager();
        $searchManager
            ->value('nome')
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
                'field' => ['nome'],
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmpty('nome');

        $validator
            ->add('imagem', [
                'uploadError' => [
                    'rule' => 'uploadError',
                    'message' => 'O upload da imagem da capa falhou.',
                    'allowEmpty' => TRUE,
                ],
                'mimeType' => [
                    'rule' => array('mimeType', array('image/png', 'image/jpg', 'image/jpeg')),
                    'message' => 'Por favor, apenas envie imagens (png, jpg).',
                    'allowEmpty' => TRUE,
                ],
                'fileSize' => [
                    'rule' => array('fileSize', '<=', '1MB'),
                    'message' => 'A imagem  deve ser menor que 1MB.',
                    'allowEmpty' => TRUE,
                ],
            ])
            ->allowEmpty('imagem');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 255)
            ->allowEmpty('cargo');

        $validator
            ->boolean('status');

        return $validator;
    }

}
