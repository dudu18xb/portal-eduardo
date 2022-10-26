<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * About Model
 *
 * @method \App\Model\Entity\About get($primaryKey, $options = [])
 * @method \App\Model\Entity\About newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\About[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\About|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\About patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\About[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\About findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AboutTable extends Table
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

        $this->setTable('about');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FotoAbouts', [
            'foreignKey' => 'about_id',
            'joinType' => 'INNER',
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
            'bg_visao' => [
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
            'bg_missao' => [
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
            'bg_valores' => [
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
            'bg_topo' => [
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
            ->scalar('descricao')
            ->allowEmpty('descricao');

        $validator
            ->allowEmpty('imagem');
        $validator
            ->scalar('missao')
            ->allowEmpty('missao');

        $validator
            ->scalar('visao')
            ->allowEmpty('visao');

        $validator
            ->scalar('valores')
            ->allowEmpty('valores');

        $validator
            ->add('bg_visao', [
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
            ->allowEmpty('bg_visao');

        $validator
            ->add('bg_missao', [
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
            ->allowEmpty('bg_missao');

        $validator
            ->add('bg_valores', [
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
            ->allowEmpty('bg_valores');

        $validator
            ->add('bg_topo', [
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
            ->allowEmpty('bg_topo');

        $validator
            ->integer('diastrabalhados')
            ->allowEmpty('diastrabalhados');

        $validator
            ->integer('pacientesatendidos')
            ->allowEmpty('pacientesatendidos');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
