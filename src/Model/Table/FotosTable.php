<?php
namespace App\Model\Table;

use App\Model\Entity\Foto;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fotos Model
 *
 * @property \App\Model\Table\BlogsTable|\Cake\ORM\Association\BelongsTo $Blogs
 * @property \App\Model\Table\AboutTable|\Cake\ORM\Association\BelongsTo $About
 *
 * @method \App\Model\Entity\Foto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Foto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Foto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Foto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Foto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Foto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Foto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FotosTable extends Table
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

        $this->setTable('fotos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Blogs', [
            'foreignKey' => 'blog_id'
        ]);
        $this->belongsTo('About', [
            'foreignKey' => 'about_id'
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmpty('descricao');

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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['blog_id'], 'Blogs'));
        $rules->add($rules->existsIn(['about_id'], 'About'));

        return $rules;
    }

    /**
     * @param Event $event
     * @param Foto $entity
     * @param \ArrayObject $options
     */
    public function beforeSave(Event $event, Foto $entity, \ArrayObject $options)
    {
        if (!empty($entity->imagem) && $entity->isDirty('imagem') && !$entity->isNew()) {
            $caminho = 'files/Fotos/imagem/';
            $foto = ($entity->extractOriginal(['imagem'])['imagem']);

            if (!empty($foto) && file_exists($caminho . $foto)) {
                unlink($caminho . $foto);
                unlink($caminho . 'thumbnail-' . $foto);
            }
        }
    }
}
