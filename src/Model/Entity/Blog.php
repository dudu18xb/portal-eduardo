<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property int $visualizacao
 * @property int $autores_id
 * @property int $categoria_id
 * @property string $titulo
 * @property string $description
 * @property string $keywords
 * @property \Cake\I18n\FrozenDate $data
 * @property string $descricao
 * @property $imagemdescricao
 * @property $meta_image
 * @property $capa
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool $status
 * @property \App\Model\Entity\Autore $autore
 */
class Blog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'autores_id' => true,
        'categoria_id' => true,
        'titulo' => true,
        'data' => true,
        'descricao' => true,
        'imagemdescricao' => true,
        'capa' => true,
        'visualizacao' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'autore' => true,
        'status' => true,
        'description' => true,
        'keywords' => true,
        'meta_image' => true,
        'tipo_id' => true,
        'tipos' => true,
    ];
}
