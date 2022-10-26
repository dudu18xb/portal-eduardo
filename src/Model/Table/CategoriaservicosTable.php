<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoriaservicos Model
 *
 * @method \App\Model\Entity\Categoriaservico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoriaservico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categoriaservico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriaservico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriaservico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriaservico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriaservico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriaservicosTable extends Table
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

        $this->setTable('categoriaservicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->allowEmpty('titulo');

        return $validator;
    }
}
