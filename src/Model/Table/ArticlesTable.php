<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 * @property \App\Model\Table\SeosTable|\Cake\ORM\Association\BelongsTo $Seos
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\AuthorsTable|\Cake\ORM\Association\BelongsTo $Authors
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\HasMany $Photos
 * @property \App\Model\Table\BannersTable|\Cake\ORM\Association\BelongsToMany $Banners
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Article get($primaryKey, $options = [])
 * @method \App\Model\Entity\Article newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Article[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Article|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Article patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Article[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Article findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArticlesTable extends Table
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

        $this->setTable('articles');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Seos', [
            'foreignKey' => 'seo_id'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
        $this->belongsTo('Authors', [
            'foreignKey' => 'author_id'
        ]);
        $this->hasMany('Photos', [
            'foreignKey' => 'article_id',
            'saveStrategy' => 'replace',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
        $this->belongsToMany('Banners', [
            'foreignKey' => 'article_id',
            'targetForeignKey' => 'banner_id',
            'joinTable' => 'articles_banners'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'article_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'articles_tags'
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
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->allowEmpty('description');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmpty('image');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->scalar('visualization')
            ->maxLength('visualization', 255)
            ->allowEmpty('visualization');

        $validator
            ->dateTime('publication_date')
            ->allowEmpty('publication_date');

        $validator
            ->scalar('type')
            ->maxLength('type', 2)
            ->allowEmpty('type');

        $validator
            ->scalar('url_external')
            ->maxLength('url_external', 4294967295)
            ->allowEmpty('url_external');

        $validator
            ->scalar('url_text')
            ->maxLength('url_text', 4294967295)
            ->allowEmpty('url_text');

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
        $rules->add($rules->existsIn(['seo_id'], 'Seos'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['author_id'], 'Authors'));

        return $rules;
    }
}
