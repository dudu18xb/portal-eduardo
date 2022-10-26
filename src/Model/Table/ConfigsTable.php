<?php
namespace App\Model\Table;

use App\Model\Entity\Config;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Configs Model
 *
 * @method \App\Model\Entity\Config get($primaryKey, $options = [])
 * @method \App\Model\Entity\Config newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Config[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Config|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Config patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Config[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Config findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConfigsTable extends Table
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

        $this->setTable('configs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'logo_site' => [
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
            'favicon_site' => [
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

        $this->addBehavior('Timestamp');
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
            ->boolean('manutencao')
            ->allowEmpty('manutencao');

        $validator
            ->add('logo_site', [
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
            ->allowEmpty('logo_site');

        $validator
            ->add('favicon_site', [
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
            ->allowEmpty('favicon_site');

        $validator
            ->scalar('codigo_google_analytics')
            ->allowEmpty('codigo_google_analytics');

        $validator
            ->scalar('codigo_facebook_pixel')
            ->allowEmpty('codigo_facebook_pixel');

        $validator
            ->scalar('site_key')
            ->maxLength('site_key', 255,'Máximo de caracteres é de 255')
            ->allowEmpty('site_key');

        $validator
            ->scalar('secrete_key')
            ->maxLength('secrete_key', 255,'Máximo de caracteres é de 255')
            ->allowEmpty('secrete_key');

        $validator
            ->scalar('nome_site')
            ->maxLength('nome_site', 255,'Máximo de caracteres é de 255')
            ->allowEmpty('nome_site');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 255,'Máximo de caracteres é de 255')
            ->allowEmpty('facebook');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 255,'Máximo de caracteres é de 255')
            ->allowEmpty('instagram');

        $validator
            ->scalar('twitter')
            ->maxLength('twitter', 255, 'Máximo de caracteres é de 255')
            ->allowEmpty('twitter');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 255, 'Máximo de caracteres é de 255')
            ->allowEmpty('telefone');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 255,'Máximo de caracteres é de 255')
            ->allowEmpty('celular');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 255, 'Máximo de caracteres é de 255')
            ->allowEmpty('endereco');

        return $validator;
    }

    /**
     * @param Event $event
     * @param Config $entity
     * @param \ArrayObject $options
     */
    public function beforeSave(Event $event, Config $entity, \ArrayObject $options)
    {
        if (!empty($entity->favicon_site) && $entity->isDirty('favicon_site') && !$entity->isNew()) {
            $caminho = 'files/Configs/favicon_site/';
            $foto = ($entity->extractOriginal(['favicon_site'])['favicon_site']);

            if (!empty($foto) && file_exists($caminho . $foto)) {
                unlink($caminho . $foto);
                unlink($caminho . 'img-' . $foto);
                unlink($caminho . 'thumbnail-' . $foto);
            }
        }
        if (!empty($entity->logo_site) && $entity->isDirty('logo_site') && !$entity->isNew()) {
            $caminho = 'files/Configs/logo_site/';
            $foto = ($entity->extractOriginal(['logo_site'])['logo_site']);

            if (!empty($foto) && file_exists($caminho . $foto)) {
                unlink($caminho . $foto);
                unlink($caminho . 'thumbnail-' . $foto);
            }
        }
    }
}
