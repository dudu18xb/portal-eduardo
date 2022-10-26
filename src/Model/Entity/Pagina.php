<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pagina Entity
 *
 * @property int $id
 * @property string $titulo
 * @property bool $status
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Pagina extends Entity
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
        'titulo' => true,
        'status' => true,
        'slug' => true,
        'meta_description' => true,
        'meta_keywords' => true,
        'created' => true,
        'modified' => true
    ];
}
